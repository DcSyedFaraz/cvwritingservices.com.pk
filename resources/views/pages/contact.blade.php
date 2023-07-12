@extends('layouts.web')

@section('title', 'Contact')
@section('description', 'Contact')
@section('canonical', config('app.url') . Request::path() )

@section('hero-section')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between">
            <h4 class="text-white text-3xl italic"> Contact </h4>

            @include('partials.frontend.breadcrumb')

        </div>
    </div>
@endsection
@section('content')

    <section class="mx-auto">
        <div class="container py-12 px-4 mx-auto grid grid-cols-1 lg:grid-cols-2 gap-y-6 lg:gap-x-10">
            <div class="px-4 space-y-4">
                <p class="text-4xl text-primary-one font-bold text-center">DROP US YOUR MESSAGE</p>
                <p class="text-lg text-black text-center">We’ll get back to you with an answer as soon as possible.</p>
                @include('partials.frontend.success-message')
                <form id="contact-form" action="{{ route('contact.store') }}" method="post" class="grid grid-cols-1 md:grid-cols-2 gap-x-3 gap-y-6 mt-8 ">
                    @csrf
                    <div class="w-full space-y-2">
                        <input type="text" name="name" class="input-control @error('name') error-field @enderror" placeholder="Name" value="{{ old('name','') }}">
                        @error('name')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="w-full space-y-2">
                        <input type="text" name="email" class="input-control @error('email') error-field @enderror" placeholder="Email" value="{{ old('email','') }}">
                        @error('email')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="w-full space-y-2">
                        <input type="text" id="phone" name="phone" class="input-control @error('phone') error-field @enderror" placeholder="" value="{{ old('phone','') }}"/>
                        <p id="valid-msg" class="hidden font-bold">
                            <i class="fa fa-check-circle text-primary-two text-xl pt-2" aria-hidden="true"></i> Valid Number
                        </p>
                        <p id="error-msg" class="hidden text-primary-one"></p>
                        @error('phone')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        <input type="hidden" name="phone" id="phone2" />
                    </div>
                    <div class="w-full space-y-2">
                        <input type="text" name="subject" class="input-control @error('subject') error-field @enderror" placeholder="Subject" value="{{ old('subject','') }}">
                        @error('subject')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="w-full md:col-span-2 space-y-2">
                        <textarea name="detail" rows="2" class=" input-control @error('detail') error-field @enderror h-28" placeholder="Type details here...">{{ old('detail','') }}</textarea>
                        @error('detail')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="md:col-span-2">
                        <button id="submit" type="submit" class="btn">
                            Submit
                        </button>
                    </div>
                </form>
            </div>

            <div class="my-auto px-4">
                <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
                    <div class="bg-primary-two py-6 px-4 text-white text-center rounded-2xl w-full space-y-2">

                        <i class="fa fa-thumbs-up" style="font-size: 50px;"></i>
                        <p class="text-3xl font-semibold pb-4">FOLLOW US</p>
                        <ul class="my-4 flex space-x-4 justify-center items-center ">
                            <li>
                                <a href="{{  $web_setting->whatsapp_link ?? ''}}" target="_blank" class=" text-primary-two bg-white rounded-[50%] border border-white py-2 px-3 hover:text-primary-one text-xl"> <i class="fa fa-whatsapp"></i> </a>
                            </li>
                            <li>
                                <a href="{{  $web_setting->facebook_link ?? ''}}" target="_blank" class="text-primary-two bg-white rounded-[50%] border border-white py-2 px-4 hover:text-primary-one text-xl"> <i class="fa fa-facebook"></i> </a>
                            </li>
                            <li>
                                <a href="{{  $web_setting->instagram_link ?? ''}}" target="_blank" class="text-primary-two bg-white rounded-[50%] border border-white py-2 px-3 hover:text-primary-one text-xl"> <i class="fa fa-instagram"></i> </a>
                            </li>
                        </ul>
                    </div>

                   
                    <div class="bg-primary-two py-6 px-4 text-white text-center rounded-2xl w-full space-y-2">
                        <i class="fa fa-envelope" style="font-size: 50px;"></i>
                        <p class="text-3xl font-semibold">EMAIL</p>
                        <p class="text-2xl">
                            <a href="mailto:{{  $web_setting->email ?? ''}}" class="hover:text-primary-one">
                                {{  $web_setting->email ?? ''}}
                            </a>
                        </p>
                    </div>
                </div>

                <div class="bg-primary-two py-6 px-4 text-white text-center rounded-2xl w-full space-y-2 mt-10">
                    <i class="fa fa-phone" style="font-size: 50px;"></i>
                    <p class="text-3xl font-semibold">PHONE</p>
                    <p class="text-2xl">
                        <a href="{{  $web_setting->whatsapp_link }}" target="_blank" class="hover:text-primary-one">
                            {{  $web_setting->contact ?? ''}}
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {

            const phone     = document.querySelector("#phone");
            var errorMsg    = document.querySelector("#error-msg"),
            validMsg        = document.querySelector("#valid-msg");

            // here, the index maps to the error code returned from getValidationError - see readme
            var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

            // initialise plugin
            const phoneInput = window.intlTelInput(phone, {
                preferredCountries: ["ae"],
                separateDialCode : true,
                dropdownContainer : document.body,
                customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
                    return "e.g. " + selectedCountryPlaceholder;
                },
                initialCountry: "auto",
                geoIpLookup: function(callback) {
                    $.get("https://ipinfo.io/103.244.175.33?token=1fb4fdd88d0fa0", function() {}, "jsonp").always(function(resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "ae";
                        // success(countryCode);
                        callback(countryCode);
                    });
                },
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            });

            var submit = $('#contact-form').find(':submit');

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

            $("#contact-form").submit(function() {
                $('#contact-form').find(':submit').attr("disabled", true);
                $('#submit').html("Submiting...");
                const phoneNumber = phoneInput.getNumber();
                $('#phone2').val(phoneNumber);
                return true;
            });
        });
    </script>
@endsection

