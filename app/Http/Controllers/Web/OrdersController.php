<?php

namespace App\Http\Controllers\Web;

use App\CareerLevel;
use App\Country;
use App\Deadline;
use App\Fare;
use App\File;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderRequest;
use App\Invoice;
use App\Mail\OrderMail;
use App\Mail\UserCreateMail;
use App\Order;
use App\OrderService;
use App\User;
use App\UserStripe;
use App\WebSetting;
use Faker\Provider\ar_EG\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use PhpParser\Node\Stmt\TryCatch;
use Stripe\Invoice as StripeInvoice;
use Stripe\Stripe;
use App\Mail\OrderAdminMail;
use Stripe\StripeClient;

class OrdersController extends Controller
{

    public $customer;
    public $password;

    public function create()
    {
        $countries      = Country::all();
        $career_levels  = CareerLevel::with('fare.order_service')->get();
        $fares = Fare::all();
        return view('pages.order', compact('countries', 'career_levels','fares'));
    }

    public function success()
    {
        return view('pages.order-success');
    }

    public function store(StoreOrderRequest $request)
    {
        // return $request;
        // Fetching User data
        $user = User::where(['email' => $request->email])->first();

        // dd($user);
        // Fetching Fare amount
        $fare = Fare::where(['career_level_id' => $request->career_level])->first();
        // return $fare;
        // $request->merge(['package' => $fare->order_service->name]);

        $password = Str::random(8);

        $flag = false;


        if (!$user) {

            $flag = true;

            $user = User::create(

                [
                    'name' => request('name'),
                    'email' => request('email'),
                    'phone' => request('phone'),
                    'country' => request('country'),
                    'password' => Hash::make($password),
                    'email_verified_at' => now(),
                ]
            );

            $user->roles()->sync(2);


            session()->flash('userData', ['userEmail' => 'Customer Account' . ' ' . $user->email . ' ' . 'created successfully check your email for login credentials', 'userId' => $user->id]);
        }

        $request->merge(['user_id' => $user->id]);

        DB::beginTransaction();

            $order = Order::create($request->all());

            // Generating Invoice before order placing
            $invoice = Invoice::create([
                "ref_no"    => Str::uuid()->toString(),
                "amount"    => $fare->fare_amt,
                "order_id"  => $order->id,
                "user_id"   => $user->id,
                "gateway"   => "stripe",
                "currency"  => "pkr",
            ]);

            if ($request->hasfile('emailAttachments')) {
                $fileSize = 0;
                $fileQty = 0;
                foreach ($request->file('emailAttachments') as $file) {
                    $fileSize += $file->getSize();
                    $fileQty = $fileQty + 1;
                }

                if ($fileQty > 10) {
                    $request->session()->flash('message', 'you can attach maximum 10 files.');
                    // return redirect()->route('order.now');
                    return redirect()->back();
                }

                if ($fileSize > 25000000) {
                    $request->session()->flash('message', 'file size exceeded the limit.Max limit is 25mb');
                    // return redirect()->route('order.now');
                    return redirect()->back();
                }
            }

            $files = [];

            if ($request->hasfile('emailAttachments')) {
                foreach ($request->file('emailAttachments') as $file) {
                    $fileName = uniqid() . '_' . time() . '_' . $file->getClientOriginalName();
                    $filePath = $file->storeAs('uploads', $fileName, 'public');

                    array_push($files, $filePath);

                    File::create([
                        "order_id" => $order->id,
                        "file_path" => $filePath
                    ]);
                }
            }

            // Send mail to user
            Mail::to($request->email)->send(new OrderMail($order, $files,$user,$invoice,$flag,$password));
            // Send mail to admin
            Mail::to( config('mail.from.address') )->send(new OrderAdminMail($order, $files));

        DB::commit();

        // return redirect()->route('invoice', ['reference' => $invoice->ref_no]);
        return $this->orderSuccess($order,$invoice);

    }

    public function orderSuccess($order,$invoice){
        return view('pages.order-success',compact('order','invoice'));
    }

    public function invoice(Request $request)
    {
        if ($request->query('reference')) {

            $invoice = Invoice::where(['ref_no' => $request->query('reference'), 'status_id' => 4 ])->with('order.careerLevel')->firstOrFail();

            return view('pages.invoice', compact('invoice'));
        }

        return redirect()->route('order');
    }

    public function invoiceCharge(Request $request)
    {
        return $request;

        return redirect()->route('order');
    }
}
