@extends('layouts.web')

@section('title', 'About Us')
@section('description', '')
@section('canonical', config('app.url') . Request::path() )

@section('hero-section')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between">
            <h4 class="text-white text-3xl italic"> About Us </h4>

            @include('partials.frontend.breadcrumb')
        </div>
    </div>
@endsection
@section('content')

    <section class=" py-8 px-4 md:px-32 mx-auto">
        <div class="container space-y-6">
            <p class="text-black text-center">cvwritngservice.com.pk was initiated observing the difficulty of people in making a professional CV, being a qualified HR expert, our team member came up with the notion to provide candidates with an outclass CV that would enable them to reach their potential employers easily.</p>
            <p class="text-black text-center">Since then, cvwritngservice.com.pk helping hundreds of candidates to rewrite their CV in a professional manner that would bring them more interview calls. Our expert CV makers work on the phenomenon of algorithm based on keywords searchwhich companies’ uses in filtering, ranking, and finding the relevant resume.</p>
            <p class="text-black text-center">So it’s time to stop stressing over an unsatisfying resumes we will create the one for you. Just ping us anytime and we are here to deliver our professional services to you.</p>
        </div>
    </section>

    <section class="bg-primary-two py-8 px-4 md:px-32 mx-auto">
        <div class="container space-y-6">
            <p class="text-white text-center">Get your dream job with cvwritngservice.com.pk, we will present all your achievements, career experience, expertise, and skills in a way that the employer would get an idea in just a glance. Trust our certified professional and reach your next dream job station on time!</p>
            <p class="text-3xl text-primary-three font-bold text-center">Secure Your Target Job NOW!</p>
        </div>
    </section>

    @include('partials.frontend.reason-to-use')

@endsection
