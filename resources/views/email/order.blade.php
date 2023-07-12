@extends('email.layouts.layout')

@section('content')

        @if ($flag == true)
            <p>Hello!</p>
            <p style="font-weight:bold ;font-size:20px">{{ $user->name }}</p>
            <p>Greetings From {{ config('app.name') }}</p>
            <p>Your Account has been created successfully the following are your login credentials.</p>

            <p style="font-size:25px ;font-bold ;margin-bottom:20px;text-align:center;color:black">Account Details</p>
            <table>
                <tr>
                    <th
                        style="border: 2px solid #19BCBD;text-align: left;padding: 8px;width: 14rem;color: #19BCBD;font-size: 17px;">
                        email</th>
                    <td
                        style="border: 2px solid #19BCBD;text-align: left;padding: 8px;width: 14rem;color: #19BCBD;font-size: 17px;">
                        <strong>{{ $user->email }}</strong></td>
                </tr>
                <tr>
                    <th
                        style="border: 2px solid #19BCBD;text-align: left;padding: 8px;width: 14rem;color: #19BCBD;font-size: 17px;">
                        password</th>
                    <td
                        style="border: 2px solid #19BCBD;text-align: left;padding: 8px;width: 14rem;color: #19BCBD;font-size: 17px;">
                        <strong>{{ $password }}</strong></td>

                </tr>

            </table>


            <button><a href="{{ route('login') }}" style="color: white">Login</a></button>
        @endif

        <p>Following are the details recieved for the order uploaded by you</p>

        <p style="font-size:25px ;font-bold ;margin-bottom:20px;text-align:center; color:black">Order Details</p>
        <table>

            <tr>
                <th style="border: 2px solid #19BCBD;text-align: left;padding: 8px;width: 14rem;color: #19BCBD;font-size: 17px;">
                    Name</th>
                <td style="border: 2px solid #19BCBD;text-align: left;padding: 8px;width: 14rem;color: #19BCBD;font-size: 17px;">
                    <strong>{{ $user->name }}</strong></td>
            </tr>
            <tr>
                <th style="border: 2px solid #19BCBD;text-align: left;padding: 8px;width: 14rem;color: #19BCBD;font-size: 17px;">
                    Email</th>
                <td style="border: 2px solid #19BCBD;text-align: left;padding: 8px;width: 14rem;color: #19BCBD;font-size: 17px;">
                    <strong>{{ $user->email }}</strong></td>
            </tr>
            <tr>
                <th style="border: 2px solid #19BCBD;text-align: left;padding: 8px;width: 14rem;color: #19BCBD;font-size: 17px;">
                    Phone</th>
                <td style="border: 2px solid #19BCBD;text-align: left;padding: 8px;width: 14rem;color: #19BCBD;font-size: 17px;">
                    <strong>{{ $order->phone }}</strong></td>
            </tr>
            <tr>
                <th style="border: 2px solid #19BCBD;text-align: left;padding: 8px;width: 14rem;color: #19BCBD;font-size: 17px;">
                    Career LeveL</th>
                <td style="border: 2px solid #19BCBD;text-align: left;padding: 8px;width: 14rem;color: #19BCBD;font-size: 17px;">
                    <strong>{{ $order->careerLevel->name ?? '-' }}</strong></td>

            </tr>
           



            <tr>
                <th style="border: 2px solid #19BCBD;text-align: left;padding: 8px;width: 14rem;color: #19BCBD;font-size: 17px;">
                    Detail</th>
                <td style="border: 2px solid #19BCBD;text-align: left;padding: 8px;width: 14rem;color: #19BCBD;font-size: 17px;">
                    <strong>{{ $order->detail }}</strong></td>

            </tr>

            <tr>
                <th style="border: 2px solid #19BCBD;text-align: left;padding: 8px;width: 14rem;color: #19BCBD;font-size: 17px;">
                    Total Cost</th>
                <td style="border: 2px solid #19BCBD;text-align: left;padding: 8px;width: 14rem;color: #19BCBD;font-size: 17px;">
                    <strong>{{ addCurrency($invoice->amount ) }}</strong></td>
            </tr>



        </table>


        <button><a style="color: white" href="https://tawk.to/chat/63ce729e47425128790f26e9/1gnf6vfjf">Live
                Chat</a></button>
        <p>Kindly make the payment of <strong>{{ addCurrency($invoice->amount) }}</strong> for the confirmation of your order</p>
        {{-- <button><a style="color: white" href="{{ route('invoice', ['reference' => $invoice->ref_no]) }}">Pay
                {{ addCurrency($invoice->amount) }}</a></button> --}}
        <p>if you want to share more information or files related to your order , you can simply email us at
            {{ config('mail.from.address') }}</p>
        <p>For any further queries, feel free to contact us via email or Online Chat,</p>
        <p>Best Regards</p>
        <p>Customer Support,</p>
        <div style="text-align: left;margin-left:8px; margin-right: 8px;color:black">{{ config('app.name') }}</div>

@endsection
