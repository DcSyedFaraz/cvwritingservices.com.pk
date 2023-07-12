<?php

namespace App\Http\Controllers\Customer;

use App\Order;
use Carbon\Carbon;
use App\Invoice;
use Illuminate\Support\Facades\Auth;

class HomeController
{
    public function index()
    {
        $orders = Order::with('invoice')->where('user_id', Auth::user()->id)->get('status_id');
        // $invoices=Invoice::where('user_id',Auth::user()->id)->get('status_id');
        $latestOrders = Order::with('invoice')->where('user_id', Auth::user()->id)->whereDate('created_at', Carbon::today())->get();
        $data = [
            'totalOrders' => $orders->count(),
            // 'clearInvoices' =>  $orders->pluck('invoice')->where('status_id', 5)->count(),
            'clearOrders' => $orders->where('status_id',3)->count(),
            'pendingOrders' => $orders->where('status_id', 1)->count(),
        ];


        return view('customer.home', compact('data', 'latestOrders'));
    }
}
