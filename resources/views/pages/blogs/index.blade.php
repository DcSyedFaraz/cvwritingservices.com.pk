@extends('layouts.web')

@section('title', 'Blogs')
@section('description', 'Blogs')
@section('canonical', config('app.url') . Request::path() )

@section('hero-section')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between">
            <h4 class="text-white text-3xl italic"> Blogs </h4>

            @include('partials.frontend.breadcrumb')

        </div>
    </div>
@endsection
@section('content')

    <section class="px-4 md:px-16 lg:px-24 py-14">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-10 gap-y-8">
            @if (count($blogs) > 0)
                @foreach ($blogs as $blog)
                    <div class="bg-gray-100">
                        <a href="{{ route('services.show', $blog->slug) }}">
                            <img  src="{{ url('storage/app/public/'.$blog->image_path) }}" alt="{{ env('APP_NAME') }}"  class="h-64 mx-auto py-2 hover:scale-105 hover:opacity-70 transition ease-in-out delay-150 "/>
                        </a>
                        <div class="bg-white">
                            <p class="py-4 mx-auto md:mx-0">
                                <i class="fa fa-user px-1"></i> {{ $blog->author }} on
                                <i class="fa fa-clock-o px-1"></i> {{ showDate($blog->created_at) }}
                            </p>
                            <a href="{{ route('services.show', $blog->slug) }}">
                                <p class="text-2xl font-bold w-full text-center md:text-left mt-4 sm:mt-0 text-primary-two hover:text-primary-one">
                                    {{ Str::limit( $blog->title , 80, '...')}}
                                </p>
                            </a>
                            <section class="blog-section py-2 text-center md:text-left">
                                {!!  Str::limit( $blog->description , 120, '[...]')  !!}
                            </section>

                        </div>
                        <div class="flex justify-between px-4 py-4">
                            <span>
                                <i class="fa fa-heart-o text-primary-one"></i>
                                0
                            </span>
                            <span class="border-l border-gray-400 pl-2">
                                <i class="fa fa-file-text-o pl-2 text-black"></i>
                                <a href="{{ route('services.show', $blog->slug) }}" class="ml-1 text-primary-one hover:text-primary-two underline"> Read more </a>
                            </span>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-span-2 lg:col-span-1 lg:col-start-2">
                    <p class="text-center py-4 mx-auto md:mx-0 heading-secondary">
                        No Blog found
                    </p>
                </div>
            @endif
        </div>
    </section>

@endsection
