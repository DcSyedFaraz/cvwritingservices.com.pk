@extends('layouts.web')

@section('title', 'CV Writing Services Reviews')
@section('description', '')
@section('canonical', config('app.url') . Request::path())

@section('hero-section')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between">
            <h4 class="text-white text-3xl italic"> Reviews </h4>

            @include('partials.frontend.breadcrumb')

        </div>
    </div>
@endsection
@section('content')

    <section class="container mx-auto my-10 px-4">
        <div class="mt-10 grid gap-6 lg:grid-cols-3 ">

            <div class="flex items-center border-2 group py-3 hover:bg-primary-two transition duration-300 ease-out border-primary-one rounded-xl">
                <div class="w-1/3">
                    <img src="{{asset('imgs/review.png')}}" class="mx-auto h-16">
                </div>
                <div class="w-full ">
                    <h4 class="text-2xl text-primary-one group-hover:text-white font-bold">
                        ALI
                    </h4>
                    <ul class="flex mb-1">
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                    </ul>
                    <p class="group-hover:text-white italic mt-2">
                        “I would love to write a review for this professional CV writing agency in England. They are well-proficient in their service.”
                    </p>
                </div>
            </div>
            <div class="flex items-center border-2 group py-3 hover:bg-primary-two transition duration-300 ease-out border-primary-one rounded-xl">
                <div class="w-1/3">
                    <img src="{{asset('imgs/review.png')}}" class="mx-auto h-16">
                </div>
                <div class="w-full ">
                    <h4 class="text-2xl text-primary-one group-hover:text-white font-bold">
                        ANIQ
                    </h4>
                    <ul class="flex my-1">
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                    </ul>
                    <p class="group-hover:text-white italic mt-2">
                        “I am 100% satisfied with my cover letter and customized resume.”
                    </p>
                </div>
            </div>
            <div class="flex items-center border-2 group py-3 hover:bg-primary-two transition duration-300 ease-out border-primary-one rounded-xl">
               <div class="w-1/3">
                    <img src="{{asset('imgs/review.png')}}" class="mx-auto h-16">
                </div>
                <div class="w-full ">
                    <h4 class="text-2xl text-primary-one group-hover:text-white font-bold">
                        HAMZA
                    </h4>
                    <ul class="flex mb-1">
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                    </ul>
                    <p class="group-hover:text-white italic mt-2">
                        “Glad to know <a class="hover:text-[#ddd]"
                            href="https://cvwritingservice.com.pk"> cvwritingservice.com.pk </a> is offering such
                        quality-driven work at such affordable rates.”
                    </p>
                </div>
            </div>
            <div class="flex items-center border-2 group py-3 hover:bg-primary-two transition duration-300 ease-out border-primary-one rounded-xl">
                <div class="w-1/3">
                    <img src="{{asset('imgs/review.png')}}" class="mx-auto h-16">
                </div>
                <div class="w-full ">
                    <h4 class="text-2xl text-primary-one group-hover:text-white font-bold">
                        ADEEL
                    </h4>
                    <ul class="flex mb-1">
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                    </ul>
                    <p class="group-hover:text-white italic mt-2">
                        “Highly recommended to all my friends and colleagues.”
                    </p>
                </div>
            </div>

            <div class="flex items-center border-2 group py-3 hover:bg-primary-two transition duration-300 ease-out border-primary-one rounded-xl">
                <div class="w-1/3">
                    <img src="{{asset('imgs/review.png')}}" class="mx-auto h-16">
                </div>
                <div class="w-full ">
                    <h4 class="text-2xl text-primary-one group-hover:text-white font-bold">
                        EKRAM
                    </h4>
                    <ul class="flex mb-1">
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                    </ul>
                    <p class="group-hover:text-white italic mt-2">
                        “One of their customer representatives was so friendly and cooperative that they
                        actually helped in choosing the right package.”
                    </p>
                </div>
            </div>
            <div class="flex items-center border-2 group py-3 hover:bg-primary-two transition duration-300 ease-out border-primary-one rounded-xl">
                <div class="w-1/3">
                    <img src="{{asset('imgs/review.png')}}" class="mx-auto h-16">
                </div>
                <div class="w-full ">
                    <h4 class="text-2xl text-primary-one group-hover:text-white font-bold">
                        IDREES
                    </h4>
                    <ul class="flex mb-1">
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                    </ul>
                    <p class="group-hover:text-white italic mt-2">
                        “I am impressed with my top-tier LinkedIn profile at such pretty low rates.”
                    </p>
                </div>
            </div>
            <div class="flex items-center border-2 group py-3 hover:bg-primary-two transition duration-300 ease-out border-primary-one rounded-xl">
                <div class="w-1/3">
                    <img src="{{asset('imgs/review.png')}}" class="mx-auto h-16">
                </div>
                <div class="w-full ">
                    <h4 class="text-2xl text-primary-one group-hover:text-white font-bold">
                        SHAKEEL
                    </h4>
                    <ul class="flex mb-1">
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                    </ul>
                    <p class="group-hover:text-white italic mt-2">
                        “My CV just passed the ATS scan with a 99% score. Glad to choose CVWritingService.”
                    </p>
                </div>
            </div>
            <div class="flex items-center border-2 group py-3 hover:bg-primary-two transition duration-300 ease-out border-primary-one rounded-xl">
                <div class="w-1/3">
                    <img src="{{asset('imgs/review.png')}}" class="mx-auto h-16">
                </div>
                <div class="w-full ">
                    <h4 class="text-2xl text-primary-one group-hover:text-white font-bold">
                        Ghulam Faruq
                    </h4>
                    <ul class="flex mb-1">
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                    </ul>
                    <p class="group-hover:text-white italic mt-2">
                        “A few months back, I got my CV done from here and within a month, I got two
                        calls from the leading IT companies.”
                    </p>
                </div>
            </div>
            <div class="flex items-center border-2 group py-3 hover:bg-primary-two transition duration-300 ease-out border-primary-one rounded-xl">
                <div class="w-1/3">
                    <img src="{{asset('imgs/review.png')}}" class="mx-auto h-16">
                </div>
                <div class="w-full ">
                    <h4 class="text-2xl text-primary-one group-hover:text-white font-bold">
                        UMAIR
                    </h4>
                    <ul class="flex mb-1">
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                    </ul>
                    <p class="group-hover:text-white italic mt-2">
                        “The website and working procedure are user-friendly.”
                    </p>
                </div>
            </div>
            <div class="flex items-center border-2 group py-3 hover:bg-primary-two transition duration-300 ease-out border-primary-one rounded-xl">
                <div class="w-1/3">
                    <img src="{{asset('imgs/review.png')}}" class="mx-auto h-16">
                </div>
                <div class="w-full ">
                    <h4 class="text-2xl text-primary-one group-hover:text-white font-bold">
                        MUSTAFA
                    </h4>
                    <ul class="flex mb-1">
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                    </ul>
                    <p class="group-hover:text-white italic mt-2">
                        “They have good packages for fresher who are low on budget. I hope the rates for
                            student CV will be reduced to few dollars more.”
                    </p>
                </div>
            </div>
            <div class="flex items-center border-2 group py-3 hover:bg-primary-two transition duration-300 ease-out border-primary-one rounded-xl">
                <div class="w-1/3">
                    <img src="{{asset('imgs/review.png')}}" class="mx-auto h-16">
                </div>
                <div class="w-full ">
                    <h4 class="text-2xl text-primary-one group-hover:text-white font-bold">
                        SOHAIL
                    </h4>
                    <ul class="flex mb-1">
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                    </ul>
                    <p class="group-hover:text-white italic mt-2">
                        “I needed my resume, LinkedIn profile, and cover letter urgently in 2 days and
                        they completed it within the deadline. They surely rescued me.”
                    </p>
                </div>
            </div>
            <div class="flex items-center border-2 group py-3 hover:bg-primary-two transition duration-300 ease-out border-primary-one rounded-xl">
                <div class="w-1/3">
                    <img src="{{asset('imgs/review.png')}}" class="mx-auto h-16">
                </div>
                <div class="w-full ">
                    <h4 class="text-2xl text-primary-one group-hover:text-white font-bold">
                        MINHAJ
                    </h4>
                    <ul class="flex mb-1">
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                        <li class="my-auto">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 h-4 text-yellow-500 mr-1" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                        </li>
                    </ul>
                    <p class="group-hover:text-white italic mt-2">
                        “They make good cover letters. I was confused about how to make a promising
                        letter for my nursing career and they did an exceptional job.”
                    </p>
                </div>
            </div>
        </div>
    </section>


@endsection
