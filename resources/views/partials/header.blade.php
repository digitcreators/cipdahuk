<style>
 .pulse {
  display: inline-block;
  animation: pulse 1.2s infinite;
}

@keyframes pulse {
  0%, 100% { transform: scale(1); }
  50% { transform: scale(1.1); }
}
.rev {
    font-size: 14px;
}
@media only screen 
  and (device-width: 360px) 
  and (device-height: 740px) 
  and (-webkit-device-pixel-ratio: 4) {
    .rev {
      font-size: 12px;
    }
}

</style>
  <!-- <header section start> -->
    <div class="top-bar top-navbar-styling py-2">
  <div class="container">
    <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center">

      <!-- Left: Reviews -->
      <div class="d-flex align-items-center mb-2 mb-md-0 text-white mobile-font">
        <a href="https://reviewsbank.org/review/cipdassignmenthelpuk.co.uk" target="_blank" class="text-white text-decoration-none d-flex align-items-center">
          <span class="me-2">Excellent</span>
          <img alt="rating" title="rating" src="{{asset('images/reviewsbank.svg')}}" width="107" height="20" class="mx-1">
          <span class="fw-bold me-1">4.9</span>
          <img src="{{asset('images/reviewsBank.webp')}}" alt="Reviews Bank" title="Reviews Bank" height="22" width="45" class="mx-1">
          <span class="rev">Reviews Bank</span>
        </a>
      </div>

      <!-- Right: Contact & Social -->
     <div class="d-block d-md-flex align-items-center gap-3 text-white text-center text-md-start">
  <!-- Contact Info -->
  <div class="d-block d-md-flex align-items-center gap-3 justify-content-center justify-content-md-start mb-2 mb-md-0">
    <a href="tel:+447403663991" class="text-decoration-none text-white">
      <i class="fa fa-phone me-1"></i> +44 7403 663991
    </a>
    <a href="mailto:info@cipdassignmenthelpuk.co.uk" class="text-decoration-none text-white whitespace-nowrap">
      <i class="bi bi-envelope-fill me-1"></i> info@cipdassignmenthelpuk.co.uk
    </a>
  </div>

  <!-- Social Icons -->
  <div class="d-flex gap-2 justify-content-center justify-content-md-start">
    <a href="https://api.whatsapp.com/send/?phone=447403663991" class="icons" aria-label="WhatsApp" title="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
    <a href="https://www.facebook.com/cipdassignmenthelpuk.co.uk/" class="icons" aria-label="Facebook" title="Facebook"><i class="fa-brands fa-facebook"></i></a>
    <a href="https://www.instagram.com/cipdassignmenthelpuk.co.uk/" class="icons" aria-label="Instagram" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>


    </div>
  </div>
</div>

    <nav class="navbar navbar-expand-lg navbar-light header">
      <div class="container-fluid mx-auto">
        <a class="navbar-brand ms-md-6" href="{{ route('home')}}"><img src="{{ asset('images/logo-cipd-2.webp') }}" width="176px" height="85px" alt="logo" title="logo"></a>
        <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('about-us')}}">About</a>
            </li>
            
            <li class="nav-item dropdown dropdown-hover">
                <a data-mdb-dropdown-init class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                data-mdb-toggle="dropdown" aria-expanded="false">CIPD Levels</a>
                <ul class="dropdown-menu services-menu fw-bold" aria-labelledby="navbarDropdown">
                  <li>
                  <a href="{{ route('cipd-level-3') }}" class="nav-link header-styling fw-bold">
                      CIPD Level 3
                  </a>
                  </li>
                  <li>
                      <a href="{{ route('cipd-level-5') }}" class="nav-link header-styling fw-bold">
                          CIPD Level 5
                      </a>
                  </li>
                  <li>
                      <a href="{{ route('cipd-level-7') }}" class="nav-link header-styling fw-bold">
                          CIPD Level 7
                      </a>
                  </li>
                 
                </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('hr-assignment') }}">HR Assignment</a>
            </li>

            <li class="nav-item ">
              <a class="nav-link" href="{{route('reviews')}}">
                Reviews
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{route('samples')}}">
                Samples
              </a>
            </li>
  
            <li class="nav-item ">
              <a class="nav-link" href="{{ route('contact-us')}}">
                Contact
              </a>
            </li>
            <li class="nav-item">

              <button class="button pulse">
                <a class=" order-btn text-white" aria-current="page" href="{{ route('order')}}"  onMouseOver="this.style.color='#0F0'"
                onMouseOut="this.style.color='#00F'">Order Now!</a>
              </button>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ route('login')}}">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- <header section end> -->