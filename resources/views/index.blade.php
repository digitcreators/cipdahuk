@extends('layouts.web')
@section('title', "UK's #1 CIPD Assignment Help for All CIPD Levels")
@section('description', 'Get expert CIPD Assignment Help in UK for all levels. Our professionals deliver high-quality, AI, and plagiarism-free work with timely delivery and support.
')
@section('meta_keywords', 'cipd assignment help in uk')
@section('canonical', config('app.url'))

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


  <!-- <hero section start> -->
  <div class="hero-section px-4">
    <div class="container py-10">
       <!-- Dotted Background Shape -->
     <img src="{{asset('images/shape-3.webp')}}" 
       alt="Decorative Dots" 
       loading="lazy"
       class="position-absolute d-none d-lg-block fade-in-shape float-animation"
       style="top: 237px; left: 50rem; z-index: 0; pointer-events: none; width: 150px;"> 

  @include('partials.calculator')
        </div>
               <!-- Dotted Background Shape -->
     <img src="{{asset('images/shape-1.webp')}}" 
       alt="Decorative Dots" 
       loading="lazy"
       class="position-absolute d-none d-lg-block fade-in-shape rotate-shape"
       style="top: 34rem; left: 82rem; z-index: 0; pointer-events: none; width: 163px;"> 

        <div class="mt-0 pt-0 pt-4 col-lg-6 pb-0 lg:pb-0 pb-3 order-1">
          <div class="lc-block mb-3">
            <div editable="rich">
              <h1 class="fw-light text-white fw-bold">
                Never Miss a Deadline with Our Expert CIPD Assignment Help in UK
              </h1>
            </div>
          </div>
          <div class="lc-block mb-3">
            <div editable="rich">
              <p class="text-white fw-normal">
              With over 12 years of experience, CIPDassignmenthelpuk.co.uk is the top choice for getting your CIPD tasks completed on time. We have served more than 15,000 happy students across all CIPD levels, whether you need CIPD Assignment help UK with Level 3, Level 5, or Level 7.
              </p>
             
            </div>
          </div>
          <div class="py-3">
            <a class="hero-section-order py-2  fw-bold" href="{{route('order')}}">
            Hire CIPD Assignment Writers!
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

    @include('partials.clients-logo-section')

@include('partials.why-chose-us-section')

<section class="py-5 bg-light position-relative overflow-hidden">
  <!-- Dotted Background Shape -->
  <img src="{{asset('images/shape-2.webp')}}" 
       alt="Decorative Dots" 
       loading="lazy"
       class="position-absolute d-none d-lg-block fade-in-shape float-animation"
       style="top: 36px; left: 30rem; z-index: 0; pointer-events: none; width: 150px;">

   <!--Rotating Shape -->
  <img src="{{asset('images/shape-4.webp')}}" 
       alt="Rotating Decoration" 
       loading="lazy"
       class="position-absolute d-none d-lg-block rotate-shape"
       style="top: 32rem; left: 5rem; z-index: 0; pointer-events: none; width: 100px;">

  <div class="container position-relative" style="z-index: 1;">
    <div class="row align-items-center">
      <!-- Image Left -->
      <div class="col-md-6 position-relative mb-4 mb-md-0">
        <!-- Main Image -->
        <img src="{{asset('images/about-sec-level-3.webp')}}" 
        width="400px" height="550px"
             class="img-fluid" 
             data-aos="fade-down"
             loading="lazy"
             alt="CIPD Assignment Writing Help" title="CIPD Assignment Writing Help">
        
        <!-- Small Overlapping Image -->
        <img src="{{asset('images/about-sec2-level3.webp')}}" 
             class="position-absolute"
             data-aos="fade-right"
             style="width: 180px; bottom: -20px; right: 136px; border: 5px solid #fff; border-radius: 3rem;" 
             loading="lazy"
             alt="CIPD Assignment Writing Help" title="CIPD Assignment Writing Help">
      </div>

      <!-- Content Right -->
      <div class="col-md-6 lg:mt-0 mt-4" data-aos="fade-left">
        <h2 class="fw-bold mb-3">Level Up Your Grades with Premium <span class="text-primary">CIPD Assignment Writing Help</span></h2>
        <p class="text-black my-4">
        Finding difficulty with CIPD projects? Our CIPD assistance helps you use real-world knowledge in your studies rather than just helping you write. You remain in charge of the process. We pay attention to your concerns, understand your objectives, and assist you in completing your CIPD tasks. Whether it's Level 3, 5, or 7, we connect you with a proficient writer who knows all the ins and outs. Our team deliver incredible work that brings real-world insights to your assignments. We also keep things easy on the budget, as professional support should be available to all students, regardless of their financial background.
        </p>

        <a href="{{route('contact-us')}}" class="hero-section-order py-2 fw-bold">Get Help Now!</a>
      </div>
    </div>
  </div>
</section>


<section class="writers">
  <div class="container py-5" bis_skin_checked="1">
    <h3 class="text-center text-white fs-3 mb-5 fw-bold mx-2 mx-md-4">
      Meet the Minds Behind Your CIPD Success
    </h3>

    <div class="row g-4 align-items-start " bis_skin_checked="1">
      <div class="col-lg-6 col-md-5 mx-auto order-2" bis_skin_checked="1">
      <div class="row lg:gap-3 gap-16 d-flex justify-content-center" bis_skin_checked="1">
        <div class="col-4 d-flex justify-content-center " bis_skin_checked="1" data-aos="fade-left">
          <div class="p-1 hover-shadow" onclick="currentSlideTwo(1)" bis_skin_checked="1">
            <img src="{{asset('images/sophie-2.webp')}}" class="hover-card2 testimonial-image" loading="lazy" alt="sophie" title="sophie" width="201px" height="201px">
          </div>
        </div>
        <div class="col-4 d-flex justify-content-center" bis_skin_checked="1" data-aos="fade-right">
          <div class="p-1 hover-shadow" onclick="currentSlideTwo(2)" bis_skin_checked="1">
            <img src="{{asset('images/james-2.webp')}}" class="hover-card2 testimonial-image" loading="lazy" alt="james" title="james" width="201px" height="201px">
          </div>
        </div>
      
      </div>
      <div class="row lg:gap-3 gap-16 justify-content-center mt-1" bis_skin_checked="1" data-aos="fade-left">
        <div class="col-4 d-flex justify-content-center" bis_skin_checked="1">
          <div class="p-1 hover-shadow" onclick="currentSlideTwo(3)" bis_skin_checked="1">
            <img src="{{asset('images/olivia-2.webp')}}" class="hover-card2 testimonial-image" loading="lazy" alt="olivia" title="olivia" width="201px" height="201px">
          </div>
        </div>
      
        <div class="col-4 d-flex justify-content-center" bis_skin_checked="1">
          <div class="p-1 hover-shadow" onclick="currentSlideTwo(4)" bis_skin_checked="1" data-aos="fade-right">
            <img src="{{asset('images/daniel-2.webp')}}" class="hover-card2 testimonial-image" loading="lazy" alt="daniel" title="daniel" width="201px" height="201px" >
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-7 order-1" bis_skin_checked="1">
      <div class="mySlidesTwo" style="display: block;" bis_skin_checked="1">
        <div class=" border-0  p-4 " bis_skin_checked="1">
            <h4 class="text-4xl text-center lg:text-left text-white fw-semibold mb-0">Sophie</h4>
            <div class="border-top my-3">
          <p class="text-center lg:text-left mt-3 text-white  mb-3">
          Sophie has been working on our platform for more than 9 years and has worked on 8,800 CIPD projects. She holds a Level 7 CIPD Diploma in HRM. Sophie's clear and succinct writing style, combined with her knowledge of CIPD guidelines, makes her a great option. She has received overwhelmingly positive reviews from more than 7,400 customers for her impactful assignments.
          </p>
        </div>
      <div class="d-flex flex-column flex-sm-row lg:justify-start justify-content-center align-items-center mt-4 mb-2 gap-3 gap-sm-4 gap-lg-5 w-100" bis_skin_checked="1">
        <div class="d-flex align-items-center gap-3" bis_skin_checked="1">
        <img src="{{asset('images/degree.png')}}" alt="degree" title="degree" loading="lazy" width="64" height="64">
          <div class="d-flex flex-column align-items-start" bis_skin_checked="1">
            <p class="fw-bold mb-0 text-lg italic text-white">Degree</p>
            <p class=" mb-0 text-white italic text-nowrap">Diploma in HRM</p>
          </div>
        </div>
        <div class="d-flex align-items-center gap-3" bis_skin_checked="1">
        <img src="{{asset('images/projects.png')}}" alt="projects" title="projects" loading="lazy" width="64" height="64">
          <div class="d-flex flex-column align-items-start" bis_skin_checked="1">
            <p class="fw-bold mb-0 text-lg italic text-white text-nowrap">Projects Completed</p>
            <p class=" text-white mb-0 italic text-nowrap">8,800</p>
          </div>
        </div>
    </div>

     <div class="mt-4 text-center lg:text-left" bis_skin_checked="1">
          <a href="{{route('order')}}" class="hero-section-order py-2 fw-bold">Hire Me</a>
      </div>
        </div>
      </div>

    <div class="mySlidesTwo" style="display: none;" bis_skin_checked="1">
        <div class=" border-0  p-4 " bis_skin_checked="1">
          <div class="text-center" bis_skin_checked="1">
            <h4 class="text-4xl text-center lg:text-left text-white fw-semibold mb-0">James</h4>
          </div>
          <div class="border-top my-3">
          <p class="text-center lg:text-left mt-3 text-white  mb-3">
          Having worked with us for over 11 years and completed more than 10,600 assignments, James is a CIPD-qualified professional with extensive experience in HR and learning and development topics. He is noted for producing reliable, well-referenced work and has earned 9,987 glowing reviews from students.
          </p>
          </div>
          <div class="d-flex flex-column flex-sm-row lg:justify-start justify-content-center align-items-center mt-4 mb-2 gap-3 gap-sm-4 gap-lg-5 w-100" bis_skin_checked="1">
            <div class="d-flex align-items-center gap-3" bis_skin_checked="1">
                <img src="{{asset('images/degree.png')}}" alt="degree" title="degree" loading="lazy" width="64" height="64">
              <div class="d-flex flex-column align-items-start" bis_skin_checked="1">
                <p class="fw-bold mb-0 text-lg italic text-white">Degree</p>
                <p class=" mb-0 text-white italic text-nowrap">HR</p>
              </div>
            </div>
            <div class="d-flex align-items-center gap-3" bis_skin_checked="1">
                <img src="{{asset('images/projects.png')}}" alt="projects" title="projects" loading="lazy" width="64" height="64">
              <div class="d-flex flex-column align-items-start" bis_skin_checked="1">
                <p class="fw-bold mb-0 text-lg italic text-white">Projects Completed</p>
                <p class="mb-0 text-white italic text-nowrap">10,600</p>
              </div>
            </div>
        </div>
        <div class="mt-4 text-center lg:text-left" bis_skin_checked="1">
          <a href="{{route('order')}}" class="hero-section-order py-2 fw-bold">Hire Me</a>
      </div>
        </div>
      </div>

    <div class="mySlidesTwo" style="display: none;" bis_skin_checked="1">
        <div class=" border-0  p-4 " bis_skin_checked="1">
          <div class="text-center" bis_skin_checked="1">
            <h4 class="text-4xl text-center lg:text-left text-white fw-semibold mb-0">Olivia</h4>
          </div>
          <div class="border-top my-3">
          <p class="text-center lg:text-left mt-3 text-white  mb-3">
            Eight years ago, Olivia began writing for us and has since become one of the most sought-after writers for CIPD tasks. She has completed 7,067 assignments. Having a Master's degree in Human Resource Development, she helps students by simplifying difficult concepts into clear, well-organised assignments. Happy customers have written over 6,700 good reviews for Olivia.
          </p>
        </div>
      <div class="d-flex flex-column flex-sm-row lg:justify-start justify-content-center align-items-center mt-4 mb-2 gap-3 gap-sm-4 gap-lg-5 w-100" bis_skin_checked="1">
        <div class="d-flex align-items-center gap-3" bis_skin_checked="1">
            <img src="{{asset('images/degree.png')}}" alt="degree" title="degree" loading="lazy" width="64" height="64">
          <div class="d-flex flex-column align-items-start" bis_skin_checked="1">
            <p class="fw-bold mb-0 text-lg italic text-white">Degree</p>
            <p class="mb-0 text-white italic text-nowrap">Master's in HRD</p>
          </div>
        </div>
        <div class="d-flex align-items-center gap-3" bis_skin_checked="1">
            <img src="{{asset('images/projects.png')}}" alt="projects" title="projects" loading="lazy" width="64" height="64">
          <div class="d-flex flex-column align-items-start" bis_skin_checked="1">
            <p class="fw-bold mb-0 text-lg italic text-white">Projects Completed</p>
            <p class="mb-0 text-white italic text-nowrap">7,000+</p>
          </div>
        </div>
    </div>
    <div class="mt-4 text-center lg:text-left" bis_skin_checked="1">
          <a href="{{route('order')}}" class="hero-section-order py-2 fw-bold">Hire Me</a>
      </div>
        </div>
      </div>

    <div class="mySlidesTwo" style="display: none;" bis_skin_checked="1">
        <div class=" border-0  p-4 " bis_skin_checked="1">
          <div class="text-center" bis_skin_checked="1">
            <h4 class="text-4xl text-center lg:text-left text-white fw-semibold mb-0">Daniel</h4>
          </div>
          <div class="border-top my-3">
          <p class="text-center lg:text-left mt-3 text-white  mb-3">
          Daniel has 10 years of writing expertise and has composed 9,267 assignments. Clients turn to him for original, well-written content that meets the latest CIPD requirements. He is an expert in strategic HR subjects and organisational behaviour. Daniel's dedication is evident in his 8,678 excellent reviews from pleased students.
          </p>
          </div>
        
      <div class="d-flex flex-column flex-sm-row lg:justify-start justify-content-center align-items-center mt-4 mb-2 gap-3 gap-sm-4 gap-lg-5 w-100" bis_skin_checked="1">
        <div class="d-flex align-items-center gap-3" bis_skin_checked="1">
            <img src="{{asset('images/degree.png')}}" alt="degree" title="degree" loading="lazy" width="64" height="64">
          <div class="d-flex flex-column align-items-start" bis_skin_checked="1">
            <p class="fw-bold mb-0 text-lg italic text-white">Degree</p>
            <p class="mb-0 text-white italic text-nowrap">Strategic HR</p>
          </div>
        </div>
        <div class="d-flex align-items-center gap-3" bis_skin_checked="1">
            <img src="{{asset('images/projects.png')}}" alt="projects" title="projects" loading="lazy" width="64" height="64">
          <div class="d-flex flex-column align-items-start" bis_skin_checked="1">
            <p class="fw-bold mb-0 text-lg italic text-white">Projects Completed</p>
            <p class="mb-0 text-white italic text-nowrap">9,200+</p>
          </div>
        </div>
    </div>
    <div class="mt-4 text-center lg:text-left" bis_skin_checked="1">
          <a href="{{route('order')}}" class="hero-section-order py-2 fw-bold">Hire Me</a>
      </div>
        </div>
      </div>
  
    </div>
      
    </div>
  </div>
</section>

<section class="container py-5">
  <h3 class="text-center text-primary fw-bold mb-4 text-3xl">
    Budget-Friendly Pricing Plans
  </h3>
  

  <!-- Level 3 -->
  <div class="px-3 ">
      <div class="row pricing-sec mb-4 text-center mt-5">
    <div class="col-md-2 border-box bg-secondary text-white d-flex flex-column justify-content-center p-3">
      <h5 class="mb-0 fw-bold text-white text-2xl">CIPD<br>Level 3</h5>
    </div>
    <div class="col-md-10">
      <div class="row g-0">
        <div class="col p-3 border-end">
          <div class="fw-bold">20 Days</div>
          <div>£4</div>
        </div>
        <div class="col p-3 border-end">
          <div class="fw-bold">15 Days</div>
          <div>£5</div>
        </div>
        <div class="col p-3 border-end">
          <div class="fw-bold">10 Days</div>
          <div>£6</div>
        </div>
        <div class="col p-3 border-end">
          <div class="fw-bold">7 Days</div>
          <div>£8</div>
        </div>
        <div class="col p-3 border-end">
          <div class="fw-bold">6 Days</div>
          <div>£10</div>
        </div>
        <div class="col p-3 border-end">
          <div class="fw-bold">5 Days</div>
          <div>£12</div>
        </div>
        <div class="col p-3 border-end">
          <div class="fw-bold">4 Days</div>
          <div>£14</div>
        </div>
        <div class="col p-3 border-end">
          <div class="fw-bold">3 Days</div>
          <div>£16</div>
        </div>
        <div class="col p-3 border-end">
          <div class="fw-bold">2 Days</div>
          <div>£18</div>
        </div>
        <div class="col p-3 border-end">
          <div class="fw-bold">24 Hours</div>
          <div>£20</div>
        </div> 
        <div class="col p-3">
          <div class="fw-bold">6 Hours</div>
          <div>£22</div>
        </div>
      </div>
    </div>
  </div>
  </div>
  

  <!-- Level 5 -->
  <div class="px-3">
  <div class="row pricing-sec mb-4 text-center">
    <div class="col-md-2 border-box bg-secondary text-white d-flex flex-column justify-content-center p-3">
      <h5 class="mb-0 fw-bold text-white text-2xl">CIPD<br>Level 5</h5>
    </div>
    <div class="col-md-10 ">
      <div class="row g-0">
        <div class="col p-3 border-end"><div class="fw-bold">20 Days</div><div>£6</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">15 Days</div><div>£7</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">10 Days</div><div>£8</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">7 Days</div><div>£10</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">6 Days</div><div>£12</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">5 Days</div><div>£14</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">4 Days</div><div>£16</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">3 Days</div><div>£18</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">2 Days</div><div>£20</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">24 Hours</div><div>£22</div></div>
        <div class="col p-3"><div class="fw-bold">6 Hours</div><div>£24</div></div>
      </div>
    </div>
  </div>
  </div>

  <!-- Level 7 -->
  <div class="px-3">
  <div class="row pricing-sec mb-4 text-center">
    <div class="col-md-2 border-box bg-secondary text-white d-flex flex-column justify-content-center p-3">
      <h5 class="mb-0 fw-bold text-white text-2xl">CIPD<br>Level 7</h5>
    </div>
    <div class="col-md-10 ">
      <div class="row g-0">
        <div class="col p-3 border-end"><div class="fw-bold">20 Days</div><div>£8</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">15 Days</div><div>£9</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">10 Days</div><div>£10</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">7 Days</div><div>£12</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">6 Days</div><div>£14</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">5 Days</div><div>£16</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">4 Days</div><div>£18</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">3 Days</div><div>£20</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">2 Days</div><div>£22</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">24 Hours</div><div>£24</div></div>
        <div class="col p-3"><div class="fw-bold">6 Hours</div><div>£26</div></div>
      </div>
    </div>
  </div>
  </div>
  
  <div class="px-3">
  <div class="row pricing-sec mb-4 text-center">
    <div class="col-md-2 border-box bg-secondary text-white d-flex flex-column justify-content-center p-3">
      <h5 class="mb-0 fw-bold text-white text-2xl">HR<br>Assignment</h5>
    </div>
    <div class="col-md-10 ">
      <div class="row g-0">
        <div class="col p-3 border-end"><div class="fw-bold">20 Days</div><div>£10</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">15 Days</div><div>£11</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">10 Days</div><div>£12</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">7 Days</div><div>£14</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">6 Days</div><div>£16</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">5 Days</div><div>£18</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">4 Days</div><div>£20</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">3 Days</div><div>£22</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">2 Days</div><div>£24</div></div>
        <div class="col p-3 border-end"><div class="fw-bold">24 Hours</div><div>£26</div></div>
        <div class="col p-3"><div class="fw-bold">6 Hours</div><div>£28</div></div>
      </div>
    </div>
  </div>
  </div>

  <div class="text-center mt-4">
    <a href="{{route('order')}}" class="hero-section-order py-2  fw-bold">Order Now</a>
    <a href="{{route('pricing')}}" class="hero-section-order py-2  fw-bold">View Plans</a>
  </div>
</section>

@include('partials.steps')

<section class="cta-section p-3 ">
  <div class="bg-secondary rounded-lg py-8 py-lg-0">
    <div class="row align-items-center">
      <!-- Left Content -->
      <div class="col-lg-7 px-lg-5 ">
        <h3 class="text-white px-3 px-lg-4" style="font-size: 2rem; font-weight: bold;">
          Support That’s Easy on Your Mind and Wallet
        </h3>
        <p class="py-3 text-white px-3 px-lg-4">
          We offer quality help that won't burn a hole in your pocket. Our affordable CIPD assignment help UK services are designed for students with budget constraints, making it easier for them to get professional writing assistance for their CIPD qualifications.
        </p>
        <div class="px-3 px-lg-4 d-flex gap-3">
          <a href="{{route('order')}}" class="text-white mt-4 btn bg-primary">Order Now</a>
          <a href="javascript:void(Tawk_API.toggle())" class="text-white mt-4 btn bg-primary">Live Chat</a>
        </div>

      </div>

      <!-- Right Image -->
      <div class="col-lg-5 d-none d-lg-block">
        <img src="{{asset('images/image-sec.webp')}}" class="img-fluid" width="498" height="326" title="Support That’s Easy on Your Mind and Wallet" alt="Support That’s Easy on Your Mind and Wallet" loading="lazy">
      </div>
    </div>
  </div>
</section>

@include('partials.stats')

<section class="four-sec py-5 px-2">
  <div class="container">
    
    <!-- First Row -->
    <div class="four-border-sec row gy-4 gx-4">
      <div class=" col-lg-6">
        <div class="content">
        <h2 class="fw-bold">
          Let Our Professional CIPD Assignment Writers Handle Your Academic Hassles
        </h2>
        <div class="py-3 px-3">
          <p class="fs-6 py-2">
            CIPD assignments can be challenging, especially when you are managing academic deadlines and other personal responsibilities. But you don't have to face it alone. Our friendly and seasoned CIPD specialists are ready to help you. We recognise the difficulties you have, whether you are studying Level 3, Level 5, or Level 7. With a deep understanding of HR and L&D issues, our team precisely knows what CIPD examiners are looking for. We ensure your work is accurate, logically organised, and professionally written. Your particular needs and CIPD criteria drive the personalised preparation of every assignment. We will address your queries, understand the assignment, and deliver high-quality work.
          </p>
          <p class="fs-6 py-2">
            Moreover, thousands of students have benefited from our assistance in raising their scores and fulfilling their academic goals. With our support, you can meet deadlines and submit incredible work that will impress the assessors. Our services are 100% plagiarism-free and punctual, so you can reach out to us at whatever level you are at, such as <a href="{{ route('cipd-level-3') }}" class="fancy-link">CIPD level 3</a>, <a href="{{ route('cipd-level-5') }}" class="fancy-link">CIPD level 5</a>, or <a href="{{ route('cipd-level-7') }}" class="fancy-link">CIPD level 7</a>. We are here with you whether you are stuck in the research, writing, citations, proofreading, or editing. Besides, we will revise your work until you are pleased with it.
          </p>
        </div>
    </div>
      </div>

      <div class="col-lg-6">
        <div class="content">
        <h2 class="fw-bold">
          Get Instant Support Through Our Customised CIPD Assignment Help London
        </h2>
        <div class="py-3 px-3">
          <p class="fs-6 py-2">
            Many HR and L&D students find it challenging to complete assignments to the level CIPD expects. If you are facing the same problem, don't worry. Our CIPD assignment writing services in the UK are here to make it simple and stress-free for you. We provide expert guidance to help you understand your assignment and complete it efficiently. Need assistance writing your task with actual business practices? We also do that so that your assignment has an impact. Not sure how to cite or structure your assignment? We accurately arrange and cite your work, and guarantee that your writing is crisp, coherent, and completely error-free.
          </p>
          <p class="fs-6 py-2">
            Furthermore, our team of academic writers has in-depth knowledge and insights that bring depth to your assignments. They do not copy and paste content; every task is completed from scratch, based on the instructions and guidelines. Our friendly CIPD assignment writers UK are always available to listen to you and provide revisions as needed. They can handle complex topics and complete your work in accordance with the CIPD standards. We are here not only to complete your task but also to enable you to feel proud of it. Let us turn your anxiety into an academic achievement.
          </p>
        </div>
        </div>
      </div>
    </div>

    <!-- Second Row -->
    <div class="four-border-sec row g-4 mt-4">
      <div class="col-lg-6">
        <div class="content">
        <h2 class="fw-bold ">
          Best CIPD Assignment Writing Services in UK for Busy Learners Like You
        </h2>
        <div class="py-3 px-3">
          <p class="fs-6 py-2">
            Having difficulties with your CIPD project? You are not alone. CIPD Assignment Help UK is here to assist. Whatever your qualification level — Level 3, Level 5, or Level 7 — we offer customised support to meet your specific academic needs. Our knowledgeable team is familiar with the CIPD criteria. Among other subjects, we assist with projects related to HR policies, employment law, and learning and development. Personalised assistance will be provided to help you grasp the subject matter more clearly. That means you learn as you turn in your work on time.
          </p>
          <p class="fs-6 py-2">
            We make sure that your assignments are well-referenced and adhere to all CIPD standards. Every document is thoroughly examined for grammatical correctness, formatting, and plagiarism, so that it is flawless and ready for submission. We are just a message away if you need help with referencing, understanding a difficult topic, or just don't know how to start. Our competent CIPD writers possess strong academic backgrounds and extensive experience in creating top-quality assignments. They do not write generally but work on the assignments according to what you provide in the assignment brief. Besides, you can contact us for <a href="{{ route('hr-assignment') }}" class="fancy-link">HR assignment help</a> too. Get your CIPD assistance online right away and move ahead in your career. 
          </p>
        </div>
      </div>
      </div>

      <div class="col-lg-6">
        <div class="content">
        <h2 class="fw-bold">
          Reasonably Priced CIPD Assignment Writing Service UK without Sacrificing Quality
        </h2>
        <div class="py-3 px-3">
          <p class="fs-6 py-2">
            Are you concerned that professional CIPD assignment help might cost too much? We can understand. That is why we have built an affordable support system that won't empty your wallet. Most CIPD students are working professionals or ambitious learners who may be facing financial constraints. Our cheap CIPD project assistance ensures fair pricing for exceptional support. We offer adaptable pricing according to your specific needs. Whether you require editing or comprehensive support for your project, we offer a solution tailored to your particular needs.
          </p>
          <p class="fs-6 py-2">
            Furthermore, we have no hidden charges or unreasonable rates. Everything will be crystal clear and there will be no surprises. Although the price is cheap, we never negotiate on quality. Seasoned writers who are fully familiar with CIPD requirements and academic standards will write your paper. What distinguishes us? Our academic writers ensure the content is original and pertinent by first understanding your goals. They carefully customise every assignment to your course level, and if you need changes, we provide them as many times as you want until you are happy with the work. So, start moving forward in your HR profession today by ordering our reasonably priced CIPD assignment writing services in UK.
          </p>
        </div>
        </div>
      </div>
    </div>

      <div class="col-12 text-center mt-5 mb-3 mb-lg-0">
      <a href="{{route('order')}}" class="hero-section-order py-2 fw-bold">
        Get Started
      </a>
    </div>

  </div>
</section>


<section class="bg-primary py-5">
  <div class="container">
    <!-- Section Title -->
    <div class="row">
      <div class="col-12 text-center mb-4">
        <h3 class="h2 text-white fw-semibold">
          Verified Work Examples
        </h3>
      </div>
    </div>

    <!-- Row of Cards -->
    <div class="row g-4 my-3">
      <!-- Card 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="position-relative">
          <div class="bg-secondary rounded-3 samples-bg position-absolute top-0 start-50 translate-middle-x"></div>
          <div class="bg-white rounded-3 p-4 position-relative" style="z-index: 1;">
            <p class="text-center fw-semibold mt-3">CIPD Level 3</p>
            <ul class="list-unstyled mt-3">
              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                <span class="small">Title:</span>
                <span class="small">Essentials of People Practice</span>
              </li>
              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2 mt-3">
                <span class="small">Discipline:</span>
                <span class="small">Management</span>
              </li>
              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2 mt-3">
                <span class="small">Academic Level:</span>
                <span class="small">Diploma Level 3</span>
              </li>
              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2 mt-3">
                <span class="small">Pages:</span>
                <span class="small">53</span>
              </li>
              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2 mt-3">
                <span class="small">Format:</span>
                <span class="small">Harvard</span>
              </li>
            </ul>

            <div class="text-center mt-3">
              <a href="{{asset('samples/CIPD-LEVEL-3.docx')}}" target="_blank" class="hero-section-order py-2 fw-bold">
                Download Sample
              </a>
            </div>
            <div class="text-center mt-4">
              <a href="{{route('order')}}" class="hero-section-order py-2 fw-bold">
                Order Now
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="position-relative">
          <div class="bg-secondary rounded-3 samples-bg position-absolute top-0 start-50 translate-middle-x"></div>
          <div class="bg-white rounded-3 p-4 position-relative" style="z-index: 1;">
            <p class="text-center fw-semibold mt-3">CIPD Level 5</p>
            <ul class="list-unstyled mt-3">
              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                <span class="small">Title:</span>
                <span class="small">Wellbeing at Work</span>
              </li>
              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2 mt-3">
                <span class="small">Discipline:</span>
                <span class="small">Management</span>
              </li>
              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2 mt-3">
                <span class="small">Academic Level:</span>
                <span class="small">Diploma Level 5</span>
              </li>
              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2 mt-3">
                <span class="small">Pages:</span>
                <span class="small">23</span>
              </li>
              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2 mt-3">
                <span class="small">Format:</span>
                <span class="small">Harvard</span>
              </li>
            </ul>

            <div class="text-center mt-3">
              <a href="{{asset('samples/CIPD-LEVEL-5.docx')}}" target="_blank" class="hero-section-order py-2 fw-bold">
                Download Sample
              </a>
            </div>
            <div class="text-center mt-4">
              <a href="{{route('order')}}" class="hero-section-order py-2 fw-bold">
                Order Now
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-lg-4 col-md-6">
        <div class="position-relative">
          <div class="bg-secondary rounded-3 samples-bg position-absolute top-0 start-50 translate-middle-x"></div>
          <div class="bg-white rounded-3 p-4 position-relative" style="z-index: 1;">
            <p class="text-center fw-semibold mt-3">CIPD Level 7</p>
            <ul class="list-unstyled mt-3">
              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                <span class="small">Title:</span>
                <span class="small">Talent Management</span>
              </li>
              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2 mt-3">
                <span class="small">Discipline:</span>
                <span class="small">Management</span>
              </li>
              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2 mt-3">
                <span class="small">Academic Level:</span>
                <span class="small">Diploma Level 7</span>
              </li>
              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2 mt-3">
                <span class="small">Pages:</span>
                <span class="small">22</span>
              </li>
              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2 mt-3">
                <span class="small">Format:</span>
                <span class="small">Harvard</span>
              </li>
            </ul>

            <div class="text-center mt-3">
              <a href="{{asset('samples/CIPD-LEVEL-7.docx')}}" target="_blank" class="hero-section-order py-2 fw-bold">
                Download Sample
              </a>
            </div>
            <div class="text-center mt-4">
              <a href="{{route('order')}}" class="hero-section-order py-2 fw-bold">
                Order Now
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- View All Button -->
      <div class="col-12 text-center mt-5 mb-3 mb-lg-0">
        <a href="{{route('samples')}}" class="hero-section-order py-2 fw-bold">
          View All Samples
        </a>
      </div>
    </div>
  </div>
</section>


<section class="py-5 border rounded" style="border-color: #BE8672;">
  <div class="container">
    <div class="row align-items-center">
   <div class="col-12 text-center mb-4">
    <h2 class="h2 text-secondary fw-semibold">
      Your Trusted Partner for CIPD Assignment Help UK – Complete Guidance for <br>All CIPD Levels
    </h2>
    <p>We strive to exceed every student’s expectations by delivering reliable CIPD assignment help in London, ensuring high-quality solutions with <br>complete feasibility, affordability, and unmatched customer satisfaction.</p>
    </div>
      <!-- Left Level Tabs -->
      <div class="col-lg-3 text-center">
        <div class="level-tab mb-4 " data-level="3">
          <span class="d-inline-block rounded-circle tabs tab-1 text-white fw-bold">3</span>
          <span class="tab-text fw-bold ms-2">LEVEL</span>
        </div>
        <div class="level-tab level-tab2 mb-4" data-level="5">
          <span class="d-inline-block rounded-circle tabs tab-2 text-white fw-bold">5</span>
          <span class="tab-text fw-bold ms-2">LEVEL</span>
        </div>
        <div class="level-tab mb-4" data-level="7">
          <span class="d-inline-block rounded-circle tabs tab-1 text-white fw-bold">7</span>
          <span class="tab-text fw-bold ms-2">LEVEL</span>
        </div>
      </div>

      <div class="col-lg-3 text-center mb-4 mb-md-0">
        <div id="mainLevelCircle"
             class="rounded-circle d-flex flex-column main-tab mx-auto justify-content-center align-items-center">
          <p class="fw-bold text-white display-level mb-0">3</p>
          <!-- <span class="fw-bold text-white">LEVEL</span> -->
        </div>
      </div>

      <div class="col-lg-6 mt-4 lg:mt-0">
        <div class="swiper mySwiper levels-slider">
          <div class="swiper-wrapper right-content">
         
            <!-- Level 3 Slides -->
            <div class="swiper-slide px-2" data-level="3">
              <ul class="list-unstyled">
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i> CIPD Level 3 Foundation Diploma in Human Resource Practice</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i> CIPD Level 3 Foundation Award in Human Resource Essentials</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i> CIPD Level 3 Foundation Certificate in Human Resources Practice</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i> CIPD Level 3 Foundation Certificate in Learning and Development</li>
              </ul>
            </div>
            <div class="swiper-slide px-2" data-level="3">
              <ul class="list-unstyled">
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i> CIPD Level 3 Foundation Diploma in Learning and Development Practice</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 3 Certificate Human Resource Practice</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 3 Diploma Human Resource Practice</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i> CIPD Level 3 HR Management | Foundation Award</li>
              </ul>
            </div>
            <div class="swiper-slide px-2" data-level="3">
              <ul class="list-unstyled">
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 3 Understanding Organizations and the Role of HR | Foundation Award</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 3 HR | Resourcing Talent | Foundation Award</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 3 HR | Supporting Change within Organizations | Foundation Award</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 3 Award HR | Supporting Good Practice in Performance &amp; Reward Management</li>
              </ul>
            </div>
            <div class="swiper-slide px-2" data-level="3">
              <ul class="list-unstyled">
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 3 Foundation Diploma in Learning &amp; Development (Online Learning)</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i> CIPD Level 3 HR | Developing Yourself as an Effective HR Practitioner | Foundation Award</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 3 Foundation Diploma in Learning &amp; Development (Distance Learning)</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 3 Foundation Diploma in Learning &amp; Development</li>
              </ul>
            </div>

            <!-- Level 5 Slides -->
            <div class="swiper-slide px-2" data-level="5">
              <ul class="list-unstyled">
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 5 HR Management and Co-ordination | Intermediate Award</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 5 HR Resourcing and Talent Planning | Intermediate Award</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 5 In Learning &amp; Development (L&amp;D)</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 5 HR Employment Law | Intermediate Award</li>
              </ul>
            </div>
            <div class="swiper-slide px-2" data-level="5">
              <ul class="list-unstyled">
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 5 Intermediate Certificate in HR Management (Classroom-based)</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 5 Intermediate Certificate in L&amp;D (Learning and Development)</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 5 Intermediate Diploma in Learning and Development 5 (Classroom-based)</li>
              </ul>
            </div>
            <div class="swiper-slide px-2" data-level="5">
              <ul class="list-unstyled">
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 5 Intermediate Award in Human Resources</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 5 Intermediate Certificate in Human Resource Management</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 5 Intermediate Certificate in Learning and Development</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 5 Intermediate Diploma in Human Resource Management</li>
              </ul>
            </div>
            <div class="swiper-slide px-2" data-level="5">
              <ul class="list-unstyled">
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 5 Intermediate Diploma in Applied Human Resources</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 5 Intermediate Diploma in Learning And Development</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 5 Intermediate HR Certificate - Online Course</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 5 HR | Human Resources Reward Management | Intermediate Award</li>
              </ul>
            </div>

            <!-- Level 7 Slides -->
            <div class="swiper-slide px-2" data-level="7">
              <ul class="list-unstyled">
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 7 Advanced Award in Human Resources</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 7 Advanced Certificate in Human Resources</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 7 Advanced Diploma in Human Resource Management</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 7 Advanced Diploma in Human Resource Development</li>
              </ul>
            </div>
            <div class="swiper-slide px-2" data-level="7">
              <ul class="list-unstyled">
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 7 HR Employment Law | Advanced Award</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 7 Advanced Certificate in HR Management | HR</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 7 HR Managing Employment Relations | Advanced Award</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 7 HR Learning and Talent Development | Advanced Award </li>
              </ul>
            </div>
            <div class="swiper-slide px-2" data-level="7">
              <ul class="list-unstyled">
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>HRM CIPD Level 7 Advanced Award | Investigating a Business Issue from an HR Perspective</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 7 HR Resourcing and Talent Management | Advanced Award</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 7 HR Reward Management | Advanced Award</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 7 Award in Employment Law</li>
              </ul>
            </div>
            <div class="swiper-slide px-2" data-level="7">
              <ul class="list-unstyled">
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 7 in Leadership &amp; Management Development</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 7 Advanced Certificate in HR (Classroom-based)</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 7 Advanced Diploma in HR Management (Classroom-based)</li>
                <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary me-2"></i>CIPD Level 7 Fast Track Advanced Certificate in HR</li>
              </ul>
            </div>

          </div>
           <div class="swiper-pagination levels-pagination-1"></div>
        </div>
      </div>

    </div>
  </div>
</section>

<div class="valuable_customer bg-primary border-top lg:py-20" bis_skin_checked="1">
    <div class="container" bis_skin_checked="1">
      <div class="row" bis_skin_checked="1">
        <div class="col-md-6 mb-3" bis_skin_checked="1">
          <h3 class="text-white text-3xl fw-bold py-4">Hear It Straight from Our CIPD Stars</h3>
          <p class="text-white pb-4">Our customers are at the heart of everything we do. Students have been using our services for a long time and have seen real improvement in their grades. Their kind words motivate us to do better.</p>
          <a href="{{route('reviews')}}" class="hero-section-order py-2 fw-bold" bis_skin_checked="1">Explore All Reviews</a>
        </div>
        <div class="col-md-6" bis_skin_checked="1">
          <div class="row" bis_skin_checked="1">
            <div class="col-md-12" bis_skin_checked="1">
              <div class="reviews swiper-container swiper-container-initialized swiper-container-horizontal" bis_skin_checked="1">
                <div class="swiper-wrapper" id="swiper-wrapper-4e5bdfb5baddf444" aria-live="off" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;" bis_skin_checked="1">
                  <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 5" style="width: 540px; margin-right: 10px;" bis_skin_checked="1">
                    <div class="testimonail_box px-5 py-4" bis_skin_checked="1">
                      <img src="{{asset('images/testimonailicon.webp')}}" alt="testimonial-icon" title="testimonial-icon" class="testiconx">
                      <p class="text-white">“I discovered this service while struggling with my Level 7 CIPD unit. The writer followed every specification and delivered it on time. I passed with outstanding grades!”</p>
                      <h4 class="text-white mt-3">Liam</h4>
                    </div>
                  </div>
                  <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 5" style="width: 540px; margin-right: 10px;" bis_skin_checked="1">
                    <div class="testimonail_box px-5 py-4" bis_skin_checked="1">
                      <img src="{{asset('images/testimonailicon.webp')}}" alt="testimonial-icon" title="testimonial-icon" class="testiconx">
                      <p class="text-white">“For the price I paid, I was surprised by the high quality. The assignment was organised correctly, original, and properly referenced. I definitely plan on ordering from here again.”</p>
                      <h4 class="text-white mt-3">Amelia</h4>
                    </div>
                  </div>
                  <div class="swiper-slide" role="group" aria-label="3 / 5" style="width: 540px; margin-right: 10px;" bis_skin_checked="1">
                    <div class="testimonail_box px-5 py-4" bis_skin_checked="1">
                      <img src="{{asset('images/testimonailicon.webp')}}" alt="testimonial-icon" title="testimonial-icon" class="testiconx">
                      <p class="text-white">“I literally had no time to give to my assignment due to work. The writer thoroughly understood CIPD requirements and produced high-quality work with authentic content. Highly appreciated!”</p>
                      <h4 class="text-white mt-3">Ryan</h4>
                    </div>
                  </div>
                  <div class="swiper-slide" role="group" aria-label="4 / 5" style="width: 540px; margin-right: 10px;" bis_skin_checked="1">
                    <div class="testimonail_box px-5 py-4" bis_skin_checked="1">
                      <img src="{{asset('images/testimonailicon.webp')}}" alt="testimonial-icon" title="testimonial-icon" class="testiconx">
                      <p class="text-white">“The team was very supportive and friendly. I requested some changes, and they handled them quickly. My teacher was impressed by the finished project. Thank you so much!”</p>
                      <h4 class="text-white mt-3">Isla</h4>
                    </div>
                  </div>
                  
                </div>
              <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
             <div class="swiper-pagination reviews-pagination pb-4"></div>
            </div>
          </div>

        </div>

      </div>

    </div>

  </div>
  
<div class="section_15"> 
  <div class="container py-12 px-4">
    <div>
      <h3 class="text-center text-secondary mb-3 fw-bold">Got Questions? We’ve Got Answers</h3>
      <p class="text-center text-lg fw-semibold text-black mb-3">
        Go through our FAQ section and get quick answers to the questions you have in mind.
      </p>
    </div>

    <div class="accordion accordion-flush" id="accordionExample">

      <!-- 1 -->
      <div class="accordion-item mb-4 custom-radius">
        <h4 class="accordion-header" id="headingOne">
          <button class="accordion-button collapsed bg-transparent fs-5 d-flex align-items-center"
            type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
            aria-expanded="false" aria-controls="collapseOne">
            <span class="me-3 d-flex align-items-center justify-content-center rounded-circle text-white fw-bold num-style">1</span>
            <span class="flex-grow-1 text-start">What is the format of your CIPD assignment samples?</span>
            <span class="ms-3"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h4>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
          data-bs-parent="#accordionExample">
          <div class="accordion-body text-gray">
            Our CIPD assignment samples are well-structured, featuring an introduction, a main body with headings, and a conclusion. We follow all the requirements and CIPD guidelines. Referencing is done in Harvard or your preferred citation style.
          </div>
        </div>
      </div>

      <!-- 2 -->
      <div class="accordion-item mb-4 custom-radius">
        <h4 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed bg-transparent fs-5 d-flex align-items-center"
            type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
            aria-expanded="false" aria-controls="collapseTwo">
            <span class="me-3 d-flex align-items-center justify-content-center rounded-circle text-white fw-bold num-style">2</span>
            <span class="flex-grow-1 text-start">Can you help me complete my entire CIPD assignment?</span>
            <span class="ms-3"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h4>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
          data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Yes, we can help you complete your entire CIPD assignment from start to finish, making sure we adhere to your instructions and CIPD standards.
          </div>
        </div>
      </div>

      <!-- 3 -->
      <div class="accordion-item mb-4 custom-radius">
        <h4 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed bg-transparent fs-5 d-flex align-items-center"
            type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
            aria-expanded="false" aria-controls="collapseThree">
            <span class="me-3 d-flex align-items-center justify-content-center rounded-circle text-white fw-bold num-style">3</span>
            <span class="flex-grow-1 text-start">What levels of CIPD do you support (3, 5, and 7)?</span>
            <span class="ms-3"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h4>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
          data-bs-parent="#accordionExample">
          <div class="accordion-body">
            We support all CIPD levels, whether it is 3, 5 or 7. Our writers create assignments according to your level and meet learning outcomes.
          </div>
        </div>
      </div>

      <!-- 4 -->
      <div class="accordion-item mb-4 custom-radius">
        <h4 class="accordion-header" id="headingFour">
          <button class="accordion-button collapsed bg-transparent fs-5 d-flex align-items-center"
            type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
            aria-expanded="false" aria-controls="collapseFour">
            <span class="me-3 d-flex align-items-center justify-content-center rounded-circle text-white fw-bold num-style">4</span>
            <span class="flex-grow-1 text-start">Is your CIPD assignment writing service plagiarism-free?</span>
            <span class="ms-3"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h4>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
          data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Yes, our writers are qualified experts and write everything from scratch after doing thorough research. They do not copy content and always deliver 100% plagiarism-free work.
          </div>
        </div>
      </div>

      <!-- 5 -->
      <div class="accordion-item mb-4 custom-radius">
        <h4 class="accordion-header" id="headingFive">
          <button class="accordion-button collapsed bg-transparent fs-5 d-flex align-items-center"
            type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
            aria-expanded="false" aria-controls="collapseFive">
            <span class="me-3 d-flex align-items-center justify-content-center rounded-circle text-white fw-bold num-style">5</span>
            <span class="flex-grow-1 text-start">How much does your CIPD assignment help cost in the UK?</span>
            <span class="ms-3"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h4>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
          data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Well, the cost of our CIPD assignment help depends on your level, deadline and word count. However, we offer affordable packages to suit your needs and budget.
          </div>
        </div>
      </div>

      <!-- 6 -->
      <div class="accordion-item mb-4 custom-radius">
        <h4 class="accordion-header" id="headingSix">
          <button class="accordion-button collapsed bg-transparent fs-5 d-flex align-items-center"
            type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix"
            aria-expanded="false" aria-controls="collapseSix">
            <span class="me-3 d-flex align-items-center justify-content-center rounded-circle text-white fw-bold num-style">6</span>
            <span class="flex-grow-1 text-start">What happens if I'm not satisfied with the final assignment?</span>
            <span class="ms-3"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h4>
        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
          data-bs-parent="#accordionExample">
          <div class="accordion-body">
            If you are not satisfied with the final assignment, you can ask for multiple revisions until you are fully satisfied with the work. Our team is very cooperative and always listens to what customers want.
          </div>
        </div>
      </div>

      <!-- 7 -->
      <div class="accordion-item mb-4 custom-radius">
        <h4 class="accordion-header" id="headingSeven">
          <button class="accordion-button collapsed bg-transparent fs-5 d-flex align-items-center"
            type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven"
            aria-expanded="false" aria-controls="collapseSeven">
            <span class="me-3 d-flex align-items-center justify-content-center rounded-circle text-white fw-bold num-style">7</span>
            <span class="flex-grow-1 text-start">Do you offer editing or rewriting services for CIPD work?</span>
            <span class="ms-3"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h4>
        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
          data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Yes, we offer editing and rewriting services for CIPD work. Our experts will refine your paper, enhancing clarity, structure and making it free of errors so that it is ready for submission.
          </div>
        </div>
      </div>

      <!-- 8 -->
      <div class="accordion-item mb-4 custom-radius">
        <h4 class="accordion-header" id="headingEight">
          <button class="accordion-button collapsed bg-transparent fs-5 d-flex align-items-center"
            type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight"
            aria-expanded="false" aria-controls="collapseEight">
            <span class="me-3 d-flex align-items-center justify-content-center rounded-circle text-white fw-bold num-style">8</span>
            <span class="flex-grow-1 text-start">Is your CIPD assignment help available 24/7 in the UK?</span>
            <span class="ms-3"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h4>
        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
          data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Yes, our CIPD assignment help is available 24/7 in the UK. You can contact our team anytime through chat, and they will be ready to answer your queries and remove your confusion.
          </div>
        </div>
      </div>

      <!-- 9 -->
      <div class="accordion-item mb-4 custom-radius">
        <h4 class="accordion-header" id="headingNine">
          <button class="accordion-button collapsed bg-transparent fs-5 d-flex align-items-center"
            type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine"
            aria-expanded="false" aria-controls="collapseNine">
            <span class="me-3 d-flex align-items-center justify-content-center rounded-circle text-white fw-bold num-style">9</span>
            <span class="flex-grow-1 text-start">Do you offer discounts for multiple CIPD assignments?</span>
            <span class="ms-3"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h4>
        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
          data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Yes, we offer discounts for multiple CIPD assignments. The more you order, the bigger the discount. Contact our team to know about your discount offer.
          </div>
        </div>
      </div>

      <!-- 10 -->
      <div class="accordion-item mb-4 custom-radius">
        <h4 class="accordion-header" id="headingTen">
          <button class="accordion-button collapsed bg-transparent fs-5 d-flex align-items-center"
            type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen"
            aria-expanded="false" aria-controls="collapseTen">
            <span class="me-3 d-flex align-items-center justify-content-center rounded-circle text-white fw-bold num-style">10</span>
            <span class="flex-grow-1 text-start">Can I track the progress of my CIPD assignment?</span>
            <span class="ms-3"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h4>
        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
          data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Yes, you can track the progress of your CIPD assignment. Our team will maintain regular contact with you and keep you updated through chat.
          </div>
        </div>
      </div>

      <!-- 11 -->
      <div class="accordion-item mb-4 custom-radius">
        <h4 class="accordion-header" id="headingEleven">
          <button class="accordion-button collapsed bg-transparent fs-5 d-flex align-items-center"
            type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven"
            aria-expanded="false" aria-controls="collapseEleven">
            <span class="me-3 d-flex align-items-center justify-content-center rounded-circle text-white fw-bold num-style">11</span>
            <span class="flex-grow-1 text-start">How long does it take to complete a CIPD assignment?</span>
            <span class="ms-3"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h4>
        <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
          data-bs-parent="#accordionExample">
          <div class="accordion-body">
            It depends on the length and complexity of your assignment. If you need it early, we also offer quicker turnaround options without compromising the quality of our work.
          </div>
        </div>
      </div>

      <!-- 12 -->
      <div class="accordion-item mb-4 custom-radius">
        <h4 class="accordion-header" id="headingTwelve">
          <button class="accordion-button collapsed bg-transparent fs-5 d-flex align-items-center"
            type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve"
            aria-expanded="false" aria-controls="collapseTwelve">
            <span class="me-3 d-flex align-items-center justify-content-center rounded-circle text-white fw-bold num-style">12</span>
            <span class="flex-grow-1 text-start">Can I get a CIPD assignment sample before ordering?</span>
            <span class="ms-3"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h4>
        <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve"
          data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Yes, you can get a CIPD assignment sample before ordering so that you can get an idea of the quality of our work.
          </div>
        </div>
      </div>

      <!-- 13 -->
      <div class="accordion-item mb-4 custom-radius">
        <h4 class="accordion-header" id="headingThirteen">
          <button class="accordion-button collapsed bg-transparent fs-5 d-flex align-items-center"
            type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen"
            aria-expanded="false" aria-controls="collapseThirteen">
            <span class="me-3 d-flex align-items-center justify-content-center rounded-circle text-white fw-bold num-style">13</span>
            <span class="flex-grow-1 text-start">What makes your CIPD assignment services different from others in the UK?</span>
            <span class="ms-3"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h4>
        <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen"
          data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Our CIPD assignment services are different from others in the UK for their original work, professional writers, speedy delivery and excellent customer support that actually listens to your needs.
          </div>
        </div>
      </div>

    </div>
  </div>
</div>


  <div class="calltoaction mt-5 bg-primary" bis_skin_checked="1">
    <div class="container" bis_skin_checked="1">
      <div class="row" bis_skin_checked="1">
        <div class="col-md-6" bis_skin_checked="1">
          <h2 class="pb-2 text-3xl fw-bold text-secondary">No Time to Write? Let Our CIPD Assignment Writers Take Over Now</h2>
          <div class="mt-4">
              <a href="{{route('order')}}" class="hero-section-order py-2 fw-bold" >Place An Order!</a>
          </div>
                  </div>
        <div class="col-md-6" bis_skin_checked="1">
           <img src="{{asset('images/cta-sec-img.webp')}}" alt="cta-section" title="cta-section" class="bottomic" loading="lazy">
       </div>
      </div>

    </div>
  </div>


  
  @endsection
