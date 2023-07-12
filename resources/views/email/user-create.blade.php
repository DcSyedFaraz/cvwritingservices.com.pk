@extends('email.layouts.layout')



@section('content')
<p>Hello!</p>
<p style="font-weight:bold ;font-size:20px">{{ $user->name }}</p>
<p>Greetings From {{ env('APP_NAME', config('app.name')) }}</p>
<p>Your Account has been created successfully the following are your login credentials.</p>

<p style="font-size:25px ;font-bold ;margin-bottom:20px;text-align:center;color:black">Account Details</p>
<table>
    <tr>
        <th
            style="border: 2px solid black;text-align: left;padding: 8px;width: 14rem;color: black;font-size: 17px;">
            email</th>
        <td
            style="border: 2px solid black;text-align: left;padding: 8px;width: 14rem;color: black;font-size: 17px;">
            <strong>{{ $user->email }}</strong></td>
    </tr>
    <tr>
        <th
            style="border: 2px solid black;text-align: left;padding: 8px;width: 14rem;color: black;font-size: 17px;">
            password</th>
        <td
            style="border: 2px solid black;text-align: left;padding: 8px;width: 14rem;color: black;font-size: 17px;">
            <strong>{{ $password }}</strong></td>

    </tr>

</table>


<button><a href="{{ route('login') }}" style="color: white">Login</a></button>
@endsection
