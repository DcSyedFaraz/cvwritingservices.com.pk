@extends('email.layouts.main')


@section('title', 'Welcome to {{ config(app.name) }}')
@section('description', 'Thank you for reaching out! We have successfully received your query with your personal information. Our team will contact you as soon as possible. Please make sure the following details are correct.')

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
                                <strong>Name : {{ $query->name ?? '-'}}</strong>
                                <br>
                                <strong>Email : {{ $query->email ?? '-' }}</strong>
                                <br>
                                <strong>Contact : {{ $query->phone ?? '-' }}</strong>
                                <br>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
@endsection
