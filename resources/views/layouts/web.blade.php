<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', config('app.name'))</title>
  <meta name="title" content="@yield('title', '')" />
  <meta name="description" content="@yield('description')" />
  <meta name="keywords" content="@yield('meta_keywords', '')">
  @if(View::hasSection('noindex'))
        <meta name="robots" content="noindex, nofollow">
    @else
        <meta name="robots" content="index, follow">
    @endif
  <link rel="shortcut icon" href="{{ asset('imgs/favicon.png')}}" type="image/x-icon">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="canonical" href="@yield('canonical', '')"/>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/main-14.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app-7.css')}}">
    {{-- preload --}}
    <link rel="preload" fetchpriority="high" as="image" href="https://cipdassignmenthelpuk.co.uk/public/images/bg-img-2.webp" type="image/webp">
    <link rel="preload" as="image" href="https://cipdassignmenthelpuk.co.uk/public/images/reviewsbank.svg" type="image/webp">
    <link rel="preload" as="image" href="https://cipdassignmenthelpuk.co.uk/public/images/reviewsBank.webp" type="image/webp">
    <link rel="preload" as="image" href="https://cipdassignmenthelpuk.co.uk/public/images/logo-cipd-2.webp" type="image/webp">
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MDS8BWGZ');</script>
    <!-- End Google Tag Manager -->
    
    <meta name="DC.title" content="@yield('title', '')" />
    <meta name="geo.region" content="GB" />
    <meta name="geo.position" content="54.702355;-3.276575" />
    <meta name="ICBM" content="54.702355, -3.276575" />
    
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "WebSite",
      "name": "@yield('title', '')",
      "url": "@yield('canonical')",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "{search_term_string}",
        "query-input": "required name=search_term_string"
      }
    }
    </script>
    
    @yield('schema-script')
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org/", 
      "@type": "Product", 
      "name": "@yield('title', '')",
      "image": "https://cipdassignmenthelpuk.co.uk/public/images/bg-img-2.webp",
      "description": "@yield('description')",
      "brand": {
        "@type": "Brand",
        "name": "CIPD Assignment Help UK"
      },
      "offers": {
        "@type": "Offer",
        "url": "@yield('canonical')",
        "priceCurrency": "GBP",
        "price": "@yield('price', '4')", 
        "availability": "https://schema.org/InStock",
        "itemCondition": "https://schema.org/NewCondition"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "ratingCount": "14185"
      }
    }
    </script>

    <script>
    // Asynchronously load Bootstrap CSS
    var fontAwesomeLink = document.createElement('link');
    fontAwesomeLink.rel = 'stylesheet';
    fontAwesomeLink.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css';
    document.head.appendChild(fontAwesomeLink);
    
    var aosLink = document.createElement("link");
    aosLink.rel = "stylesheet";
    aosLink.href = "https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css";
    document.head.appendChild(aosLink);
    
    var swiperLink = document.createElement("link");
    swiperLink.rel = "stylesheet";
    swiperLink.type = "text/css";
    swiperLink.href = "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css";
    document.head.appendChild(swiperLink);


    var intlTelInputLink = document.createElement('link');
    intlTelInputLink.rel = 'stylesheet';
    intlTelInputLink.href = 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css';
    document.head.appendChild(intlTelInputLink);
    
    var bootstrapLink = document.createElement('link');
    bootstrapLink.rel = 'stylesheet';
    bootstrapLink.href = 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css';
    document.head.appendChild(bootstrapLink);
    </script>
  
  <script async="" src="https://www.google.com/recaptcha/api.js"></script>
  <style>
    .num-style{
    background-color: #BE8672;
    width: 40px;
    height: 40px;
    box-shadow: 0px 0px 4px 1px white;
    border: 3px solid;
    font-size: 21px;
    }
    @media (max-width: 767px) {
      .num-style {
        width: 80px;
        height: 40px;
        font-size: 16px;
      }
      
    .testimonial-image{
        width: 175px;
        height: 175px;
    }
    }
    
    .writers{
    background: linear-gradient(283deg, var(--color-primary), var(--color-secondary));
    
    }
    @media (min-width: 1600px) {
      
      .calltoaction img.bottomic {
        position: absolute;
        top: -88px;
        right: -9px;
        width: 399px;
      }
    }
    #backToTop {
      position: fixed;
      bottom: 20px;
      right: 124px;
      width: 60px;
      height: 60px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 999;
      opacity: 0;       
      pointer-events: none;
      transition: opacity 0.3s ease;
    }
    
    #backToTop.show {
      opacity: 1;       
      pointer-events: auto;
    }
    
    #backToTop .arrow {
      position: absolute;
      font-size: 22px;
      color: #3D151E;
      font-weight: bold;
      line-height: 1;
    }
    a.fancy-link {
     position: relative;
    display: inline-block;
    font-size: 16px;
    font-weight: 600;
    color: #be8672;
    text-decoration: none;
    transition: color 0.3s ease, text-shadow 0.3s ease;
    white-space: nowrap;
    }
    
    a.fancy-link::before,
    a.fancy-link::after {
      content: "";
      position: absolute;
      bottom: -4px;
      height: 2px;
      width: 0;
      background: #3d151e;
      transition: width 0.4s ease;
    }
    
    a.fancy-link::before {
      left: 50%;
    }
    
    a.fancy-link::after {
      right: 50%;
    }
    
    a.fancy-link:hover {
      color: #3d151e;
      text-shadow: 0 0 6px #be8672;
    }
    
    a.fancy-link:hover::before,
    a.fancy-link:hover::after {
      width: 50%;
    }
    .navbar-light .navbar-toggler-icon{
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='%23ffffff' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
    }
    
    .left-\[4px\] {
        left: 4px;
    }
    .bottom-\[4px\] {
        bottom: 4px;
    }
    .absolute {
        position: absolute;
    }
    .z-20 {
      z-index: 20;
    }
    .form-select{
        box-shadow: 3px 4px 5px #be8672 !important;
    }
    .display-level{
    font-size: 12rem;
    }
    
    
    .level-tab.active .tabs {
      background: var(--color-primary);
      color: #fff !important;
    }
    
    .swiper-pagination-bullet {
      background: #3d151e !important; 
      opacity: 1;
    }
    
    .swiper-pagination-bullet-active {
      background: var(--color-primary) !important; 
      opacity: 1;
      border: 2px solid #3d151e !important;
    }
    
    .swiper-pagination {
      position: relative !important; /* keep inside slider */
      margin-top: 15px;
      text-align: center;
      z-index: 10;
    }
    
    .reviews-pagination {
      position: relative !important;     
      bottom: 10px !important;
      text-align: center;
    }
    
    .reviews-pagination {
      opacity: 1;       
      width: 10px;
      height: 10px;
      margin: 0 4px;
    }
    
    .reviews-pagination-active {
      background: white !important;
      opacity: 1;
    }
    
    .right-content{
        transform: translate3d(28px, 0px, 0px) ;
    }
    
    @media only screen 
      and (min-device-width: 768px) 
      and (max-device-width: 1366px) 
      and (-webkit-min-device-pixel-ratio: 1) {
    
      .calltoaction img.bottomic {
        position: absolute;
        right: -7px;
        width: 359px;
      }
    .mainbox {
        background: none !important;
    }
    .wrapper{
        width: auto !important;
    }
    .social-media{
        margin-left: auto !important;
    }
    }
  .hover-card2 {
  transition: all 0.3s ease-in-out;
}

.hover-card2:hover {
  transform: translateY(-10px) scale(1.03);
  /*box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);*/
}
.pricing-sec{
        border-radius: 1.5rem;
        border: 2px solid var(--color-secondary);
    }
    .border-box{
    border-top-left-radius: 17px;
    border-bottom-left-radius: 17px;
    }
    .border-end {
    border-right: 2px solid var(--color-primary) !important;
    flex: 1;
    /*padding: 53px 0px !important;*/
    text-align: center;
}
@media (min-width: 320px) and (max-width: 480px) {
    .border-end {
        width: 100%;
        padding: 15px !important;
        padding-bottom: 5px !important;
        flex: 100%;
        border-bottom: 1px solid var(--color-primary);
        border-right: none !important
    }
}
/* Ensure swiper works on mobile */
.levels-slider {
  width: 100%;
  height: auto;
  overflow: hidden;
}

.levels-slider .swiper-wrapper {
  display: flex;
}

.levels-slider .swiper-slide {
  flex-shrink: 0;
  width: 100%;  
  height: auto;
}

.levels-pagination-1 {
  position: relative;
  z-index: 10;
  text-align: center;
  margin-top: 15px;
}

.howitswork {
    border-top: 2px solid #3d151e;
}
@media only screen 
  and (device-width: 360px) 
  and (device-height: 740px) 
  and (-webkit-device-pixel-ratio: 4) {
    .level-tab2 {
    right: 3.3rem;
    position: relative;
}
}
 </style>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MDS8BWGZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <div id="backToTop">
  <svg class="progress-circle" width="55" height="55" viewBox="0 0 100 100">
    <circle cx="50" cy="50" r="45" stroke="#BE8672" stroke-width="8" fill="white"/>
    <circle id="progress" cx="50" cy="50" r="45" stroke="#3D151E" stroke-width="8"
            fill="none" stroke-dasharray="283" stroke-dashoffset="283"
            stroke-linecap="round"/>
    </svg>
  <i class="bi bi-chevron-up arrow"></i>
</div>

  
    @include('partials.header')
    @yield('content')
    @include('partials.footer')


    <!-- Include Bootstrap 5 CSS and JS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    
    
    {{-- intl Tel Input JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    @yield('scripts')
    @yield('script')



<script>
    
    const backToTop = document.getElementById("backToTop");
    const progress = document.getElementById("progress");
    const circumference = 2 * Math.PI * 45; 
    
    window.addEventListener("scroll", () => {
      let scrollTop = window.scrollY;
      let docHeight = document.documentElement.scrollHeight - window.innerHeight;
      let scrollPercent = scrollTop / docHeight;
    
      
      let offset = circumference - scrollPercent * circumference;
      progress.style.strokeDashoffset = offset;
    
      
      if (scrollPercent > 0.07) {
        backToTop.classList.add("show");
      } else {
        backToTop.classList.remove("show");
      }
    });
    
    
    backToTop.addEventListener("click", () => {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });

</script>

<script>
  // slide 1
  let slideIndex = 1;
  showSlides(slideIndex);

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");

    // ✅ stop if no slides exist
    if (!slides.length) return;

    if (n > slides.length) {
      slideIndex = 1;
    }
    if (n < 1) {
      slideIndex = slides.length;
    }

    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (let i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" activeOne", "");
    }

    slides[slideIndex - 1].style.display = "block";
    if (dots[slideIndex - 1]) {
      dots[slideIndex - 1].className += " activeOne";
    }
  }

  // slide 2
  let slideIndexTwo = 1;
  showSlidesTwo(slideIndexTwo);

  function currentSlideTwo(n) {
    showSlidesTwo(slideIndexTwo = n);
  }

  function showSlidesTwo(n) {
    let slides = document.getElementsByClassName("mySlidesTwo");
    let dots = document.getElementsByClassName("dotTwo");

    // ✅ stop if no slides exist
    if (!slides.length) return;

    if (n > slides.length) {
      slideIndexTwo = 1;
    }
    if (n < 1) {
      slideIndexTwo = slides.length;
    }

    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (let i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" activeOne", "");
    }

    slides[slideIndexTwo - 1].style.display = "block";
    if (dots[slideIndexTwo - 1]) {
      dots[slideIndexTwo - 1].className += " activeOne";
    }
  }
</script>


<script>
  const levelsSwiperEl = document.querySelector(".mySwiper.levels-slider");

  var levelsSwiper = new Swiper(".mySwiper.levels-slider", {
    loop: false,
    slidesPerView: 1,
    pagination: {
      el: ".levels-pagination-1", 
      clickable: true,
      type: "bullets"
    },
    navigation: {
      nextEl: ".levels-next-1", 
      prevEl: ".levels-prev-1"
    },
    
  });

  // Tab Click Handling
  document.querySelectorAll(".level-tab").forEach(tab => {
    tab.addEventListener("click", function () {
      let level = this.getAttribute("data-level");

      // Highlight active tab
      document.querySelectorAll(".level-tab").forEach(el => el.classList.remove("active"));
      this.classList.add("active");

      // Update main level circle
      document.querySelector("#mainLevelCircle p").textContent = level;

      // Show only slides for the selected level
      let allSlides = levelsSwiperEl.querySelectorAll(".swiper-slide");
      allSlides.forEach(slide => {
        slide.style.display = slide.getAttribute("data-level") === level ? "block" : "none";
      });

      levelsSwiper.update();
      levelsSwiper.slideTo(0);
    });
  });

  // Default: Show only Level 3
  levelsSwiperEl.querySelectorAll(".swiper-slide").forEach(slide => {
    slide.style.display = slide.getAttribute("data-level") === "3" ? "block" : "none";
  });
  document.querySelector('.level-tab[data-level="3"]').classList.add("active");
</script>

<script>
  var testimonialSwiper = new Swiper('.reviews', {
    loop: true,
    spaceBetween: 20,
    slidesPerView: 1,
    pagination: {
      el: '.reviews-pagination', 
      clickable: true,
    },
    navigation: {
      nextEl: '.reviews-button-next',
      prevEl: '.reviews-button-prev',
    },
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    breakpoints: {
      768: {
        slidesPerView: 1,
      },
      992: {
        slidesPerView: 1,
      }
    }
  });
</script>



<script>
  AOS.init({
    duration: 1000,
    once: true
  });
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/68b9687446ae591926247c7f/1j4a401u9';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>
</html>