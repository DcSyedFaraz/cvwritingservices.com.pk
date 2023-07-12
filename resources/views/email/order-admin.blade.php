@extends('email.layouts.main')


@section('title', 'CV Writers Order')
@section('description', 'We have received a order with the following details.')

@section('content')
    <tr>
        <td valign="top" style="border-collapse:collapse;border:0;margin:0;padding:20px;color:#555559;font-family:Arial,sans-serif;font-size:16px;line-height:26px;vertical-align:top;background-color:white;border-top:none">
            <table style="font-weight:normal;border-collapse:collapse;border:0;margin:0;padding:0;font-family:Arial,sans-serif">
                <tbody>
                    <tr>
                        <td style="border-collapse:collapse;border:0;margin:0;padding:0;color:#555559;font-family:Arial,sans-serif;font-size:16px;line-height:26px">
                            <div>
                                Thank you for reaching {{config('app.name')}}!
                                <br>
                                <br>
                                @yield('description')
                                <br>
                                <br>
                                <strong>Name : {{ $order->name ?? '-'}}</strong>
                                <br>
                                <strong>Email : {{ $order->email ?? '-' }}</strong>
                                <br>
                                <strong>Contact : {{ $order->phone ?? '-' }}</strong>
                                <br>
                                <strong>Country : {{ $order->country ?? '-' }}</strong>
                                <br>
                                <strong>Career Level : {{ $order->careerLevel->name ?? '-' }}</strong>
                                <br>
                               
                                <strong>Amount : {{ addCurrency($order->invoice->amount) ?? '-' }}</strong>
                                <br>
                                <strong>Status Invoice : {{ $order->invoice->status->name ?? '-' }}</strong>
                                <br>
                                <strong>Detail : {{ $order->detail ?? '-' }}</strong>
                                <br>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
   
@endsection
