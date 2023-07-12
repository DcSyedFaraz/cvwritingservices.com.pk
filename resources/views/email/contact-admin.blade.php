@extends('email.layouts.main')


@section('title', 'Contact Query')
@section('description', 'We have received a contact query with the following details.')

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
                                <strong>Name : {{ $contact->name ?? '-'}}</strong>
                                <br>
                                <strong>Email : {{ $contact->email ?? '-' }}</strong>
                                <br>
                                <strong>Contact : {{ $contact->phone ?? '-' }}</strong>
                                <br>
                                <strong>Contact : {{ $contact->subject ?? '-' }}</strong>
                                <br>
                                <strong>Detail : {{ $contact->detail ?? '-' }}</strong>
                                <br>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
@endsection
