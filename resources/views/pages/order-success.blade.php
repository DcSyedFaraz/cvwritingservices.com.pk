@extends('layouts.web')

@section('title' ,'Order Success')
@section('canonical', config('app.app_url') . Request::path())

@section('content')
@if (session('userData'))
<div class="md:w-1/2 my-4 mx-auto bg-blue-100 border-t-4 border-primary-one rounded-b text-teal-900 px-4 py-3 shadow-md"
    role="alert">
    <div class="flex">
        <div class="py-1">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                <circle style="fill:#25AE88;" cx="25" cy="25" r="25" />
                <polyline
                    style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"
                    points="
38,15 22,33 12,25 " />
            </svg>
        </div>
        <div>
            <p class="text-center font-bold">{{ session('userData.userEmail') }}</p>
        </div>
    </div>
</div>
@endif


    {{-- <h1>name:{{ $order->name }}</h1> --}}

    <section class="container mx-auto">
        <div class="m-4 grid lg:grid-cols-6">
            <div class="lg:col-start-2 lg:col-span-4 bg-gradient-to-r from-primary-one to-primary-two text-white py-3 px-7 rounded-t-lg">
                <p class="font-bold title-font text-center text-2xl ">Thank you for choosing Us</p>
            </div>
            <div class=" lg:col-start-2 lg:col-span-4 bg-white shadow-md rounded-b-lg p-5 border border-gray-300 overflow-x-auto">
                <table class="min-w-full text-center">
                    <thead class="border-b">
                        <tr class="text-primary-three">
                            <th scope="col" class="text-sm text-primary-one font-medium px-6 py-4">
                                Order ID
                            </th>
                            
                            <th scope="col" class="text-sm text-primary-one font-medium px-6 py-4">
                                Career Level
                            </th>
                            {{-- <th scope="col" class="text-sm text-primary-one font-medium px-6 py-4">
                                Deadline
                            </th> --}}
                            <th scope="col" class="text-sm text-primary-one font-medium px-6 py-4">
                                Place at
                            </th>
                            <th scope="col" class="text-sm text-primary-one font-medium px-6 py-4">
                                Status
                            </th>
                            <th scope="col" class="text-sm text-primary-one font-medium px-6 py-4">
                                Charges
                            </th>
                        </tr>
                    </thead class="border-b">
                    <tbody>
                        <tr class="bg-white border-b text-lg">
                            <td>{{ '#' . $order->id ?? '-' }}</td>
                         
                            <td>{{ $order->careerLevel->name ?? "-" }}</td>
                            {{-- <td>{{ $order->deadline ?? "-" }}</td> --}}
                            <td>{{ showDate($order->created_at) ?? '-' }}</td>
                            <td>
                                Pending
                            </td>
                            <td>{{ addCurrency($invoice->amount) ?? '-' }}</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

    </section>
@endsection
