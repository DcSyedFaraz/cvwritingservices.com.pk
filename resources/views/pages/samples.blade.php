@extends('layouts.web')

@section('title', 'Samples')
@section('description', 'Samples')
@section('canonical', config('app.url') . Request::path())

@section('hero-section')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between">
            <h4 class="text-white text-3xl italic"> Samples </h4>

            @include('partials.frontend.breadcrumb')

        </div>
    </div>
@endsection
@section('styles')
    <style>
        *{
            font-family:  'Montserrat', sans-serif;
        }
        @media (min-width: 350px){
            .checkPricebtn{
                display: block;
            }
        }
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
@section('content')

    <section class="container px-4 md:px-20 mx-auto pb-10">

        <p class="heading-secondary text-center py-14">SAMPLE CV / RESUMES</p>

        <div class="mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 md:gap-x-8 gap-y-6 ">
            <div class="bg-gray-300 border-4 border-primary-one rounded-xl overflow-hidden">
                <a class="spotlight" href="{{asset('imgs/samples/resume-1.jpg')}}" class="mx-auto">
                    <img src="{{asset('imgs/samples/resume-1.jpg')}}" class=" h-[23rem] w-[20rem] hover:opacity-70 cursor-pointer"/>
                </a>
            </div>
            <div class="bg-gray-300 border-4 border-primary-one rounded-xl overflow-hidden">
                <a class="spotlight" href="{{asset('imgs/samples/resume-2.jpg')}}" class="mx-auto">
                    <img src="{{asset('imgs/samples/resume-2.jpg')}}" class=" h-[23rem] w-[20rem] hover:opacity-70 cursor-pointer"/>
                </a>
            </div>
            <div class="bg-gray-300 border-4 border-primary-one rounded-xl overflow-hidden">
                <a class="spotlight" href="{{asset('imgs/samples/resume-3.jpg')}}" class="mx-auto">
                    <img src="{{asset('imgs/samples/resume-3.jpg')}}" class=" h-[23rem] w-[20rem] hover:opacity-70 cursor-pointer"/>
                </a>
            </div>
            <div class="bg-gray-300 border-4 border-primary-one rounded-xl overflow-hidden">
                <a class="spotlight" href="{{asset('imgs/samples/resume-4.jpg')}}" class="mx-auto">
                    <img src="{{asset('imgs/samples/resume-4.jpg')}}" class=" h-[23rem] w-[20rem] hover:opacity-70 cursor-pointer"/>
                </a>
            </div>
            <div class="bg-gray-300 border-4 border-primary-one rounded-xl overflow-hidden">
                <a class="spotlight" href="{{asset('imgs/samples/resume-5.jpg')}}" class="mx-auto">
                    <img src="{{asset('imgs/samples/resume-5.jpg')}}" class=" h-[23rem] w-[20rem] hover:opacity-70 cursor-pointer"/>
                </a>
            </div>
            <div class="bg-gray-300 border-4 border-primary-one rounded-xl overflow-hidden">
                <a class="spotlight" href="{{asset('imgs/samples/resume-6.jpg')}}" class="mx-auto">
                    <img src="{{asset('imgs/samples/resume-6.jpg')}}" class=" h-[23rem] w-[20rem] hover:opacity-70 cursor-pointer"/>
                </a>
            </div>
            <div class="bg-gray-300 border-4 border-primary-one rounded-xl overflow-hidden">
                <a class="spotlight" href="{{asset('imgs/samples/resume-7.jpg')}}" class="mx-auto">
                    <img src="{{asset('imgs/samples/resume-7.jpg')}}" class=" h-[23rem] w-[20rem] hover:opacity-70 cursor-pointer"/>
                </a>
            </div>
            <div class="bg-gray-300 border-4 border-primary-one rounded-xl overflow-hidden">
                <a class="spotlight" href="{{asset('imgs/samples/resume-8.jpg')}}" class="mx-auto">
                    <img src="{{asset('imgs/samples/resume-8.jpg')}}" class=" h-[23rem] w-[20rem] hover:opacity-70 cursor-pointer"/>
                </a>
            </div>
        </div>

        <p class="heading-secondary text-center py-14">SAMPLE COVER LETTERS</p>

        <div class="mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 md:gap-x-8 gap-y-6  lg:gap-y-0">
            <div class="bg-gray-300 border-4 border-primary-one rounded-xl overflow-hidden">
                <a class="spotlight" href="{{asset('imgs/samples/cover-letter-1.jpg')}}" class="mx-auto">
                    <img src="{{asset('imgs/samples/cover-letter-1.jpg')}}" class=" h-[23rem] w-[20rem] hover:opacity-70 cursor-pointer"/>
                </a>
            </div>
            <div class="bg-gray-300 border-4 border-primary-one rounded-xl overflow-hidden">
                <a class="spotlight" href="{{asset('imgs/samples/cover-letter-2.jpg')}}" class="mx-auto">
                    <img src="{{asset('imgs/samples/cover-letter-2.jpg')}}" class=" h-[23rem] w-[20rem] hover:opacity-70 cursor-pointer"/>
                </a>
            </div>
            <div class="bg-gray-300 border-4 border-primary-one rounded-xl overflow-hidden">
                <a class="spotlight" href="{{asset('imgs/samples/cover-letter-3.jpg')}}" class="mx-auto">
                    <img src="{{asset('imgs/samples/cover-letter-3.jpg')}}" class=" h-[23rem] w-[20rem] hover:opacity-70 cursor-pointer"/>
                </a>
            </div>
            <div class="bg-gray-300 border-4 border-primary-one rounded-xl overflow-hidden">
                <a class="spotlight" href="{{asset('imgs/samples/cover-letter-4.jpg')}}" class="mx-auto">
                    <img src="{{asset('imgs/samples/cover-letter-4.jpg')}}" class=" h-[23rem] w-[20rem] hover:opacity-70 cursor-pointer"/>
                </a>
            </div>
        </div>

        <p class="heading-secondary text-center py-14">SAMPLE LINKEDIN PROFILES</p>

        <div class="mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 md:gap-x-8 gap-y-6  lg:gap-y-0">
            <div class="bg-gray-300 border-4 border-primary-one rounded-xl overflow-hidden">
                <a class="spotlight" href="{{asset('imgs/samples/linkedin-profile-1.jpg')}}" class="mx-auto">
                    <img src="{{asset('imgs/samples/linkedin-profile-1.jpg')}}" class=" h-[23rem] w-[20rem] hover:opacity-70 cursor-pointer"/>
                </a>
            </div>
            <div class="bg-gray-300 border-4 border-primary-one rounded-xl overflow-hidden">
                <a class="spotlight" href="{{asset('imgs/samples/linkedin-profile-2.jpg')}}" class="mx-auto">
                    <img src="{{asset('imgs/samples/linkedin-profile-2.jpg')}}" class=" h-[23rem] w-[20rem] hover:opacity-70 cursor-pointer"/>
                </a>
            </div>
            <div class="bg-gray-300 border-4 border-primary-one rounded-xl overflow-hidden">
                <a class="spotlight" href="{{asset('imgs/samples/linkedin-profile-3.jpg')}}" class="mx-auto">
                    <img src="{{asset('imgs/samples/linkedin-profile-3.jpg')}}" class=" h-[23rem] w-[20rem] hover:opacity-70 cursor-pointer"/>
                </a>
            </div>
            <div class="bg-gray-300 border-4 border-primary-one rounded-xl overflow-hidden">
                <a class="spotlight" href="{{asset('imgs/samples/linkedin-profile-4.jpg')}}" class="mx-auto">
                    <img src="{{asset('imgs/samples/linkedin-profile-4.jpg')}}" class=" h-[23rem] w-[20rem] hover:opacity-70 cursor-pointer"/>
                </a>
            </div>
        </div>

    </section>


@endsection
@section('scripts')

    <!-- spotlight cdn -->
    <link rel="stylesheet" href="https://rawcdn.githack.com/nextapps-de/spotlight/0.7.8/dist/css/spotlight.min.css">
    <script src="https://rawcdn.githack.com/nextapps-de/spotlight/0.7.8/dist/js/spotlight.min.js"></script>

@endsection
