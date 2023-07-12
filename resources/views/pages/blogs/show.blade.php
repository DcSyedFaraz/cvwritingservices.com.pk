@extends('layouts.web')

@section('title', $blog->title ?? "-")
@section('description', $blog->meta_description  ?? "-")
@section('canonical', $blog->canonical  ?? "-")
@section('styles')
<style>
   /* Core CSS */
   .service-section h1 {
            --tw-text-opacity: 1;
            color: rgb(00 00 00 / var(--tw-text-opacity));
            font-weight: bold;
            font-size: 2.25rem;
            line-height: 2.5rem;
            margin: 1rem 0;
        }

        .service-section h2,
        h3,h4 {

            --tw-text-opacity: 1;
            color: rgb(00 00 00 / var(--tw-text-opacity));
            font-size: 1.5rem;
            line-height: 2.5rem;
            margin-top: 1rem;
            margin-bottom: 1rem;

        }

        .service-section p {
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

        .service-section a {
            --tw-text-opacity: 1;
            color:  #d900e7;
            font-weight: 700;
        }

        .service-section a:hover {
            --tw-text-opacity: 1;
            color: #dc6ee3;
            text-decoration: underline;
        }

        .service-section ul {
            --tw-text-opacity: 1;
            color: #000;
            list-style-type: disc;
        }

        

        table, tr,tbody {
     border: 1px solid;
     overflow-x: scroll;
        }



        td {
     border-right: 1px solid;
     padding-left: 20px;
     padding-right: 20px;
     text-align: center;

        }
        thead,th{
            border-right: 1px solid;
        }
        thead,th{
            padding-right: 1rem;
            padding-left: 1rem;
        }

        .service-section td {
          padding-left: 1rem;
           padding-right:1rem;
         text-align: center;
        }

        /* Mobile Size CSS */
        .service-section h1 {
            text-align: center;
        }

        .service-section ul {
            margin-left: 1rem;
        }





        /* md and greater screen size */
        @media (min-width: 768px) {
            .service-section h1 {
                text-align: left;
            }

            .service-section ul {
                margin-left: 2.5rem;
            }


        }

        /* sm and greater screen size  screen size */
        @media (max-width: 640px) {
           .service-section td{
                font-size:10px;
                padding-left: 0.2rem;
                padding-right: 0.2rem;
            }
            th{
                font-size: 10px
            }

            thead,th{
            padding-right: 0.2rem;
            padding-left: 0.2rem;
        }

        }
</style>

@endsection

@section('hero-section')
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col items-center md:items-start space-y-2 md:space-y-0 md:flex-row md:justify-between">
            <h4 class="text-white text-3xl italic"> {{ $blog->title }} </h4>

            @include('partials.frontend.breadcrumb')
        </div>
    </div>
@endsection
@section('content')

    <main class="container mx-auto px-4 md:px-14 lg:px-18 xl:px-28 my-10 font-montserrat">

        <div class="flex justify-between">
            <div class="text-[#626262]">
                Published by  <i class="fa fa-user px-1"></i> {{ $blog->author }} on <i class="fa fa-clock-o px-1"></i> {{ showDate($blog->created_at) }}
            </div>
            <div>
                <div @click.away="open = false" x-data="{ open: false }" class="group inline-block relative">
                    <button @click="open = !open"
                        class=" inline-flex text-[#bcbcbd] py-2 md:mx-2 xl:px-1 text-base hover:text-primary-one items-center">
                        <span class="mr-1">Category</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 ml-1 transition-transform duration-200 transform rotate-0">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute left-0 mt-1 origin-top-right md:w-48 hidden bg-white p-3 text-[#333] group-hover:block z-20 w-48 space-y-2"
                        :class="{'hidden': !open}" style="display: none;">
                            <li class="cursor-pointer hover:text-primary-one">{{ $blog->category->name }}</li>
                    </ul>
                </div>
                <div @click.away="open = false" x-data="{ open: false }" class="group inline-block relative">
                    <button @click="open = !open"
                        class=" inline-flex text-[#bcbcbd] py-2 md:mx-2 xl:px-1 text-base hover:text-primary-one items-center">
                        <span class="mr-1">Tags</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 ml-1 transition-transform duration-200 transform rotate-0">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute left-0 mt-1 origin-top-right md:w-48 hidden bg-white p-3 text-[#333] group-hover:block z-20 w-48 space-y-2"
                        :class="{'hidden': !open}" style="display: none;">
                            @foreach ($blog->tags as $tag)
                                <li class="cursor-pointer hover:text-primary-one">{{ $tag->name }}</li>
                            @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <img src="{{ url('storage/app/public/'.$blog->image_path) }}" alt="blog-image-{{ env('APP_NAME') }}" class="my-10 mx-auto border-8 border-gray-100 hover:opacity-70 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-10 cursor-pointer max-h-[30rem]"/>

        <section class="blog-section">
            {!! $blog->description !!}
        </section>

    </main>

@endsection
