@extends('layouts.web')

@section('title', $service->title ?? '-')
@section('description', $service->meta_description ?? '-')
@section('canonical', config('app.url') . Request::path() )


@section('hero-section')
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col items-center md:items-start space-y-2 md:space-y-0 md:flex-row md:justify-between">
            <h4 class="text-white text-3xl italic"> {{ $service->name }} </h4>

            @include('partials.frontend.breadcrumb')
        </div>
    </div>
@endsection
@section('content')

    <main class="container mx-auto px-4 md:px-14 my-10 md:min-h-[15rem]">
        <section class="page-section md:px-4 lg:px-8">
            {!! $service->body !!}
            <a href="{{ route('order') }}" class="btn px-4 py-2 ">Get Your {{ $service->name  }} Now</a>
        </section>
    </main>

@endsection

@section('scripts')

@endsection
