@extends('layouts.web')
@section('title', 'CIPD Assignment Help UK - Contact Us for Professional Help')
@section('description', 'Have questions or need assistance? Contact CIPD Assignment Help UK now! Our friendly team is ready to provide expert support for all your thesis needs.')
@section('canonical', config('app.url') . Request::path())

@section('schema-script')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "@yield('title', '')",
  "url": "@yield('canonical')",
  "logo": "https://cipdassignmenthelpuk.co.uk/public/images/logo-cipd-2.webp",
  "sameAs": [
    "https://www.facebook.com/cipdassignmenthelpuk.co.uk/",
    "https://www.instagram.com/cipdassignmenthelpuk.co.uk/"
  ]
}
</script>

@endsection
@section('content')

<style>
    @media (min-width: 768px) {
    .md\:text-left {
        text-align: left !important;
    }
}
</style>
    <section>
        <div class="container-fluid py-5 px-3">
            <div class="container lg:px-5">
                <h3 class="flat-heading text-secondary">Contact Us</h3>
                <p class="text-secondary py-2 fw-normal">Fill up the form, and get in touch with the support team, within moments.</p>
                <div class="row">
                    <div class="col-md-8">
                        @if(session('error'))
                            <div id="success-alert" class="alert alert-warning mx-28 text-center text-red-800 border bg-green-100 py-2 px-2 font-bold">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if(session('success'))
                            <div id="success-alert" class="alert alert-success mx-28 text-center text-green-800 border bg-green-100 py-2 px-2 font-bold">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="panel">
                            <div class="flat-body">
                                <form id="contact-form" class="w-100 mb-4" method="post"
                                    action="{{ route('contact.store') }}">
                                    @csrf
                                    <div id="error-bag"></div>
                                    <div class="row">
                                        <div class="col-md-6 py-2">
                                            <div class="form-group contact-styling border  border-secondary rounded">
                                                <input type="text" name="name"
                                                    class="contact-styling-1 form-control submit-control @error('name') is-valid @enderror"
                                                    id="" value="{{ old('name') }}" placeholder="Full Name"
                                                    pattern="^[A-Za-z -]+$" />
                                                @error('name')
                                                    <div style="color:#192E49;">{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 py-2">
                                            <div class="form-group border  border-secondary rounded">
                                                <input type="email" name="email"
                                                    class="form-control submit-control @error('email') is-valid @enderror"
                                                    id="" value="{{ old('email') }}" placeholder="Email">
                                                @error('email')
                                                    <div style="color:#192E49;">{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 py-2">
                                            <div class="form-group border  border-secondary rounded">
                                                <input id="phone" name="phone"
                                                    class="form-control @error('phone') is-valid @enderror" type="tel"
                                                    value="{{ old('phone') }}" placeholder="Enter phone number"
                                                    oninput="this.value=this.value.replace(/[^0-9\+]/g,'');" />
                                                    <input type="hidden" name="phone" id="phone2" />
                                            </div>
                                                <p id="error-msg" class="hidden text-red-500"></p>
                                                @error('phone')
                                                <span class="text-red-500">{{ $message }}</span>
                                                @enderror
                                            <div id="valid-msg" class="hidden font-bold text-black flex items-center">
                                                <span class="text-primary-one text-xl pt-2 ">
                                                    <svg class="h-6" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 48 48" width="48px" height="48px">
                                                        <path fill="#C8E6C9"
                                                            d="M44,24c0,11.045-8.955,20-20,20S4,35.045,4,24S12.955,4,24,4S44,12.955,44,24z" />
                                                        <path fill="#4CAF50"
                                                            d="M34.586,14.586l-13.57,13.586l-5.602-5.586l-2.828,2.828l8.434,8.414l16.395-16.414L34.586,14.586z" />
                                                    </svg>
                                                </span>
                                                <span class="pt-2">
                                                    Valid Number
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 py-2">
                                            <div class="form-group border  border-secondary rounded">
                                                <select
                                                    class="get-fare form-control mine-control @error('country') is-valid @enderror"
                                                    data-value="{{ $data ?? '' ? $data->value : old('country') }}"
                                                    name="country">
                                                    <option selected disabled hidden>Select Country</option>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->name }}">{{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('country')
                                                    <div style="color:#192E49;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 py-2">
                                            <div class="form-group border  border-secondary rounded">
                                                <input type="text" name="subject"
                                                    class="form-control submit-control @error('subject') is-valid @enderror"
                                                    value="{{ old('subject') }}" placeholder="Subject">
                                                @error('subject')
                                                    <div style="color:#192E49;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 py-2">
                                            <div class="form-group clearfix border  border-secondary rounded">
                                                <textarea name="details" rows="4" placeholder="Type Details here..."
                                                    class="text-input detail form-control @error('detail') is-valid @enderror" maxlength="1000">{{ old('detail', '') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="">
                                            @if(session('error'))
                                        <div class="mx-auto lg:mx-8 ">
                                            <p class="text-red-500 text-base">{{ session('error') }}</p>
                                        </div>
                                            @endif
                                        <div class="w-full">
                                        	<!-- Google Recaptcha -->
                                                <div class="g-recaptcha mt-4" data-sitekey={{config('services.recaptcha.key')}}></div>
                                        </div>
                                        </div>
                                        <div class="col-md-12 mb-4 mb-md-0 pt-4 pt-md-4 text-center .btn-new">
                                            <button role="button" id="btnSubmit" type="submit"
                                                class="hero-section-order py-2 w-13  fw-bold">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 text-center md:text-left">
                        <div class="row g-0 py-2">
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                <img src="{{ asset('images/phone.png') }}" width="64" height="64" alt="Contact" title="Contact" class="">
                            </div>
                            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                <span class="text-secondary h5 d-block fw-bold mb-0">LET'S TALK</span>
                                <a href="tel:+447403663991">
                                <span class="text-secondary c-text d-block">+447403663991</span>
                                </a>
                            </div>
                        </div>
                        <div class="row g-0 m-t-20 py-2">
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                <img src="{{ asset('images/email.png') }}" width="64" height="64" alt="Email" title="Email" class="">
                            </div>
                            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                <span class="text-secondary h5 d-block fw-bold mb-0">SEND US EMAIL</span>
                                <a href="mailto:info@cipdassignmenthelpuk.co.uk">
                                <span class="text-secondary c-text  d-block">info@cipdassignmenthelpuk.co.uk</span>
                            </a>
                            </div>
                        </div>
                        <hr>
                        <div class="text-center m-t-10"><span class="text-secondary h5 font-bold">FIND US ON SOCIAL MEDIA</span>
                            <div class="social-icons text-center mt-3 space-x-3">
                               <ul class="wrapper">
                                 <li class="icon facebook">
                                  <a href="https://www.facebook.com/cipdassignmenthelpuk.co.uk/" target="_blank" class="flex items-center gap-2 text-blue-600 hover:text-blue-800">
                                    <span class="tooltip">Facebook</span>
                                    <svg
                                      viewBox="0 0 320 512"
                                      height="1.2em"
                                      fill="currentColor"
                                      xmlns="http://www.w3.org/2000/svg"
                                    >
                                      <path
                                        d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 
                                           52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 
                                           0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
                                      ></path>
                                    </svg>
                                   
                                  </a>
                                </li>

                                 <!--<li class="icon twitter">-->
                                 <!--  <span class="tooltip">Twitter</span>-->
                                 <!--  <svg-->
                                 <!--    height="1.8em"-->
                                 <!--    fill="currentColor"-->
                                 <!--    viewBox="0 0 48 48"-->
                                 <!--    xmlns="http://www.w3.org/2000/svg"-->
                                 <!--    class="twitter"-->
                                 <!--  >-->
                                 <!--    <path-->
                                 <!--      d="M42,12.429c-1.323,0.586-2.746,0.977-4.247,1.162c1.526-0.906,2.7-2.351,3.251-4.058c-1.428,0.837-3.01,1.452-4.693,1.776C34.967,9.884,33.05,9,30.926,9c-4.08,0-7.387,3.278-7.387,7.32c0,0.572,0.067,1.129,0.193,1.67c-6.138-0.308-11.582-3.226-15.224-7.654c-0.64,1.082-1,2.349-1,3.686c0,2.541,1.301,4.778,3.285,6.096c-1.211-0.037-2.351-0.374-3.349-0.914c0,0.022,0,0.055,0,0.086c0,3.551,2.547,6.508,5.923,7.181c-0.617,0.169-1.269,0.263-1.941,0.263c-0.477,0-0.942-0.054-1.392-0.135c0.94,2.902,3.667,5.023,6.898,5.086c-2.528,1.96-5.712,3.134-9.174,3.134c-0.598,0-1.183-0.034-1.761-0.104C9.268,36.786,13.152,38,17.321,38c13.585,0,21.017-11.156,21.017-20.834c0-0.317-0.01-0.633-0.025-0.945C39.763,15.197,41.013,13.905,42,12.429"-->
                                 <!--    ></path>-->
                                 <!--  </svg>-->
                                 <!--</li>-->
                                 <li class="icon instagram">
                                  <a href="https://www.instagram.com/cipdassignmenthelpuk.co.uk/" target="_blank" class="flex items-center gap-2 text-blue-600 hover:text-blue-800">
                                   <span class="tooltip">Instagram</span>
                                   <svg
                                     xmlns="http://www.w3.org/2000/svg"
                                     height="1.2em"
                                     fill="currentColor"
                                     class="bi bi-instagram"
                                     viewBox="0 0 16 16"
                                   >
                                     <path
                                       d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
                                     ></path>
                                   </svg>
                                   </a>
                                 </li>
                               </ul>
                               



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')

    <script>
        $(document).ready(function() {
             const phone = document.querySelector("#phone");
             var errorMsg = document.querySelector("#error-msg"),
                 validMsg = document.querySelector("#valid-msg");
             // here, the index maps to the error code returned from getValidationError - see readme
             var errorMap = [
                 "Invalid number",
                 "Invalid country code",
                 "Too short",
                 "Too long",
                 "Invalid number",
             ];
             // initialise plugin
             const phoneInput = window.intlTelInput(phone, {
                 preferredCountries: ["gb"],
                 separateDialCode: true,
                 dropdownContainer: document.body,
                 customPlaceholder: function(
                     selectedCountryPlaceholder,
                     selectedCountryData
                 ) {
                     return "e.g. " + selectedCountryPlaceholder;
                 },
                 initialCountry: "gb",
                 geoIpLookup: function(callback) {
                     $.get(
                         "https://ipinfo.io/103.244.175.33?token=1fb4fdd88d0fa0",
                         function() {},
                         "jsonp"
                     ).always(function(resp) {
                         var countryCode =
                             resp && resp.country ? resp.country : "gb";
                         // success(countryCode);
                         callback(countryCode);
                     });
                 },
                 utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
             });
            var submit = $("#contact-form").find(":submit");
            var reset = function() {
                 phone.classList.remove("error");
                 phone.classList.remove("error-field");
                 errorMsg.innerHTML = "";
                 errorMsg.classList.add("hidden");
                 validMsg.classList.add("hidden");
                 submit.attr("disabled", true);
                 submit.addClass("cusrsor-not-allowed");
            };
             // on blur: validate
            phone.addEventListener("blur", function() {
                reset();
                if (phone.value.trim()) {
                     if (phoneInput.isValidNumber()) {
                         validMsg.classList.remove("hidden");
                         submit.attr("disabled", false);
                     } else {
                         submit.attr("disabled", true);
                         phone.classList.add("error");
                         phone.classList.add("error-field");
                         var errorCode = phoneInput.getValidationError();
                         errorMsg.innerHTML = errorMap[errorCode];
                         errorMsg.classList.remove("hidden");
                     }
                }
            });
             // on keyup / change flag: reset
            phone.addEventListener("change", reset);
            phone.addEventListener("keyup", reset);
            $("#contact-form").submit(function() {
                 $("#contact-form").find(":submit").attr("disabled", true);
                 $("#submit").html("Submiting...");
                 const phoneNumber = phoneInput.getNumber();
                 $("#phone2").val(phoneNumber);
                 return true;
            });
        });
    </script>
@endsection