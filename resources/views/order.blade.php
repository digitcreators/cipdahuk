@extends('layouts.web')
@section('title', 'Order CIPD Assignment Help UK - Fast & Quality Service')
@section('description', 'Order CIPD Assignment Help UK at affordable prices. Get professional help now. Contact info@cipdassignmenthelpuk.co.uk  or call +447 40 366 3991.')
@section('canonical', config('app.url') . Request::path())
@section('links')
    <script async src="https://www.google.com/recaptcha/api.js"></script>
@endsection

@section('content')

<style>
 .order-form {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 20px var(--color-secondary);
    border: 2px solid var(--color-primary);
  }
  .order-form .form-control,
  .order-form .form-select {
    border-radius: 8px;
    padding: 0.75rem 1rem;
    border: 1px solid #ccc;
  }
  .order-form .form-control:focus,
  .order-form .form-select:focus {
    border-color: var(--color-primary);
    box-shadow: 0 0 0 0.25rem rgba(181, 66, 104, 0.25);
  }
  .order-summary {
    background: var(--color-secondary);
    border-radius: 12px;
    color: #fff;
    box-shadow: 0 4px 20px rgba(0,0,0,.1);
  }
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .form-item {
        width: 100%;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 0.375rem;
        border-width: 1px;
        border-color: transparent;
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        padding-left: 1.5rem;
        padding-right: 1.5rem;
        font-size: 1rem;
        line-height: 1.5rem;
        --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
        --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        outline: 2px solid transparent;
        outline-offset: 2px;
        --tw-text-opacity: 1;
        color: rgb(9 14 52 / var(--tw-text-opacity));
    }

    .order-form-styling1 {
        border-radius: 20px;
    }
    
    /*#btn-submit{*/
    /*    background: black;*/
    /*    padding: 10px 40px;*/
    /*    border: 1px solid #fff;*/
    /*    border-radius: 5px;*/
    /*}*/
    
    /*#btn-submit:hover{*/
    /*    color: #ae0000;*/
    /*    font-weight: 600;*/
    /*}*/
    
    .iti__selected-dial-code{
        color: black;
    }
    
    .bg-secondary{
        background: #101820;
    }
    
    .a3f {
        --tw-bg-opacity: 1;
        background-color: rgba(225, 225, 225, var(--tw-bg-opacity));
    }
    
    .max-w-\[45px\] {
        max-width: 50px;
        display: block;
    }
    
    .at\[1px\] {
        height: 1px;
    }
.hero-section-order:disabled {
  cursor: not-allowed;
}
textarea.form-control.details {
    min-height: calc(1.5em + (7.75rem + 2px));
}
@media (min-width: 992px) {
  .lg\:p-5 {
    padding: 3rem !important;
  }
}

</style>
<section class="py-5 px-2 lg:px-0">
  <h1 class="fw-bold text-center text-2xl">Reliable Solutions, Just a Few Clicks Away!</h1>
  <p class="text-center pt-3">
    All set to move forward in your studies? Fill out the below-mentioned form and book our services. 
    We promise you will receive quality outcomes.
  </p>

  <div class="container py-5">
    <form id="order-form" action="{{ route('order.store') }}" method="post" enctype="multipart/form-data">
      @csrf

      <!-- Row 1: Main Form Fields -->
      <div class="row g-4">
        <div class="col-12">
          <div class="p-4 p-md-5 order-form h-100">
            <div class="row g-4">

              <!-- Topic -->
              <div class="col-12">
                <label for="topic" class="pb-2">Your Topic</label>
                <input type="text" id="topic" name="paper_topic" class="form-control"
                  placeholder="Enter Your Paper Topic" value="{{ old('topic') }}">
              </div>

              <!-- Course Name -->
              <div class="col-12">
                <label for="course" class="pb-2">Course Name</label>
                <input type="text" id="course" name="course_name" class="form-control"
                  placeholder="Course Name" value="{{ old('course') }}">
              </div>

              <!-- Reference Style -->
              <div class="col-md-6">
                <label for="reference-style" class="pb-2">Reference Style</label>
                <select name="reference_style" id="reference-style" class="form-select">
                @foreach($reference_styles as $style)
                    <option value="{{ $style->name }}">
                        {{ $style->name }}
                    </option>
                @endforeach
                </select>

              </div>

               <!-- Academic Level -->
               <div class="col-md-6">
                <label for="academic-level" class="pb-2">Academic Level</label>
                <select name="academic_level" id="academic-level" class="form-select">
                @foreach($academic_levels as $academic_level)
                    <option value="{{ $academic_level->id }}">
                        {{ $academic_level->name }}
                    </option>
                @endforeach
                </select>

                </div>
                
                <!-- Pages -->
                <div class="col-md-6">
                <label for="pages" class="pb-2">Pages</label>
                <select id="pages" name="number_of_pages" class="form-select">
                  <option hidden disabled selected>Select Pages</option>
                  @for ($i = 1; $i <= 100; $i++)
                    <option value="{{ $i }}" data-id="{{ $i }}">
                      {{ $i }} Pages - {{ $i*250 }} Words
                    </option>
                  @endfor
                </select>
                </div>
                
                <!-- Deadline -->
                <div class="col-md-6">
                <label for="deadline" class="pb-2">Deadline</label>
                <select name="deadline" id="deadline" class="form-select">
                @foreach($deadlines as $deadline)
                    <option value="{{ $deadline->id }}">
                        {{ $deadline->name }}
                    </option>
                @endforeach
                </select>

                </div>

            </div>
          </div>
        </div>
      </div>

     <!-- Row: Additional Requirements + Order Summary -->
    <div class="row g-4 mt-4">
      <!-- Left Column: Additional Requirements & Materials -->
      <div class="col-lg-8">
        <label for="detail" class="pb-2">Additional Requirements</label>
        <textarea id="detail" name="detail" class="form-control mb-3 details"
          placeholder="The more instruction you provide, the better our writers can craft an essay that meets your needs"
          rows="3"></textarea>
    
        <label for="files" class="pb-2">Additional Material</label>
        <input type="file" name="emailAttachments[]" multiple class="form-control" />
        <p class="small mt-2">Drag & Drop files here or Browse</p>
      </div>

  <!-- Right Column: Order Summary -->
  <div class="col-lg-4">
    <div class="p-4 order-summary h-100">
      <h5 class="fw-bold mb-3 text-center text-white text-2xl">Order Summary</h5>
      <ul class="list-unstyled small">
        <li class="pb-3">CIPD Level: <span id="academic-level-data" class="float-end">-</span></li>
        <li class="pb-3">Currency: <span id="currency-data" class="float-end">GBP</span></li>
        <li class="pb-3">Pages: <span id="pages-data" class="float-end">-</span></li>
        <li class="pb-3">Deadline: <span id="deadline-data" class="float-end">-</span></li>
        <li class="pb-3">Price Per Page: <span class="float-end" id="cost-per-page">-</span></li>
        <li class="pb-3">Total: <span id="total-cost" class="float-end fw-bold">£0</span></li>

      </ul>
    </div>
  </div>
</div>

<div class="bg-primary p-3 lg:p-5 mt-4">
<!-- Row: Contact Details -->
<div class="row g-4 align-items-center">
    <h2 class="fw-bold text-white text-center text-3xl">Contact Details</h2>
  <!-- Left Column: Form Fields -->
  <div class="col-md-6">
    <div class="row g-4">
      <div class="col-md-6">
          <label for="deadline" class="pb-2">Name</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Enter Your Name"
          value="{{ old('name') }}" />
      </div>

      <div class="col-md-6">
          <label for="deadline" class="pb-2">Email</label>
        <input type="text" id="email" name="email" class="form-control" placeholder="Enter Your Email"
          value="{{ old('email') }}" />
      </div>

      <div class="col-md-6">
          <label for="deadline" class="pb-2">Phone</label>
          <input id="phone" name="phone"
            class="form-control @error('phone') is-valid @enderror" type="tel"
            value="{{ old('phone') }}" placeholder="Enter phone number"
            oninput="this.value=this.value.replace(/[^0-9\+]/g,'');" />
            <input type="hidden" name="phone" id="phone2" />
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

      <div class="col-md-6">
          <label for="deadline" class="pb-2">Country</label>
        <select id="country" name="country" class="form-select">
          <option hidden disabled selected>Country</option>
          @foreach ($countries as $country)
          <option value="{{ $country->name }}">{{ $country->name }}</option>
          @endforeach
        </select>
      </div>
      
      <input type="hidden" id="cost_per_page" name="cost_per_page" value="">
      <input type="hidden" id="total_price" name="total_price" value="">
      
      <div class="col-md-6">
      <div class="g-recaptcha mb-3" data-sitekey={{config('services.recaptcha.key')}}></div>
     <button id="btn-submit" type="submit" class="w-13 hero-section-order py-2 fw-bold" disabled>
      Submit
    </button>

</div>
    </div>
  </div>

  <!-- Right Column: Image -->
  <div class="col-md-6 text-center">
    <img src="{{asset('images/order-img2.webp')}}" alt="Contact Illustration" class="img-fluid ">
  </div>
</div>



</div>

    </form>
  </div>
</section>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script>
  $('select').on('change', function () {
      $(this).removeClass("text-gray-400");
  });

  const fieldMap = {
      topic: "topic-data",
      "paper-type": "paper-type-data",
      deadline: "deadline-data",          
      "reference-style": "reference-style-data",
      language: "language-data",
      "no-of-references": "no-of-references-data",
      "academic-level": "academic-level-data", 
      pages: "pages-data",             
      subject: "subject-data",
      name: "name-data",
      email: "email-data",
      phone: "phone-data",
      country: "country-data",
      currency: "currency-data"
  };

  $.each(fieldMap, function (fieldId, targetId) {
      $("#" + fieldId).on("change keyup", function () {
          let val;
          if ($(this).is("select")) {
              val = $(this).find("option:selected").text();
          } else {
              val = $(this).val();
          }
          $("#" + targetId).html(val || "-");
      });
  });

  const fares = @json($fares);

  function calculatePrice() {
    const academic_level_id = $('#academic-level').val();
    const deadline_id = $('#deadline').val();
    const number_of_pages = $('#pages').val() || 1;

    if (!academic_level_id || !deadline_id) {
        $('#total-cost').html("£0");
        $('#cost-per-page').html("-");
        $("#cost_per_page").val("");  
        $("#total_price").val("");   
        return;
    }

    const currency = ' GBP';
    let matched = false;

    fares.forEach(fare => {
        if (parseInt(deadline_id) === parseInt(fare.deadline_id) &&
            parseInt(academic_level_id) === parseInt(fare.academic_level_id)) {

            matched = true;
            let total = fare.per_page_price * number_of_pages;

            // Update frontend
            $('#total-cost').html("£" + total.toLocaleString() + currency);
            $('#cost-per-page').html(fare.per_page_price + currency + " x " + number_of_pages);

            $("#cost_per_page").val(fare.per_page_price);
            $("#total_price").val(total);
        }
    });

    if (!matched) {
        $('#total-cost').html("£0");
        $('#cost-per-page').html("-");
        $("#cost_per_page").val(""); 
        $("#total_price").val("");   
    }
}


  $("#academic-level, #deadline, #pages").on("change", calculatePrice);

  $(document).ready(function () {
      calculatePrice();
  });
</script>

<script>
    $(document).ready(function () {

        $('.btn-plus, .btn-minus').on('click', function (e) {
            e.preventDefault();
            const isNegative = $(e.target).closest('.btn-minus').is('.btn-minus');
            const input = $(e.target).closest('.input-group').find('input');

            if (input.is('input')) {
                input[0][isNegative ? 'stepDown' : 'stepUp']()
            }
            $(".get-fares").change()
        })

        const phone = document.querySelector("#phone");
        var errorMsg = document.querySelector("#error-msg"),
            validMsg = document.querySelector("#valid-msg");

        var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

        const phoneInput = window.intlTelInput(phone, {
            preferredCountries: ["gb"],
            separateDialCode: true,
            dropdownContainer: document.body,
            customPlaceholder: function (selectedCountryPlaceholder, selectedCountryData) {
                return "e.g. " + selectedCountryPlaceholder;
            },
            initialCountry: "gb",
            geoIpLookup: function (callback) {
                $.get("https://ipinfo.io/103.244.175.33?token=1fb4fdd88d0fa0", function () { }, "jsonp").always(function (resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "gb";
                    callback(countryCode);
                });
            },
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });

        var submit = $('#btn-submit');

        // validate whole form
        function checkFormValidity() {
            const name = $("#name").val().trim();
            const email = $("#email").val().trim();
            const country = $("#country").val();
            const phoneVal = phone.value.trim();

            let isValid = true;

            if (!name) isValid = false;
            if (!email || !/^\S+@\S+\.\S+$/.test(email)) isValid = false;
            if (!country) isValid = false;
            if (!phoneVal || !phoneInput.isValidNumber()) isValid = false;

            if (isValid) {
                submit.attr("disabled", false).removeClass("cursor-not-allowed btn-disabled");
            } else {
                submit.attr("disabled", true).addClass("cursor-not-allowed btn-disabled");
            }
        }

        var reset = function () {
            phone.classList.remove("error");
            phone.classList.remove("error-field");
            errorMsg.innerHTML = "";
            errorMsg.classList.add("hidden");
            validMsg.classList.add("hidden");
            checkFormValidity(); // run form validation instead of always disabling
        };

        // on blur: validate phone
        phone.addEventListener('blur', function () {
            reset();
            if (phone.value.trim()) {
                if (phoneInput.isValidNumber()) {
                    validMsg.classList.remove("hidden");
                } else {
                    phone.classList.add("error");
                    phone.classList.add("error-field");
                    var errorCode = phoneInput.getValidationError();
                    errorMsg.innerHTML = errorMap[errorCode];
                    errorMsg.classList.remove("hidden");
                }
                checkFormValidity();
            }
        });

        // on keyup / change flag: reset
        phone.addEventListener('change', reset);
        phone.addEventListener('keyup', reset);

        // watch other fields too
        $("#name, #email, #country").on("input change blur", checkFormValidity);

        var loader = ' <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">';
        loader += ' <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>';
        loader += ' <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>';
        loader += ' </svg>';

        $("#order-form").submit(function () {
            submit.html(loader);
            submit.attr("disabled", true);
            submit.addClass("cursor-not-allowed");

            const phoneNumber = phoneInput.getNumber();
            $('#phone2').val(phoneNumber);
            return true;
        });

        // run check on page load
        checkFormValidity();
    });
</script>
@endsection