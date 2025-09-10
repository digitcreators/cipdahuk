@extends('layouts.web')
@section('title', 'Expert CIPD Level 5 Assignment Help You Can Rely On')
@section('description', 'Need CIPD Level 5 Assignment Help? Get expert support to complete your assignments on time with high-quality content, research, and proper referencing.
')
@section('meta_keywords', 'CIPD Level 5 Assignment Help')
@section('canonical', config('app.url') . Request::path())
@section('price', '6')

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
               Get the Best Marks with Our Professional CIPD Level 5 Assignment Help UK
              </h1>
            </div>
          </div>
          <div class="lc-block mb-3">
            <div editable="rich">
              <p class="text-white fw-normal">
              Over the last twelve years, at CIPDassignmenthelpuk.co.uk, we have helped more than 15,000 students with smart, reasonably priced support for all levels. Our team of CIPD Level 5 writers is aware of the difficulties that learners face and knows how to deal with them.              </p>
            </div>
          </div>
          <div class="py-3">
            <a class="hero-section-order py-2  fw-bold" href="{{route('order')}}">
            Hire CIPD Level 5 Writer!
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
        <img src="{{asset('images/about-sec-level5.webp')}}" 
             class="img-fluid" 
             data-aos="fade-down"
             alt="Top CIPD Level 5" title="Top CIPD Level 5">
        
        <!-- Small Overlapping Image -->
        <img src="{{asset('images/about-sec2-level5.webp')}}" 
             class="position-absolute" 
             data-aos="fade-right"
             style="width: 180px; bottom: -20px; right: 136px; border: 5px solid #fff; border-radius:3rem;" 
             alt="Top CIPD Level 5" title="Top CIPD Level 5">
      </div>

      <!-- Content Right -->
      <div class="col-md-6 lg:mt-0 mt-4" data-aos="fade-left">
        <h2 class="fw-bold mb-3">Your Reliable Partner for <span class="text-primary">Top CIPD Level 5 Diploma Assignment Support</span></h2>
        <p class="text-black my-4">
        CIPDAssignmentHelp UK is here to lighten your academic load without burning a hole in your pocket. Our CIPD level 5 assignment experts in the UK produce work that is well-written, organised, and in line with the learning objectives by staying up-to-date with the latest CIPD requirements. We aim to support your personal development and provide effective solutions. You can ask questions, engage in discussions, and request multiple revisions as many times as you want. Receive cheap, quick, and kind assistance all without having to travel and wasting time. Let's help you confidently navigate your CIPD Level 5 path by releasing some of your stress.
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
        <div class="col-4 d-flex justify-content-center" bis_skin_checked="1" data-aos="fade-left">
          <div class="p-1 hover-shadow" onclick="currentSlideTwo(1)" bis_skin_checked="1">
            <img src="{{asset('images/hannah-1.webp')}}" class="hover-card2 testimonial-image" loading="lazy" alt="hannah" title="hannah" width="201px" height="201px">
          </div>
        </div>
        <div class="col-4 d-flex justify-content-center" bis_skin_checked="1" data-aos="fade-right">
          <div class="p-1 hover-shadow" onclick="currentSlideTwo(2)" bis_skin_checked="1">
            <img src="{{asset('images/james-3.webp')}}" class="hover-card2 testimonial-image" loading="lazy" alt="james" title="james" width="201px" height="201px">
          </div>
        </div>
      
      </div>
      <div class="row lg:gap-3 gap-16 justify-content-center mt-1" bis_skin_checked="1">
        <div class="col-4 d-flex justify-content-center" bis_skin_checked="1" data-aos="fade-left">
          <div class="p-1 hover-shadow" onclick="currentSlideTwo(3)" bis_skin_checked="1">
            <img src="{{asset('images/emily-1.webp')}}" class="hover-card2 testimonial-image" loading="lazy" alt="emily" title="emily" width="201px" height="201px">
          </div>
        </div>
      
        <div class="col-4 d-flex justify-content-center" bis_skin_checked="1" data-aos="fade-right">
          <div class="p-1 hover-shadow" onclick="currentSlideTwo(4)" bis_skin_checked="1">
            <img src="{{asset('images/harper-1.webp')}}" class="hover-card2 testimonial-image" loading="lazy" alt="harper" title="harper" width="201px" height="201px">
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-7 order-1" bis_skin_checked="1">
    <div class="mySlidesTwo" style="display: block;" bis_skin_checked="1">
        <div class=" border-0  p-4 " bis_skin_checked="1">
          <div class="text-center" bis_skin_checked="1">
            <h4 class="text-4xl text-center lg:text-left text-white fw-semibold mb-0">Hannah</h4>
          </div>
          <div class="border-top my-3">
          <p class="text-center lg:text-left mt-3 text-white  mb-3">
            For over 11 years, Hannah has been assisting CIPD students with Level 5 courses. She has worked on over 10,678 projects and holds a CIPD Level 5 Diploma in People Management. Hannah specialises in HR and L&D modules and is known for practical HR insights. Our 9,780 customers have given her fantastic reviews for providing well-structured, original assignments adhering to CIPD requirements.
          </p>
          </div>
          <div class="d-flex flex-column flex-sm-row lg:justify-start justify-content-center align-items-center mt-4 mb-2 gap-3 gap-sm-4 gap-lg-5 w-100" bis_skin_checked="1">
            <div class="d-flex align-items-center gap-3" bis_skin_checked="1">
                <img src="{{asset('images/degree.png')}}" alt="degree" title="degree" loading="lazy" width="64" height="64">
              <div class="d-flex flex-column align-items-start" bis_skin_checked="1">
                <p class="fw-bold mb-0 text-lg italic text-white">Degree</p>
                <p class="mb-0 text-white italic text-nowrap">Level 5 Diploma in PM</p>
              </div>
            </div>
            <div class="d-flex align-items-center gap-3" bis_skin_checked="1">
                <img src="{{asset('images/projects.png')}}" alt="projects" title="projects" loading="lazy" width="64" height="64">
              <div class="d-flex flex-column align-items-start" bis_skin_checked="1">
                <p class="fw-bold mb-0 text-lg italic text-white">Projects Completed</p>
                <p class="mb-0 text-white italic text-nowrap">10,600+</p>
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
            <h4 class="text-4xl text-center lg:text-left text-white fw-semibold mb-0">James</h4>
            <div class="border-top my-3">
          <p class="text-center lg:text-left mt-3 text-white  mb-3">
            With more than 9 years of academic writing experience, James is among our most seasoned CIPD level 5 writers. With a Level 7 Diploma in Human Resource Development, he is noted for his ability to make complicated ideas clear and has completed 8,654 tasks successfully. Students appreciate his concise explanations and prompt delivery, which have earned him 7,200 positive reviews.
          </p>
        </div>
      <div class="d-flex flex-column flex-sm-row lg:justify-start justify-content-center align-items-center mt-4 mb-2 gap-3 gap-sm-4 gap-lg-5 w-100" bis_skin_checked="1">
        <div class="d-flex align-items-center gap-3" bis_skin_checked="1">
            <img src="{{asset('images/degree.png')}}" alt="degree" title="degree" loading="lazy" width="64" height="64">
          <div class="d-flex flex-column align-items-start" bis_skin_checked="1">
            <p class="fw-bold mb-0 text-lg italic text-white">Degree</p>
            <p class="mb-0 text-white italic text-nowrap">Level 7 Diploma in HRD</p>
          </div>
        </div>
        <div class="d-flex align-items-center gap-3" bis_skin_checked="1">
            <img src="{{asset('images/projects.png')}}" alt="projects" title="projects" loading="lazy" width="64" height="64">
          <div class="d-flex flex-column align-items-start" bis_skin_checked="1">
            <p class="fw-bold mb-0 text-lg italic text-white">Projects Completed</p>
            <p class="mb-0 text-white italic text-nowrap">8,600+</p>
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
            <h4 class="text-4xl text-center lg:text-left text-white fw-semibold mb-0">Emily</h4>
          </div>
          <div class="border-top my-3">
          <p class="text-center lg:text-left mt-3 text-white  mb-3">
            Emily has been writing CIPD Level 5 assignments for over 10 years and has completed more than 9,800 Level 5 assignments. She holds a CIPD Level 7 Diploma and has a sharp attention to detail, particularly in areas such as editing, formatting, referencing, and proofreading. Students praise her for her friendly attitude and have earned 8,456 glowing reviews from them.
          </p>
          </div>
        
      <div class="d-flex flex-column flex-sm-row lg:justify-start justify-content-center align-items-center mt-4 mb-2 gap-3 gap-sm-4 gap-lg-5 w-100" bis_skin_checked="1">
        <div class="d-flex align-items-center gap-3" bis_skin_checked="1">
            <img src="{{asset('images/degree.png')}}" alt="degree" title="degree" loading="lazy" width="64" height="64">
          <div class="d-flex flex-column align-items-start" bis_skin_checked="1">
            <p class="fw-bold mb-0 text-lg italic text-white">Degree</p>
            <p class="mb-0 text-white italic text-nowrap">CIPD Level 7 Diploma</p>
          </div>
        </div>
        <div class="d-flex align-items-center gap-3" bis_skin_checked="1">
            <img src="{{asset('images/projects.png')}}" alt="projects" title="projects" loading="lazy" width="64" height="64">
          <div class="d-flex flex-column align-items-start" bis_skin_checked="1">
            <p class="fw-bold mb-0 text-lg italic text-white">Projects Completed</p>
            <p class="mb-0 text-white italic text-nowrap">9,800+</p>
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
            <h4 class="text-4xl text-center lg:text-left text-white fw-semibold mb-0">Harper</h4>
          </div>
          <div class="border-top my-3">
          <p class="text-center lg:text-left mt-3 text-white  mb-3">
            Harper possesses both academic and industry expertise, thanks to his background in HR consulting. He has helped thousands of students achieve their CIPD qualifications over the past 7 years and has worked on more than 6,400 projects. Harper's writing is professional, polished and always matches CIPD standards. He has received 5,743 amazing reviews from clients.
          </p>
        </div>
      <div class="d-flex flex-column flex-sm-row lg:justify-start justify-content-center align-items-center mt-4 mb-2 gap-3 gap-sm-4 gap-lg-5 w-100" bis_skin_checked="1">
        <div class="d-flex align-items-center gap-3" bis_skin_checked="1">
            <img src="{{asset('images/degree.png')}}" alt="degree" title="degree" loading="lazy" width="64" height="64">
          <div class="d-flex flex-column align-items-start" bis_skin_checked="1">
            <p class="fw-bold mb-0 text-lg italic text-white">Degree</p>
            <p class="mb-0 text-white italic text-nowrap">HR consulting</p>
          </div>
        </div>
        <div class="d-flex align-items-center gap-3" bis_skin_checked="1">
            <img src="{{asset('images/projects.png')}}" alt="projects" title="projects" loading="lazy" width="64" height="64">
          <div class="d-flex flex-column align-items-start" bis_skin_checked="1">
            <p class="fw-bold mb-0 text-lg italic text-white">Projects Completed</p>
            <p class="mb-0 text-white italic text-nowrap">6,400</p>
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
          Manage Your Time and Budget with Our CIPD Level 5 Assignment Help UK
        </h3>
        <p class="py-3 text-white px-3 px-lg-4">
          Are you stressed about your CIPD assignments while juggling a hectic routine? Our CIPD Level 5 assignment writing service is designed for professionals and students seeking excellent assistance without the high fees. You will get professional and reasonable support that adheres to Level 5 standards.  
        </p>
        <div class="px-3 px-lg-4 d-flex gap-3">
          <a href="{{route('order')}}" class="text-white mt-4 btn bg-primary">Order Now</a>
          <a href="javascript:void(Tawk_API.toggle())" class="text-white mt-4 btn bg-primary">Live Chat</a>
        </div>
      </div>

      <!-- Right Image -->
      <div class="col-lg-5 d-none d-lg-block">
        <img src="{{asset('images/image-sec-level5.webp')}}" class="img-fluid" width="498" height="332" title="CIPD Level 5 Assignment Help UK" alt="CIPD Level 5 Assignment Help UK" loading="lazy">
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
          Advance Your Career with Our CIPD Level 5 Assignment Online Services
        </h2>
        <div class="py-3 px-3">
          <p class="fs-6 py-2">
          At CIPDAssignmentHelpUK, we offer complete online support, which you can access from the comfort of your own home with just a few clicks. No need to travel and waste precious time in in-person sessions. We are here to help busy professionals who are trying to balance their personal lives, studies, and work at the same time. Our team of Expert CIPD Level 5 Assignment Writers handle everything remotely, whether it is editing, proofreading, formatting, referencing, plagiarism checks, or online consultations. They research thoroughly, ensure proper referencing and structure, and produce well-crafted, reliable Level 5 assignments.
          </p>
          <p class="fs-6 py-2">
          We understand that life is fast-paced and busy these days, and we recognise the value of your precious time. That is why we offer hassle-free CIPD Level 5 assignment online services to suit your schedule. You can approach us anytime through chat to ask questions, clear your doubts, or offer suggestions. Our dedicated team will keep you updated about the progress of your assignment. You can also request multiple revisions until you are happy with our work. We do not charge any extra money for that. Other than that, we not only assist with Level 5 assignments, but you can also reach out to us if you need guidance for <a href="{{ route('cipd-level-3') }}" class="fancy-link">CIPD Level 3</a> and <a href="{{ route('cipd-level-7') }}" class="fancy-link">CIPD Level 7</a>.         
          </p>
        </div>
</div>
      </div>

      <div class="col-lg-6">
        <div class="content">
        <h2 class="fw-bold">
          Why Students Trust Our Expert CIPD Level 5 Assignment Writers Every Time
        </h2>
        <div class="py-3 px-3">
          <p class="fs-6 py-2">
          Looking for someone to write your CIPD tasks? Look no further than CIPD Assignment Help UK. Our writers take time to understand your requirements, professional background, and ambitions. We carefully craft your tasks to align with CIPD standards and accurately reflect your understanding of the topic. Our subject-matter experts are ready to provide CIPD assignment help for Level 5, whether you are struggling with Employee Engagement, Organisational Development, or any other Level 5 topic. Our team includes qualified professionals who studied CIPD themselves and possess in-depth knowledge of all modules. They know how to combine theory with practical HR insights.
          </p>
          <p class="fs-6 py-2">
            Moreover, when you hire us, you get 100% original work, timely deliveries and support for all types of assignments. Each project we collaborate on with you presents an opportunity to refine your thought process and increase your confidence in applying HR expertise in the workplace. Our expert CIPD level 5 Assignment Writers will guide you through challenging issues and ensure your work aligns with CIPD's expectations. Besides, our support is entirely online, allowing you to ask questions, request edits, and receive updates from anywhere. Let our <a href="{{ route('hr-assignment') }}" class="fancy-link">HR Assignment Help</a> manage the stress of projects so you can concentrate on becoming the HR professional you desire to be.
          </p>
        </div>
        </div>
      </div>
    </div>

    <!-- Second Row -->
    <div class="four-border-sec row g-4 mt-4">
      <div class="col-lg-6">
        <div class="content">
        <h2 class="fw-bold">
          Affordable CIPD Level 5 Assignment Writing Help That Suits You
        </h2>
        <div class="py-3 px-3">
          <p class="fs-6 py-2">
            We know that many CIPD students are working individuals or students trying to manage their finances. That's why we offer student-friendly packages with no hidden charges. Although our rates are reasonable, our quality meets the highest standards. Every task is managed by a qualified CIPD Level 5 specialist who understands what examiners are looking for. They can guide you on all topics, no matter how complex they are, and make sure they match the CIPD level 5 requirements. We guarantee your work is plagiarism-free and delivered on schedule. 
          </p>
          <p class="fs-6 py-2">
            Furthermore, you can contact us at any time, as our online platform is available 24/7. We believe everyone should have the opportunity to advance in their career, regardless of their financial situation. Even if you're stuck somewhere in between, we can assist with that particular section too. You don't have to ask for full cipd level 5 assignment help, we will guide you whether it is referencing, structuring or anything else. Besides, we offer feedback and will guide you on what needs to be improved. If you have time constraints or a limited budget, don't miss out on our affordable and efficient services. Let's provide the support you need, which truly helps you learn and grow.
          </p>
        </div>
      </div>
      </div>

      <div class="col-lg-6">
        <div class="content">
        <h2 class="fw-bold">
          Your Trusted Destination for the Best CIPD Level 5 Assignment Help
        </h2>
        <div class="py-3 px-3">
          <p class="fs-6 py-2">
            Stuck on a particular case study or a module? No problem. CIPD AH UK provides exceptional guidance based on your exact needs. We understand that everyone has different needs and study goals, which is why we offer Top CIPD Level 5 Diploma Assignment Support to suit your pace and schedule. Our competent writers take the time to understand your topic, requirements and goals before they start working on your tasks. They will help you understand the subject better and provide support according to your learning style.
          </p>
          <p class="fs-6 py-2">
            In addition, our team is open to communication, so approach us whenever you need to if you have any questions, require feedback or want to clarify any doubts. Our online CIPD Level 5 Assignment Assistance London is designed to help you achieve your objectives without wasting your time or money. We have maintained a pricing structure that considers students' needs while providing quality service without compromising on quality. Our team offers real-time chat, flexible schedules, and customised materials to make learning more fun and simpler. You can even monitor progress or request updates at your convenience. We are here not just to provide an assignment; rather, we are here to increase your knowledge and confidence.
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
            <div class="col-lg-6 col-md-6">
                <div class="position-relative">
                    <div class="bg-secondary rounded-3 samples-bg position-absolute top-0 start-50 translate-middle-x">
                    </div>
                     <div class="bg-white rounded-3 p-4 position-relative" style="z-index: 1;">
                        <p class="text-center fw-semibold mt-3">CIPD Level 5</p>
                        <div class="row mt-3">
                            <div class="col-12">
                                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                                  <span class="small">Title:</span> 
                                  <span class="small">Wellbeing at Work</span>
                                </li>
                            </div>

                            <div class="col-12 mt-2">
                              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                                  <span class="small">Discipline:</span> 
                                  <span class="small">Management</span>
                                </li>
                            </div>

                            <div class="col-12 mt-2">
                              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                                  <span class="small">Academic Level:</span> 
                                  <span class="small">Diploma Level 5</span>
                                </li>
                                </div>

                            <div class="col-12 mt-2">
                              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                                  <span class="small">Pages:</span> 
                                  <span class="small">23</span>
                                </li>
                              </div>
                            <div class="col-12 mt-2">
                              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                                  <span class="small">Format:</span> 
                                  <span class="small">Harvard</span>
                                </li>
                            </div>
                        </div>

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

            <!-- Card 2 -->
            <div class="col-lg-6 col-md-6">
                <div class="position-relative">
                    <div class="bg-secondary rounded-3 samples-bg position-absolute top-0 start-50 translate-middle-x">
                    </div>
                     <div class="bg-white rounded-3 p-4 position-relative" style="z-index: 1;">
                        <p class="text-center fw-semibold mt-3">CIPD Level 5</p>
                        <div class="row mt-3">
                            <div class="col-12">
                                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                                  <span class="small">Title:</span> 
                                  <span class="small">alent Management</span>
                                </li>
                            </div>

                            <div class="col-12 mt-2">
                              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                                  <span class="small">Discipline:</span> 
                                  <span class="small">Management</span>
                                </li>
                            </div>

                            <div class="col-12 mt-2">
                              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                                  <span class="small">Academic Level:</span> 
                                  <span class="small">Diploma Level 3</span>
                                </li>
                                </div>

                            <div class="col-12 mt-2">
                              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                                  <span class="small">Pages:</span> 
                                  <span class="small">20</span>
                                </li>
                              </div>
                            <div class="col-12 mt-2">
                              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                                  <span class="small">Format:</span> 
                                  <span class="small">Harvard</span>
                                </li>
                            </div>
                        </div>

                       <div class="text-center mt-3">
                            <a href="{{asset('samples/CIPD-LEVEL-5(2).docx')}}" target="_blank" class="hero-section-order py-2 fw-bold">
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
            
            <div class="col-12 text-center mt-5 mb-3 mb-lg-0">
              <a href="{{route('samples')}}" class="hero-section-order py-2 fw-bold">
                View All Samples
              </a>
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
                      <p class="text-white">“I was assigned a task and had no idea where to begin. I am happy I discovered this platform, as not only did the writer submit it ahead of my deadline, but he also clarified everything in a way that helped me better understand the concepts.”</p>
                      <h4 class="text-white mt-3">Samantha</h4>
                    </div>
                  </div>
                  <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 5" style="width: 540px; margin-right: 10px;" bis_skin_checked="1">
                    <div class="testimonail_box px-5 py-4" bis_skin_checked="1">
                      <img src="{{asset('images/testimonailicon.webp')}}" alt="testimonial-icon" title="testimonial-icon" class="testiconx">
                      <p class="text-white">“They helped me with my case study, and it turned out even better than I had hoped. The team was quite friendly and made the whole process so smooth and easy. Thanks a lot!”</p>
                      <h4 class="text-white mt-3">Lauren</h4>
                    </div>
                  </div>
                  <div class="swiper-slide" role="group" aria-label="3 / 5" style="width: 540px; margin-right: 10px;" bis_skin_checked="1">
                    <div class="testimonail_box px-5 py-4" bis_skin_checked="1">
                      <img src="{{asset('images/testimonailicon.webp')}}" alt="testimonial-icon" title="testimonial-icon" class="testiconx">
                      <p class="text-white">“I was apprehensive because this was my first encounter with any project assistance. But the writer really nailed it. They also provided me with helpful writing and referencing tips.”</p>
                      <h4 class="text-white mt-3">Jessica</h4>
                    </div>
                  </div>
                  <div class="swiper-slide" role="group" aria-label="4 / 5" style="width: 540px; margin-right: 10px;" bis_skin_checked="1">
                    <div class="testimonail_box px-5 py-4" bis_skin_checked="1">
                      <img src="{{asset('images/testimonailicon.webp')}}" alt="testimonial-icon" title="testimonial-icon" class="testiconx">
                      <p class="text-white">"I think it was a great decision to choose them for my CIPD Level 5 units. It has been a seamless experience, luckily and now I feel less stressed in managing my studies along with work.”</p>
                      <h4 class="text-white mt-3">Ben</h4>
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
      <p class="text-center text-lg fw-semibold text-black mb-3">Go through our FAQ section and get quick answers to the questions you have in mind.</p>
    </div>
    <div class="accordion accordion-flush" id="accordionExample">

      <!-- 1 -->
      <div class="accordion-item mb-4 custom-radius">
        <h4 class="accordion-header" id="headingOne">
          <button class="accordion-button collapsed bg-transparent fs-5 d-flex align-items-center"
            type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
            aria-expanded="false" aria-controls="collapseOne">
            <span class="me-3 d-flex align-items-center justify-content-center rounded-circle text-white fw-bold num-style">1</span>
            <span class="flex-grow-1 text-start">Do you provide complete writing assistance for Level 5 CIPD?</span>
            <span class="ms-3"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h4>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample"
          >
          <div class="accordion-body">
            Yes, we provide complete writing assistance for CIPD Level 5 assignments, from research to final editing and proofreading, ensuring adherence to your instructions and CIPD standards.
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
            <span class="flex-grow-1 text-start">Which Level 5 units do you cover in your assignment help?</span>
            <span class="ms-3"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h4>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample"
          >
          <div class="accordion-body">
            We cover all Level 5 units in our assignment help, including core, specialist, and optional modules. Our writers can handle all topics.
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
            <span class="flex-grow-1 text-start">Can I get help with CIPD Level 5 case study-based tasks?</span>
            <span class="ms-3"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h4>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample"
          >
          <div class="accordion-body">
          Yes, you can get help with CIPD Level 5 case study-based tasks. Our writers will analyse in detail and provide solutions based on the course requirements.
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
            <span class="flex-grow-1 text-start">Are your writers qualified to handle CIPD Level 5 standards?</span>
            <span class="ms-3"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h4>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample"
          >
          <div class="accordion-body">
            Yes, our skilled writers are qualified to handle CIPD Level 5 standards and are familiar with all the requirements of each module, as well as the corresponding assessment criteria.
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
            <span class="flex-grow-1 text-start">Are Harvard-style references included in Level 5 assignments?</span>
            <span class="ms-3"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h4>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample"
          >
          <div class="accordion-body">
            Yes, we follow the accurate Harvard style referencing in your Level 5 assignments. Our writers always make sure the work is done according to the guidelines.
          </div>
        </div>
      </div>

      <div class="accordion-item mb-4 custom-radius">
        <h4 class="accordion-header" id="headingSix">
          <button class="accordion-button collapsed bg-transparent fs-5 d-flex align-items-center"
            type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix"
            aria-expanded="false" aria-controls="collapseSix">
            <span class="me-3 d-flex align-items-center justify-content-center rounded-circle text-white fw-bold num-style">6</span>
            <span class="flex-grow-1 text-start">Can I preview a sample CIPD Level 5 assignment before ordering?</span>
            <span class="ms-3"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h4>
        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample"
          >
          <div class="accordion-body">
            Yes, you can get a CIPD Level 5 assignment sample before ordering so that you can get an idea of the quality of our work.
          </div>
        </div>
      </div>

      <div class="accordion-item mb-4 custom-radius">
        <h4 class="accordion-header" id="headingSeven">
          <button class="accordion-button collapsed bg-transparent fs-5 d-flex align-items-center"
            type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven"
            aria-expanded="false" aria-controls="collapseSeven">
            <span class="me-3 d-flex align-items-center justify-content-center rounded-circle text-white fw-bold num-style">7</span>
            <span class="flex-grow-1 text-start">Can I request help for resubmitting a failed CIPD Level 5 task?</span>
            <span class="ms-3"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h4>
        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample"
          >
          <div class="accordion-body">
            Yes, we assist with resubmissions and failed Level 5 assignments to help improve your chances of passing.
          </div>
        </div>
      </div>

      <div class="accordion-item mb-4 custom-radius">
        <h4 class="accordion-header" id="headingEight">
          <button class="accordion-button collapsed bg-transparent fs-5 d-flex align-items-center"
            type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight"
            aria-expanded="false" aria-controls="collapseEight">
            <span class="me-3 d-flex align-items-center justify-content-center rounded-circle text-white fw-bold num-style">8</span>
            <span class="flex-grow-1 text-start">How fast can you deliver a CIPD Level 5 assignment?</span>
            <span class="ms-3"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h4>
        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample"
          >
          <div class="accordion-body">
          It depends on the length and complexity of your assignment. If you need it early, we also offer quicker turnaround options without compromising the quality of our work.
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
          <h2 class="pb-2 text-3xl fw-bold text-secondary">Too Busy to Write? Let Our CIPD Level 5 Writers Jump in and Get it Done</h2>
          <div class="mt-4">
              <a href="{{route('order')}}" class="hero-section-order py-2 fw-bold" >Place an Order!</a>
          </div>
        </div>
        <div class="col-md-6" bis_skin_checked="1">
           <img src="{{asset('images/cta-sec-img.webp')}}" alt="cta-section" title="cta-section" class="bottomic">
       </div>
      </div>

    </div>
  </div>


  
  @endsection
