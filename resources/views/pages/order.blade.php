@extends('layouts.web')

@section('title', 'Order Now')
@section('description', 'Order Now')
@section('canonical', config('app.url') . Request::path())

@section('hero-section')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between">
            <h4 class="text-white text-3xl italic"> Order Now </h4>

            @include('partials.frontend.breadcrumb')
        </div>
    </div>
@endsection
@section('content')
    <section class="mx-auto">

        <p class="text-primary-two text-center text-5xl font-semibold py-6 px-4">ORDER NOW</p>
        <p class="text-center text-xl">We are glad that you are here. You are invited to share your project details.</p>
        <!-- form -->
        <div class="container mx-auto py-6">
            <div class="mx-auto lg:mx-8 px-8">

                <div class="px-2 space-y-4">
                    <form id="order-form" action="{{ route('order.store') }}" method="post" enctype="multipart/form-data"
                        class="grid grid-cols-1 md:grid-cols-2 gap-x-3 gap-y-6 mt-8 ">
                        @csrf
                        <div class="w-full space-y-2">
                            <label class="font-semibold text-lg">Name:</label>
                            <input type="text" name="name" class="input-control @error('name') error-field @enderror"
                                placeholder="Name" value="{{ old('name') }}">
                            @error('name')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="w-full space-y-2">
                            <label class="font-semibold text-lg">Email:</label>
                            <input type="text" name="email" class="input-control @error('email') error-field @enderror"
                                placeholder="Email" value="{{ old('email') }}">
                            @error('email')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="w-full space-y-2">
                            <label class="font-semibold text-lg">Phone:</label>
                            <input type="text" id="phone" name="phone"
                                class="input-control @error('phone') error-field @enderror" placeholder=""
                                value="{{ old('phone', '') }}" />
                            <span id="valid-msg" class="hidden font-bold">
                                <i class="fa fa-check-circle text-primary-two text-xl pt-2" aria-hidden="true"></i> Valid
                                Number
                            </span>
                            <span id="error-msg" class="hidden text-primary-one"></span>
                            <input type="hidden" name="phone" id="phone2" />
                            @error('phone')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="w-full space-y-2">
                            <label class="font-semibold text-lg">Country:</label>
                            <select id="Country" name="country"
                                class="form-select mt-2 @error('country') error-field @enderror">
                                <option hidden="" disabled="" selected="">Choose any country</option>
                                @if (!empty($countries))
                                    @foreach ($countries as $country)
                                        <option {{ old('country') == $country->name ? 'selected' : '' }}
                                            value="{{ $country->name }}">{{ $country->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('country')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="w-full md:col-span-2">
                            <label class="font-semibold text-lg">Career Level:</label>
                            <select id="career-level" name="career_level"
                                class="get-fare form-select mt-2 @error('career_level') error-field @enderror">
                                <option hidden="" value="0" disabled="" selected="">Select Career Level
                                </option>
                                @if (!empty($career_levels))
                                    @foreach ($career_levels as $career_level)
                                        <option {{ old('career_level') == $career_level->id ? 'selected' : '' }}
                                            value="{{ $career_level->id }}">
                                            {{ $career_level->name . ' ' . $career_level->duration }}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('career_level')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- <div class="w-full md:col-span-2 div-group" role="group">

                            <div class="text-xl">Select Package</div>
                            @foreach ($career_levels as $career_level)
                                <div id="career-level-{{ $career_level->id }}"
                                    class="{{ old('career_level') == $career_level->id ? '' : 'hidden' }} career-levels">
                                    @foreach ($career_level->fare as $fare)
                                        <div class="flex items-center my-1">
                                            <input name="package" id="{{ $fare->id }}" type="radio"
                                                value="{{ $fare->id }}"
                                                class="cursor-pointer w-4 h-4 appearance-none checked:bg-primary-one bg-gray-100 border-gray-300 rounded-full">
                                            <label for="{{ $fare->id }}"
                                                class="ml-2 text-sm font-medium text-primary-two hove:text-primary-one cursor-pointer">
                                                {{ $fare->order_service->name . ' - ' . $fare->fare_amt . ' AED' }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                            @error('package')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div> --}}

                        <div >Total Price PKR :
                            <span id="cost">0 </span>
                        </div>

                        <div class="w-full md:col-span-2 space-y-2">
                            <label class="font-semibold text-lg">Details:</label>
                            <textarea name="detail" rows="2" class=" input-control @error('detail') error-field @enderror h-28"
                                placeholder="Type details here...">{{ old('detail', '') }}</textarea>
                            @error('detail')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="w-full">
                            <label class="font-semibold text-lg">Attachment:</label>
                            <input class="block"
                                accept=".pdf,.ppt,.pptx,.doc,.docx,.xls,.xlsx,.csv,.txt,.jpeg,.jpg,.png,.gif,.sav,.sps,.spv,.spo,.mat,.zip,.rar"
                                id="emailAttachments" name="emailAttachments[]" type="file" multiple />
                            @if (session('message'))
                                <p class="text-red-600 text-sm">{{ session('message') }}</p>
                            @endif
                            @error('emailAttachments.*')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="md:col-span-2">
                            <button id="btn-submit" type="submit" class="btn">
                                Submit Order
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        // $('#career_level').on('change', function() {
        //     $(".career-levels").hide();
        //     // $("input[name='package']:checked").attr("checked", false)
        //     var element = '#career-level-' + this.value;
        //     $(element).show();
        // });
        const fares = @json($fares);
        $('.get-fare').on('change', function() {

            const career_level = $('#career-level').val();
            fares.forEach(fare => {
                    if ( career_level == fare.career_level_id) {

                        $('#cost').html(fare.fare_amt);

                    }
                });

        });
    </script>
    <script>
        $(document).ready(function() {

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

            var submit = $('#order-form').find(':submit');

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

            $("#order-form").submit(function() {
                $('#order-form').find(':submit').attr("disabled", true);
                $('#btn-submit').html("Submitting...");
                const phoneNumber = phoneInput.getNumber();
                $('#phone2').val(phoneNumber);
                return true;
            });
        });
    </script>
@endsection
