@extends('layouts.web')

@section('title', 'Pricing')
@section('description', 'Pricing')
@section('canonical', config('app.url') . Request::path())

@section('hero-section')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between">
            <h4 class="text-white text-3xl italic"> Pricing </h4>

            @include('partials.frontend.breadcrumb')

        </div>
    </div>
@endsection
@section('styles')
    <style>
        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }
        .tabs .active {
            color: white;
            background-color: #19BCBD;
        }
        #panels{
            text-align: center;
        }
    </style>
@endsection
{{-- @section('content')

    <section class="container mx-auto px-4 py-8">

        <div class="bg-white" class="">

            <p class="text-4xl text-primary-two font-bold text-center mt-8">SORT BY:</p>

            <nav class="tabs flex flex-col md:flex-row justify-center md:space-x-4 my-8 mx-8">
                @foreach ($pricing as $key => $price)
                    <button data-target="panel-{{ $price->id }}" class="{{ $key == 0 ? 'active' : '' }}  tab py-2 px-6 block hover:bg-primary-one hover:text-white font-semibold text-4xl focus:outline-none">
                        {{ $price->name }}
                    </button>
                @endforeach
            </nav>
        </div>

        <div id="panels" class="mx-4 lg:mx-32">
            @foreach ($pricing as $key => $price)
                <div class="panel-{{ $price->id }} tab-content py-5 {{ $key == 0 ? 'active' : '' }} ">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 ">
                        @foreach ($price->fare as $key => $fare)

                            <div class="custom-css bg-white rounded shadow-xl border-2 border-primary-two my-4 w-[90%] mx-auto text-center space-y-1" >
                                <div class="bg-primary-two py-4">
                                    <h5 class="text-white text-3xl font-bold">{{ $price->name }}</h5>
                                    <p class="text-white text-lg "> {{ $fare->order_service->name }}</p>
                                </div>
                                <p class="text-5xl font-bold py-3 "><sup class="text-[50%]">PKR</sup>{{  $fare->fare_amt }}</p>
                                <div class="text-center pt-6 pb-10">
                                    <a href="{{ route('order') }}" class="btn px-6"> Order Now </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection --}}

@section('content')
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-y-8 md:gap-y-4 xl:gap-y-0 gap-x-4 my-4 py-8">
            <div class="border-2 border-primary-one text-center space-y-2 mx-4">
                <div class="flex justify-end mt-2">
                    <p class="bg-[#34495e] rounded-lg p-4  text-white"> 0-2 Years <br>
                        Experience</p>
                </div>
                <i class="fa fa-star text-4xl text-blue-500"></i>
                <p class="text-2xl font-bold">Beginner</p>
                <p class="text-3xl py-8"><sub>PKR</sub> 3000</p>
                <p><i class="fa fa-check mr-2"></i>Professional CV</p>
                <p><i class="fa fa-check mr-2"></i>Cover Letter</p>
                <p><i class="fa fa-check mr-2"></i>Thank You Note</p>
                <p><i class="fa fa-check mr-2"></i>Follow Up Email</p>
                <p>To start off your career with a super job!</p>
                <p class="bg-primary-one p-8 text-white text-xl font-bold"><a href="{{ route('order') }}">Get Started</a></p>
            </div>
            <div class="border-2 border-primary-one text-center space-y-2 mx-4">
                <div class="flex justify-end mt-2">
                    <p class="bg-[#34495e] rounded-lg p-4  text-white"> 3-5 Years <br>
                        Experience</p>
                </div>
                <i class="fa fa-user-tie text-4xl text-blue-500"></i>
                <p class="text-2xl font-bold">Middle</p>
                <p class="text-3xl py-8"><sub>PKR</sub> 5000</p>
                <p><i class="fa fa-check mr-2"></i>Professional CV</p>
                <p><i class="fa fa-check mr-2"></i>Cover Letter</p>
                <p><i class="fa fa-check mr-2"></i>Thank You Note</p>
                <p><i class="fa fa-check mr-2"></i>Follow Up Email</p>
                <p>For mid level professionals who want to outshine peers.</p>
                <p class="bg-primary-one p-8 text-white text-xl font-bold"><a href="{{ route('order') }}">Get Started</a></p>
            </div>
            <div class="border-2 border-primary-one text-center space-y-2 mx-4">
                <div class="flex justify-end mt-2">
                    <p class="bg-[#34495e] rounded-lg p-4  text-white "> 5-10 Years <br>
                        Experience</p>
                </div>
                <i class="fa fa-black-tie text-4xl text-blue-500"></i>
                <p class="text-2xl font-bold">Top</p>
                <p class="text-3xl py-8"><sub>PKR</sub> 8000</p>
                <p><i class="fa fa-check mr-2"></i>Professional CV</p>
                <p><i class="fa fa-check mr-2"></i>Cover Letter</p>
                <p><i class="fa fa-check mr-2"></i>Thank You Note</p>
                <p><i class="fa fa-check mr-2"></i>Follow Up Email</p>
                <p>Get a brand new CV to compliment your experience</p>
                <p class="bg-primary-one p-8 text-white text-xl font-bold"><a href="{{ route('order') }}">Get Started</a></p>
            </div>
            <div class="border-2 border-primary-one text-center space-y-2 mx-4">
                <div class="flex justify-end mt-2">
                    <p class="bg-[#34495e] rounded-lg p-4  text-white"> 10+ Years <br>
                        Experience</p>
                </div>
                <i class="fa fa-crown text-4xl text-blue-500"></i>
                <p class="text-2xl font-bold">C-Suite</p>
                <p class="text-3xl py-8"><sub>PKR</sub> 12000</p>
                <p><i class="fa fa-check mr-2"></i>Professional CV</p>
                <p><i class="fa fa-check mr-2"></i>Cover Letter</p>
                <p><i class="fa fa-check mr-2"></i>Thank You Note</p>
                <p><i class="fa fa-check mr-2"></i>Follow Up Email</p>
                <p>For top level managerial and executive positions</p>
                <p class="bg-primary-one p-8 text-white text-xl font-bold"><a href="{{ route('order') }}">Get Started</a></p>
            </div>
        </div>
    </div>
@endsection





@section('scripts')
    <script>
        const tabs = document.querySelectorAll(".tabs");
        const tab = document.querySelectorAll(".tab");
        const panel = document.querySelectorAll(".tab-content");

        function onTabClick(event) {

            // deactivate existing active tabs and panel

            for (let i = 0; i < tab.length; i++) {
                tab[i].classList.remove("active");
            }

            for (let i = 0; i < panel.length; i++) {
                panel[i].classList.remove("active");
            }


            // activate new tabs and panel
            event.target.classList.add('active');
            let classString = event.target.getAttribute('data-target');
            console.log(classString);
            document.getElementById('panels').getElementsByClassName(classString)[0].classList.add("active");
        }

        for (let i = 0; i < tab.length; i++) {
            tab[i].addEventListener('click', onTabClick, false);
        }
    </script>
@endsection
