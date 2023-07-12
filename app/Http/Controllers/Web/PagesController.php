<?php

namespace App\Http\Controllers\Web;

use App\AcademicLevel;use App\CareerLevel;
use App\Fare;
use App\Http\Controllers\Controller;
use App\OrderQuery;
use App\Deadline;
use App\File;
use App\Http\Requests\QuatationRequest;
use App\OrderService;
use App\Quotation;
use App\WebSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;
use Stripe\StripeClient;
use App\Mail\OrderQueryMail;
use App\Mail\OrderQueryAdminMail;

class PagesController extends Controller
{
    public function index()
    {
        $web_setting = WebSetting::first();

        $career_levels      = CareerLevel::all();
        $order_services     = OrderService::all();
        $deadlines          = Deadline::orderBy('name','DESC')->get();

        return view('pages.home', compact('career_levels','order_services','deadlines', 'web_setting'));
    }

    public function about()
    {

        

        // Artisan::call('migrate:fresh --seed');
        // dd('migrate:fresh --seed run!');

        //   Artisan::call('cache:clear');
        //   Artisan::call('config:cache');
        //   Artisan::call('optimize');
        //   dd("Cache is cleared");

        return view('pages.about');
    }

    public function pricing()
    {
        $pricing = CareerLevel::with('fare.order_service')->get();

        return view('pages.pricing', compact('pricing'));
    }

    public function reviews()
    {
        return view('pages.reviews');
    }

    public function samples()
    {
        return view('pages.samples');
    }

    public function privacy()
    {
        return view('pages.privacy-policy');
    }

    public function terms()
    {
        return view('pages.terms');
    }

     public function quotation(QuatationRequest $request)
    {

        $file = $request->file('file');
        if ($request->hasfile('file')) {
            $fileName = time() . '.' . $file->extension();
            $filePath = $file->storeAs('uploads', $fileName, 'public');
            $request->merge(['file_path'=> $filePath]);
        }

        DB::beginTransaction();
            $quatation =  Quotation::create($request->all());
            // Send mail to user
            Mail::to($quatation->email)->send(new OrderQueryMail($quatation, $file));
            // Send mail to admin

            Mail::to(config('mail.from.address'))->send(new OrderQueryAdminMail($quatation, $file));

            DB::commit();

        return redirect()->back()->withSuccess('We receive your query successfully.');
    }

    public function getFare(Request $request)
    {
        // return $request->all();

        return Fare::where(['career_level_id' => $request->career_level_id, 'deadline_id' => $request->deadline_id,'order_service_id' => $request->order_service_id])->firstOrFail();
    }


    public function cache()
    {
        Artisan::call('migrate:fresh --seed');
        dd('migrate:fresh --seed run!');

        Artisan::call('optimize');
        Artisan::call('config:cache');
        Artisan::call('cache:clear');

        abort(404);
    }

}
