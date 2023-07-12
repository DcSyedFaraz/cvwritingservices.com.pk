@extends('layouts.web')

@section('title', 'Pakistan’s Best CV Writing Services from Top CV Writers')
@section('description', 'Get Help from Professional CV Writers of CV Writing Service in Pakistan, A Team of Best CV Makers Help you Stand Out. Get Your Dream Job with a Winning CV!')
@section('canonical', config('app.url'))

@section('hero-section')
    <div class="container mx-auto lg:px-4 py-6">
        <div class="flex flex-col space-y-4 my-2 md:my-0 lg:flex-row lg:mx-4">
            <div class="w-full lg:w-[65%] xl:w-[70%] px-2 lg:py-5 my-auto">
                <div class="text-center text-white lg:text-left space-y-4 lg:mr-16">
                    <h1 class="text-4xl mb-4 text-primary-one font-semibold">
                        BEST CV WRITING SERVICES IN PAKISTAN
                    </h1>
                    <p class="text-[#BCBCBD] font-semibold pb-4 text-lg">
                        Behind every success story there’s a CV that has captured the employer's attention in the first impression.
                    </p>
                    <hr>
                    <p class="text-[#BCBCBD] font-semibold pb-4 text-lg">
                        Fill the missing gaps in your CV to get the interview call you have been waiting for long. For this, our professional CV writing services can be of great help to you.
                    </p>
                    <p class=" font-semibold pb-4 text-lg">
                        Remember your CV is the ticket to your Career Success. You can’t let it go with an Outdated, Boring & Unprofessional Template. Let us help you grow.
                    </p>
                </div>
                <div
                    class="flex flex-col space-y-2 sm:space-y-0 sm:space-x-2 sm:flex-row items-center justify-center lg:justify-start text-white">
                    <div class="p-5">
                        <a href="#" target="_blank">
                            <img src="{{ asset('imgs/sitejabbarimg.png') }}" alt="{{ config('app.name') }}"
                                class="mx-auto h-14">
                        </a>
                        <ul class="flex justify-center">
                            <li class="mr-1">4.9</li>
                            <li class="my-auto text-cyan-600">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                    class="w-4 text-yellow-500" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                    </path>
                                </svg>
                            </li>
                        </ul>
                    </div>
                    <div class="p-5">
                        <a href="#" target="_blank">
                            <img src="{{ asset('imgs/trustpilot.png') }}" alt="{{ config('app.name') }}"
                                class="mx-auto h-14">
                        </a>
                        <ul class="flex justify-center">
                            <li class="mr-1">4.9</li>
                            <li class="my-auto text-cyan-600">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                    class="w-4 text-yellow-500" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                    </path>
                                </svg>
                            </li>
                        </ul>
                    </div>
                    <div class="p-5">
                        <a>
                            <img src="{{ asset('imgs/reviewsbank.png') }}" alt="{{ config('app.name') }}"
                                class="mx-auto h-14">
                        </a>
                        <ul class="flex justify-center">
                            <li class="mr-1">4.9</li>
                            <li class="my-auto text-cyan-600">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </li>
                            <li class="my-auto">
                                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                    class="w-4 text-yellow-500" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                    </path>
                                </svg>
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    class="flex flex-col space-y-2 sm:space-y-0 sm:space-x-2 sm:flex-row items-center justify-center lg:justify-start">
                    <a href="javascript:void(Tawk_API.toggle())" class="btn px-6 max-w-xs md:w-auto">
                        Live Chat
                    </a>
                    <a href="{{ $web_setting->whatsapp_link ?? '' }}" class="btn px-6 max-w-xs md:w-auto">
                        <i class="fa fa-whatsapp"></i>
                        {{ $web_setting->contact ?? '' }}
                    </a>
                </div>
            </div>
            <div class="panel w-full sm:w-[70%] lg:w-[35%] xl:w-[30%] mx-auto ">
                <form id="quotation-form" action="{{ route('price-quote') }}" enctype="multipart/form-data"
                    method="post"
                    class="border-4 border-primary-one shadow-md rounded-lg px-4 pt-2 pb-6 flex flex-col md:ml-auto w-full space-y-4 text-white ">
                    @csrf
                    <div class="bg-primary px-5 rounded-t-lg">
                        <span id="quote" class="text-3xl text-center text-white font-semibold"></span>
                        @include('partials.frontend.success-message')
                    </div>
                    <div class="mb-2">
                        <input type="text" name="name" class="input-control @error('name') error-field @enderror"
                            placeholder="Full Name" value="{{ old('name', '') }}">
                        @error('name')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <input type="text" id="phone" class="input-control @error('phone') error-field @enderror"
                            placeholder="" value="{{ old('phone', '') }}" />
                        <p id="valid-msg" class="hidden font-bold">
                            <i class="fa fa-check-circle text-primary-two text-xl pt-2" aria-hidden="true"></i> Valid
                            Number
                        </p>
                        <p id="error-msg" class="hidden text-primary-one"></p>
                        @error('phone')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        <input type="hidden" name="phone" id="phone2" />
                    </div>
                    <div class="mb-2">
                        <input type="email" name="email" class="input-control @error('email') error-field @enderror"
                            placeholder="Email" value="{{ old('email', '') }}">
                        @error('email')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div
                        class="flex flex-col md:flex-row md:space-x-4 space-y-4 md:space-y-0 items-center justify-center w-full">
                        <label for="file" id="attachment"
                            class="cursor-pointer bg-transparent border border-[#BCBCBD] text-white text-center w-full py-3 text-lg font-semibold rounded">
                            Attach CV
                        </label>
                        <input id="file" type="file" class="hidden" name="file">
                        <button id="submit" type="submit" class="btn">
                            Submit
                        </button>
                    </div>
                    <div id="fileList" class="text-gray-300 space-y-1 w-full overflow-hidden"></div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="bg-[#19BCBD] pt-8 px-4 lg:px-32 mx-auto">
        <div class="container space-y-6 mx-auto">
            <h2 class="text-3xl md:text-4xl text-white font-bold text-center">
                Take Help from the Best CV Maker in Pakistan for your Pathway to Success
            </h2>
            <p class="text-white text-center">In between a great job opportunity and a potential candidate there’s only a CV that can bridge the gap. And there’s only one chance. Now, it’s your turn to nail the opportunity with an Outstanding Resume.</p>
            <img src="{{ asset('imgs/pic.jpg') }}" class="mx-auto w-96" alt="{{ config('app.name') }}">
        </div>
    </section>

    <section class="bg-road-bg bg-no-repeat bg-cover bg-center py-8 px-4 lg:px-32 mx-auto">
        <div class="container space-y-6 mx-auto">
            <p class="heading-primary">Now, No More Rejections. Get Only Interview Calls & Offers</p>
            <p class="text-white text-center">Tired of dropping your CV everywhere but not receiving the interview call? You might be missing the secret ingredients that make a CV excellent. A prolific career statement, career strengths, skills, and highlights. Above all these is a strong template that forms the foundation of your resume. We are sure you don’t want to miss all these essential ingredients as it can lead to job rejection. But now no more worries as taking help from the CV writing specialists can take you from the low to the highs. Let’s start today.</p>
            <p class="text-white text-center">Also, take a look on our samples to get the idea about our work:</p>
            {{-- <p class="text-xl text-white text-center font-semibold">SIMPLE & TAILORED</p>
            <p class="text-white text-center">Our CV writing in UAE makes your life hassle-free. We cut the clutter and
                tailor your profile to the job you want to apply.</p>
            <hr class="w-[70%] mx-auto">
            <p class="text-xl text-white text-center font-semibold">OPPORTUNITY GRABBING</p>
            <p class="text-white text-center">Tired of waiting? We know how to let you grab the job by creating a CV
                your employer always wants to have.</p> --}}

            <div class="mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 md:gap-x-8 gap-y-6 ">
                <div class="bg-gray-300 border-4 border-primary-one rounded-xl overflow-hidden">
                    <a class="spotlight" href="{{ route('samples') }}" class="mx-auto">
                        <img src="{{ asset('imgs/samples/resume-home-1.webp') }}"
                            class="p-1 rounded-xl h-[23rem] w-[20rem] hover:opacity-70 cursor-pointer"
                            alt="{{ config('app.name') }}" />
                    </a>
                </div>
                <div class="bg-gray-300 border-4 border-primary-one rounded-xl overflow-hidden">
                    <a class="spotlight" href="{{ route('samples') }}" class="mx-auto">
                        <img src="{{ asset('imgs/samples/resume-home-2.jpg') }}"
                            class="p-1 rounded-xl h-[23rem] w-[20rem] hover:opacity-70 cursor-pointer"
                            alt="{{ config('app.name') }}" />
                    </a>
                </div>
                <div class="bg-gray-300 border-4 border-primary-one rounded-xl overflow-hidden">
                    <a class="spotlight" href="{{ route('samples') }}" class="mx-auto">
                        <img src="{{ asset('imgs/samples/resume-home-3.webp') }}"
                            class="p-1 rounded-xl h-[23rem] w-[20rem] hover:opacity-70 cursor-pointer"
                            alt="{{ config('app.name') }}" />
                    </a>
                </div>
                <div class="bg-gray-300 border-4 border-primary-one rounded-xl overflow-hidden">
                    <a class="spotlight" href="{{ route('samples') }}" class="mx-auto">
                        <img src="{{ asset('imgs/samples/resume-home-4.webp') }}"
                            class="p-1 rounded-xl h-[23rem] w-[20rem] hover:opacity-70 cursor-pointer"
                            alt="{{ config('app.name') }}" />
                    </a>
                </div>
            </div>


            <div class="text-center">
                <a href="{{ route('samples') }}" class="btn px-6">
                    Ready to See all
                </a>
            </div>
        </div>
    </section>

    <section class=" mx-auto">
        <div class=" grid grid-cols-1 lg:grid-cols-2 mx-auto">
            <div class="my-8 pl-4 md:pl-12 lg:pl-32 ml-auto lg:w-[60rem] space-y-3">
                <h3 class="text-2xl md:text-4xl text-primary-one font-bold ">The Best CV Writers in Pakistan are a Click Away - Discuss Your CVs with the Experts to Stand Ahead of other Candidates</h3>
                {{-- <h3 class="heading-secondary">OUR BEST CV WRITERS IN DUBAI KNOWS HOW TO DO IT </h3> --}}
                {{-- <p class="text-xl text-black font-semibold">GET READY TO WELCOME OPPORTUNITIES</p> --}}
                {{-- <ul class="text-black text-lg space-y-2">
                    <li><i class="fa fa-check-circle text-primary-two " style="font-size:25px" aria-hidden="true"></i>
                        Result-Driven CV Writing in UAE</li>
                    <li><i class="fa fa-check-circle text-primary-two " style="font-size:25px" aria-hidden="true"></i>
                        Get it Done before Deadline</li>
                    <li><i class="fa fa-check-circle text-primary-two " style="font-size:25px" aria-hidden="true"></i>
                        Professional CV templates tailored to your Job Profiles</li>
                    <li><i class="fa fa-check-circle text-primary-two " style="font-size:25px" aria-hidden="true"></i>
                        Budget-friendly Services</li>
                    <li><i class="fa fa-check-circle text-primary-two " style="font-size:25px" aria-hidden="true"></i>
                        Responsive Customer Support Services</li>
                    <li><i class="fa fa-check-circle text-primary-two " style="font-size:25px" aria-hidden="true"></i>
                        Get your CV done by the best CV makers in Dubai</li>
                </ul>
                <div class="flex justify-center checkPricebtn mt-6 btn">
                    <a href="{{ route('pricing') }}" class=" ">
                        Convinced? Check Out The Prices!</a>
                </div> --}}

                <p>No more struggles to create a professional career profile when you can have the best in a short time. CV writing isn’t an ordinary piece of writing that you can do without experience. It requires skills and expertise. And without prior experience, you can’t come with a job-winning CV. That’s why it’s better to take help from the experts.</p>
                <p>At CV Writing Service, we give you the edge to take your career to new heights. Whether you want to get the job done from a professional CV maker in Karachi or professional CV writers from Lahore or Islamabad, we have specialists who can help you elevate your career.</p>
            </div>

            <div class="bg-cv-bg bg-no-repeat bg-cover bg-center ">

            </div>

        </div>

    </section>

    <section class="bg-[#32A3E5] py-8 px-4 lg:px-32 mx-auto">
        <div class="container space-y-6 mx-auto">
            {{-- <p class="text-black text-center ">How do you feel when you consistently apply for jobs and don’t receive
                the response? We can understand your disappointment on this. That’s why we’re here to empower your
                career. We know you have the abilities but the lack to create a shining profile limits your potential.
                At cvwriters.ae we help you meet your dream job with our CV writing services in Sharjah, Abu Dhabi, Bur
                Dubai, UAE.</p> --}}
            <p class="text-3xl text-white font-bold text-center">One of the Professional CV Writing Services in Pakistan whose Prime Focus is your Career Growth & Success</p>
            <p class="text-center">A lot of people dream about getting a job that's the best match for them but only a few get it. Why? Because they have the CV the recruiter is hunting for. </p>
        </div>
    </section>

    <section class=" py-8 px-4 lg:px-28 mx-auto">
        <div class="container space-y-6 mx-auto">
            <h3 class="heading-primary">Why Should You Take Help from the Professional Resume Writers in Pakistan?
            </h3>
            <p class="text-black text-center">In Pakistan, there’s an old thinking of writing the resume yourself and not taking help from professionals because it costs you a little money. But nobody understands that investing this little amount can save you from the consistent rejections, interview call delays, hassles of job and career switching. However, you shouldn’t always seek help from experts but when you notice a major pause in your career, any expert CV maker in Pakistan can be of great assistance to you. </p>
            <p class="text-black text-center">Secondly, career experts can give a purpose to your CV, tailor it to the job description and can also make it strong in terms of content and design. On top of that, they can open the door to opportunities with a fresh, updated and ATS-friendly resume. So, how about starting with the best CV writers in Pakistan to kick start your career? And trust us, we are worth investing. </p>
            <p class="heading-secondary text-center">3 Reasons to Trust Us</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-x-4 gap-y-4 lg:gap-y-0">

                <div
                    class="group  hover:bg-primary-two transition duration-300 ease-out border-2 border-primary-one rounded-xl px-4 py-2 space-y-4 text-center">
                    <h4 class="text-lg text-primary-one font-bold group-hover:text-white">We Create Ways</h4>
                    <p class="group-hover:text-white">Pakistan’s #1 CV Writing Service who thinks about your Career the same way as You.</p>
                </div>

                <div
                    class="group hover:bg-primary-two transition duration-300 ease-out border-2 border-primary-one rounded-xl px-4 py-2 space-y-4 text-center">
                    <h4 class="text-lg text-primary-one font-bold group-hover:text-white">We Are Affordable</h4>
                    <p class="group-hover:text-white">We deliver the best work at the budget-friendly rates for Students, Professionals & Experts. </p>
                </div>

                <div
                    class="group hover:bg-primary-two transition duration-300 ease-out border-2 border-primary-one rounded-xl px-4 py-2 space-y-4 text-center md:col-span-2 lg:col-span-1">
                    <h4 class="text-lg text-primary-one font-bold group-hover:text-white">We are Available</h4>
                    <p class="group-hover:text-white">Get your CV queries resolved in no time. Our customer support team is always up to assist. </p>
                </div>
            </div>

            <div class="text-center">
                <a href="{{ route('order') }}" class="btn px-6">
                    Get Your Pro CV Now
                </a>
            </div>

        </div>
    </section>

    <section class="bg-[#e2e2e2] py-8 px-4 lg:px-32 mx-auto">
        <div class="container space-y-4 text-center mx-auto">
            <h3 class="heading-secondary">Not Only CV, We Deliver More</h3>
            <p class="text-center">All we have talked above is CV only. You must be thinking we provide services in this niche only. But know that we are a group of experts who serve in all niches regarding career guidance. Let’s find out what these are:</p>

            <h4 class="text-lg text-primary-one font-bold">Cover Letters</h4>
            <p class="text-black">Attaching a personalized cover letter with your CV gives you an edge over other candidates. But the letter should be persuasive and should talk about your expertise, field of interest and experience in brief. Moreover, it should be creative and free from grammatical errors. Letters written with a strong career statement captures the attention in the first impression. Let us help you deliver that. </p>
            <h4 class="text-lg text-primary-one font-bold">LinkedIn Profile</h4>
            <p class="text-black">Do you know recruiters nowadays search you on LinkedIn before giving you the interview call? If you don’t have an optimized profile yet, you’re missing a great opportunity to be shown on the Internet when it comes to hiring. Let our LinkedIn experts do this heavy lifting while you enjoy its benefits. Get discovered by recruiters and professionals from all over the world with a captivating LinkedIn profile.</p>
            <h4 class="text-lg text-primary-one font-bold">Career Switch CV</h4>
            <p class="text-black">Do you realize in the midst of your career that this is not the field you want to go forward with? And you’re looking to switch your career. For this you might be searching “best CV writing services near me.” But the good thing is that we can also help you here. Whether you’re looking to switch your career from Engineering to Marketing or Teacher to Mentor, our career experts can guide you better.  </p>
            <h4 class="text-lg text-primary-one font-bold">Portfolio CV</h4>
            <p class="text-black">You have achieved a lot in your life. Or you might have served clients from all over the world. And you want to show all your achievements in a portfolio or Gallery CV, we have a solution for that too. Our designers, CV writers and editors can help you create a picture-based CV to land your next job faster. </p>
        </div>
    </section>

    <section class="bg-[#32A3E5] py-8 px-4 lg:px-32 mx-auto">
        <div class="container text-center space-y-8 mx-auto">
            <p class="text-lg text-white font-bold">Say Hello to Our Professional CV Maker in Islamabad, Karachi, Lahore, Peshawar, Multan, and Faisalabad, Pakistan. They are waiting to hear your story.
            </p>
            <div class="text-center">
                <a href="{{ route('order') }}" class="btn-reverse px-6">
                    Get Your Pro CV Now
                </a>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    {{-- Typed Lib --}}
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        $(document).ready(function() {
            var input = document.getElementById('file');
            input.addEventListener('change', function() {
                if (input.files.length > 10) {
                    document.getElementById('fileList').innerHTML =
                        '<p>' + 'Files length can not be exceded more than 10' + '</p>';
                    document.getElementById("file").value = "";

                } else if (input.files.length < 11) {
                    var totalSize = 0;
                    for (var i = 0; i <= input.files.length - 1; i++) {
                        var fsize = input.files.item(i).size; // THE SIZE OF THE FILE.
                        totalSize = totalSize + fsize;
                    }

                    if (totalSize > 25000000) {
                        console.log(totalSize);
                        document.getElementById('fileList').innerHTML =
                            '<p>' + 'Files size can not be exceded more than 25mb' + '</p>';
                        document.getElementById("file").value = "";
                    } else {
                        var output = document.getElementById('fileList');
                        var children = "";
                        for (var i = 0; i < input.files.length; ++i) {
                            children += '<li>' + input.files.item(i).name + '</li>';
                        }
                        output.innerHTML = '<ul>' + children + '</ul>';
                    }
                }
            })

            var typed = new Typed('#quote', {
                strings: ["Get CV Review", "Attach Sample", "Get Price Quotation", "Grab Opportunity"],
                typeSpeed: 100,
                backSpeed: 100,
                loop: true
            });

            const phone = document.querySelector("#phone");
            var errorMsg = document.querySelector("#error-msg"),
                validMsg = document.querySelector("#valid-msg");

            // here, the index maps to the error code returned from getValidationError - see readme
            var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

            // initialise plugin
            const phoneInput = window.intlTelInput(phone, {
                preferredCountries: ["ae"],
                separateDialCode: true,
                dropdownContainer: document.body,
                customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
                    return "e.g. " + selectedCountryPlaceholder;
                },
                initialCountry: "auto",
                geoIpLookup: function(callback) {
                    $.get("https://ipinfo.io/103.244.175.33?token=1fb4fdd88d0fa0", function() {},
                        "jsonp").always(function(resp) {
                        var countryCode = (resp && resp.country) ? resp.country : "ae";
                        // success(countryCode);
                        callback(countryCode);
                    });
                },
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            });

            var submit = $('#quotation-form').find(':submit');

            var reset = function() {
                phone.classList.remove("error");
                phone.classList.remove("error-field");
                errorMsg.innerHTML = "";
                errorMsg.classList.add("hidden");
                validMsg.classList.add("hidden");
                submit.attr("disabled", true);
                submit.addClass("btn-disabled");
            };

            // on blur: validate
            phone.addEventListener('blur', function() {
                reset();
                if (phone.value.trim()) {
                    if (phoneInput.isValidNumber()) {
                        validMsg.classList.remove("hidden");
                        submit.attr("disabled", false);
                        submit.removeClass("btn-disabled");
                    } else {
                        phone.classList.add("error");
                        phone.classList.add("error-field");
                        var errorCode = phoneInput.getValidationError();
                        errorMsg.innerHTML = errorMap[errorCode];
                        errorMsg.classList.remove("hidden");
                    }
                }
            });

            // on keyup / change flag: reset
            phone.addEventListener('change', reset);
            phone.addEventListener('keyup', reset);

            $("#quotation-form").submit(function() {
                $('#quotation-form').find(':submit').attr("disabled", true);
                $('#submit').html("Submiting...");
                const phoneNumber = phoneInput.getNumber();
                $('#phone2').val(phoneNumber);
                return true;
            });
        });
    </script>
@endsection
