@extends('layouts.web')
@section('title', 'CIPD Level 7 Assignment Help by UK Professionals')
@section('description', 'Boost academic success with expert-written solutions. Our CIPD Level 7 Assignment Help ensures timely delivery, originality, and full student support.
')
@section('meta_keywords', 'CIPD Level 7 Assignment Help')
@section('canonical', config('app.url') . Request::path())
@section('price', '8')
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
               Achieve the Best Marks with Our Expert CIPD Level 7 Assignment Help UK
              </h1>
            </div>
          </div>
          <div class="lc-block mb-3">
            <div editable="rich">
              <p class="text-white fw-normal">
                We have been guiding students for over 12 years at CIPDassignmenthelpuk.co.uk. Our Top CIPD Level 7 Assignment Help UK has helped more than 15,000 CIPD students with projects that meet great academic standards. Students rely on us for our clear communication, amiable assistance, and timely delivery.
            </div>
          </div>
          <div class="py-3">
            <a class="hero-section-order py-2  fw-bold" href="{{route('order')}}">
            Hire CIPD Level 7 Writer!
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
        <img src="{{asset('images/about-sec-level7.webp')}}" 
             class="img-fluid" 
             data-aos="fade-down"
             alt="CIPD Level 7 Diploma Assignment Support" title="CIPD Level 7 Diploma Assignment Support">
        
        <!-- Small Overlapping Image -->
        <img src="{{asset('images/about-sec2-level7.webp')}}" 
             class="position-absolute" 
             data-aos="fade-right"
             style="width: 180px; bottom: -20px; right: 136px; border: 5px solid #fff; border-radius: 3rem;" 
             alt="CIPD Level 7 Diploma Assignment Support" title="CIPD Level 7 Diploma Assignment Support">
      </div>

      <!-- Content Right -->
      <div class="col-md-6 lg:mt-0 mt-4" data-aos="fade-left">
        <h2 class="fw-bold mb-3">Succeed in Your Educational Journey with Our <span class="text-primary">Top CIPD Level 7 Diploma Assignment Support</span></h2>
        <p class="text-black my-4">
          Our writers are not only academic specialists, but many have HR experience themselves. They create assignments that reflect critical thinking, real-world HR insights and understanding. They keep your work aligned with today’s HR trends and practices. If you are employed and studying, we will adjust our CIPD Level 7 Assignment services to accommodate your schedule. Our process is simple, professional, and adaptable. Our team will always be by your side and be your mentors at every turn. They possess a profound knowledge and understanding of Level 7 assignments and can provide comprehensive assistance. We follow academic integrity while working on assignments to make your work credible.
        </p>

        <a href="{{route('contact-us')}}" class="hero-section-order py-2 fw-bold">Get Help Now! </a>
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
            <img src="{{asset('images/lucy-1.webp')}}" class="hover-card2 testimonial-image" loading="lazy" alt="lucy" title="lucy" width="201px" height="201px">
          </div>
        </div>
        <div class="col-4 d-flex justify-content-center" bis_skin_checked="1" data-aos="fade-right">
          <div class="p-1 hover-shadow" onclick="currentSlideTwo(2)" bis_skin_checked="1" >
            <img src="{{asset('images/samuel-1.webp')}}" class="hover-card2 testimonial-image" loading="lazy" alt="samuel" title="samuel" width="201px" height="201px">
          </div>
        </div>
      
      </div>
      <div class="row lg:gap-3 gap-16 justify-content-center mt-1" bis_skin_checked="1" >
        <div class="col-4 d-flex justify-content-center" bis_skin_checked="1" data-aos="fade-left">
          <div class="p-1 hover-shadow" onclick="currentSlideTwo(3)" bis_skin_checked="1">
            <img src="{{asset('images/abigail-1.webp')}}" class="hover-card2 testimonial-image" loading="lazy" alt="abigail" title="abigail" width="201px" height="201px">
          </div>
        </div>
      
        <div class="col-4 d-flex justify-content-center" bis_skin_checked="1" data-aos="fade-right">
          <div class="p-1 hover-shadow" onclick="currentSlideTwo(4)" bis_skin_checked="1">
            <img src="{{asset('images/alexander-1.webp')}}" class="hover-card2 testimonial-image" loading="lazy" alt="alexander" title="alexander" width="201px" height="201px">
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-7 order-1" bis_skin_checked="1">
      <div class="mySlidesTwo" style="display: block;" bis_skin_checked="1">
        <div class=" border-0  p-4 " bis_skin_checked="1">
            <h4 class="text-4xl text-center lg:text-left text-white fw-semibold mb-0">Lucy</h4>
            <div class="border-top my-3">
          <p class="text-center lg:text-left mt-3 text-white  mb-3">
          With over 11 years of experience in CIPD academic writing and a background in HRM, Lucy is a well-established writer on our platform. She has completed 10,654 tasks and has earned 9,345 stellar reviews from clients. Students working on difficult Level 7 courses turn to her as a go-to expert because of her ability to transform complicated HR models into simple, practical insights. Lucy keeps wowing students with her strategic approach and dedication.
          </p>
        </div>
      <div class="d-flex flex-column flex-sm-row lg:justify-start justify-content-center align-items-center mt-4 mb-2 gap-3 gap-sm-4 gap-lg-5 w-100" bis_skin_checked="1">
        <div class="d-flex align-items-center gap-3" bis_skin_checked="1">
            <img src="{{asset('images/degree.png')}}" alt="degree" title="degree" loading="lazy" width="64" height="64">
          <div class="d-flex flex-column align-items-start" bis_skin_checked="1">
            <p class="fw-bold mb-0 text-lg italic text-white">Degree</p>
            <p class="mb-0 text-white italic text-nowrap">HRM</p>
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
          <div class="text-center" bis_skin_checked="1">
            <h4 class="text-4xl text-center lg:text-left text-white fw-semibold mb-0">Samuel</h4>
          </div>
          <div class="border-top my-3">
          <p class="text-center lg:text-left mt-3 text-white  mb-3">
            Samuel is a CIPD-qualified writer with a Level 7 Diploma in HRD. He has been working on our platform for over 8 years and has successfully completed 7,450 projects. He has received 6,678 positive reviews from students who keep coming back to him. His dedication to work and knowledge of CIPD standards have helped him to impress his clients.
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
                <p class="mb-0 text-white italic text-nowrap">7,400+</p>
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
            <h4 class="text-4xl text-center lg:text-left text-white fw-semibold mb-0">Abigail</h4>
          </div>
          <div class="border-top my-3">
          <p class="text-center lg:text-left mt-3 text-white  mb-3">
            Having 10 years of writing experience, Abigail has produced 9,200 CIPD assignments. She is particularly good at performance management and employment law topics and always makes sure she matches CIPD Level 7 learning objectives. Students in the UK, as well as beyond, praise her for her friendly approach and prompt delivery in the 8,456 positive reviews they have given her.
          </p>
          </div>
        
      <div class="d-flex flex-column flex-sm-row lg:justify-start justify-content-center align-items-center mt-4 mb-2 gap-3 gap-sm-4 gap-lg-5 w-100" bis_skin_checked="1">
        <div class="d-flex align-items-center gap-3" bis_skin_checked="1">
            <img src="{{asset('images/degree.png')}}" alt="degree" title="degree" loading="lazy" width="64" height="64">
          <div class="d-flex flex-column align-items-start" bis_skin_checked="1">
            <p class="fw-bold mb-0 text-lg italic text-white">Degree</p>
            <p class="mb-0 text-white italic text-nowrap">MBA in Finance</p>
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

    <div class="mySlidesTwo" style="display: none;" bis_skin_checked="1">
        <div class=" border-0  p-4 " bis_skin_checked="1">
          <div class="text-center" bis_skin_checked="1">
            <h4 class="text-4xl text-center lg:text-left text-white fw-semibold mb-0">Alexander</h4>
          </div>
          <div class="border-top my-3">
          <p class="text-center lg:text-left mt-3 text-white  mb-3">
            Alexander has more than 7 years of writing expertise and has worked on 6,500 CIPD Level 7 assignments. He holds a Level 7 certification in Strategic People Management and is well-known for his meticulousness and approachable style of communication, which has garnered more than 5,600 favourable reviews from students who depend on his work.
          </p>
          </div>
        
      <div class="d-flex flex-column flex-sm-row lg:justify-start justify-content-center align-items-center mt-4 mb-2 gap-3 gap-sm-4 gap-lg-5 w-100" bis_skin_checked="1">
        <div class="d-flex align-items-center gap-3" bis_skin_checked="1">
            <img src="{{asset('images/degree.png')}}" alt="degree" title="degree" loading="lazy" width="64" height="64">
          <div class="d-flex flex-column align-items-start" bis_skin_checked="1">
            <p class="fw-bold mb-0 text-lg italic text-white">Degree</p>
            <p class="mb-0 text-white italic text-nowrap">Certification in SPM</p>
          </div>
        </div>
        <div class="d-flex align-items-center gap-3" bis_skin_checked="1">
            <img src="{{asset('images/projects.png')}}" alt="projects" title="projects" loading="lazy" width="64" height="64">
          <div class="d-flex flex-column align-items-start" bis_skin_checked="1">
            <p class="fw-bold mb-0 text-lg italic text-white">Projects Completed</p>
            <p class="mb-0 text-white italic text-nowrap">6,500+</p>
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
          Achieve Excellence with Our Affordable CIPD Level 7 Assignment Help
        </h3>
        <p class="py-3 text-white px-3 px-lg-4">
          Our team of expert writers, who are HR professionals themselves, offer well-researched, thoroughly cited assignments that fulfil CIPD's higher requirements. We offer affordable and adaptable CIPD Level 7 Assignment support, meeting deadlines and accommodating changes as required. 
        </p>
        <div class="px-3 px-lg-4 d-flex gap-3">
          <a href="{{route('order')}}" class="text-white mt-4 btn bg-primary">Order Now</a>
          <a href="javascript:void(Tawk_API.toggle())" class="text-white mt-4 btn bg-primary">Live Chat</a>
        </div>
      </div>

      <!-- Right Image -->
      <div class="col-lg-5 d-none d-lg-block">
        <img src="{{asset('images/image-sec-level7.webp')}}" class="img-fluid" width="498" height="332" title="Affordable CIPD Level 7 Assignment Help" alt="Affordable CIPD Level 7 Assignment Help" loading="lazy">
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
          Get Expert Level Support from Our Top CIPD Level 7 Assignment Writers in UK
        </h2>
        <div class="py-3 px-3">
          <p class="fs-6 py-2">
            At CIPD Assignment Help UK, you will find experienced CIPD Level 7 writers who are well-versed in the complexities of Level 7 assignments. Thousands of students like you have been assisted by them in confidently dealing with challenging subjects. Need help organising your assignment? Having difficulty citing? No need to stress about it. We will help you with every aspect of your assignment. Our CIPD Level 7 assignment writers in the UK take care of every detail. We offer individualised assistance that fits your needs and study goals. We have got your back, whether you need help with editing, proofreading, formatting, plagiarism checks, referencing, or other tasks.
          </p>
          <p class="fs-6 py-2">
          Additionally, our procedure is confidential and straightforward. Your assignment details and personal information are fully secure with us. We do not share any information with third parties, so you can trust us. Before your deadline, you will receive a well-crafted paper that aligns with CIPD learning objectives and adheres to Harvard referencing style. Many UK-based hardworking professionals depend on us to help them meet their goals. Apart from that, we also assist with <a href="{{ route('cipd-level-3') }}" class="fancy-link">CIPD Level 3</a> and <a href="{{ route('cipd-level-5') }}" class="fancy-link">CIPD Level 5</a> tasks. We are here to lead you on the path to success. Let's support your professional development and help you achieve your career goals.
       </p>
        </div>
</div>
      </div>

      <div class="col-lg-6">
        <div class="content">
        <h2 class="fw-bold">
          Stay on Track with Our Online CIPD Assignment Help for Level 7
        </h2>
        <div class="py-3 px-3">
          <p class="fs-6 py-2">
            We're available to support you whether you're having trouble with research, writing, or need help understanding how to meet the evaluation standards. Our platform is entirely virtual, so you can get assistance at any time of the day. You will be matched with a writer who is experienced in Level 7 expertise and up-to-date with CIPD standards. Our capable CIPD Level 7 Assignment Writers in London focus on original work that meets CIPD's assessment criteria. We also provide free revisions, draft reviews, and online consultations to ensure that your work is precisely correct and done according ot your expectations. You don't need to worry about referencing, as your work will be properly referenced. Harvard-style referencing will be included in your assignments.
          </p>
          <p class="fs-6 py-2">
            Plus, our prices are fair and there are no surprises or hidden costs. Thousands of UK students who want to advance in HR or L&D have received our help in completing their projects and have always been satisfied with our CIPD Level 7 Assignment Help. With the correct mentorship, you will not only get your assignments done but also develop an understanding of the topics, which will benefit your future tasks as well. Let us provide the support you require. Order today and experience the relief of stress-free CIPD Level 7 assistance.
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
          Cost-Effective CIPD Level 7 Assignment Help That Fits Your Life and Budget
        </h2>
        <div class="py-3 px-3">
          <p class="fs-6 py-2">
            If you are studying CIPD Level 7 and searching for someone to help you with your assignments, there is one thing that you are concerned about - the cost. We understand that many students face the stress of trying to manage small budgets while pursuing their academic aspirations. That's why we have developed a low-cost CIPD level 7 Assignment Help Service UK offering expert-level support, without emptying your wallet. Besides, we do everything online, which ultimately saves time and money.
          </p>
          <p class="fs-6 py-2">
          At CIPD AH UK, our reasonably priced CIPD Level 7 assignment assistance is customised for learners who need direction but also wish to limit their costs. We reject the idea that excellent academic assistance should have a high price attached. You find smart CIPD assignment solutions with us at economical prices. Moreover, we will assist you every step of the way. A writer knowledgeable of CIPD Level 7 standards will be assigned to you, enabling you to manage difficult projects more effectively and strategically. We have the ideal person for your topic. Additionally, we offer free revisions, which you can use as many times as you need. We will also provide <a href="{{ route('hr-assignment') }}" class="fancy-link">HR Assignment Help</a> with an originality report along with your work for your peace of mind. 
          </p>
        </div>
      </div>
      </div>

      <div class="col-lg-6">
        <div class="content">
        <h2 class="fw-bold">
          Boost Your Career with Custom CIPD Level 7 Assignment Helpers in UK
        </h2>
        <div class="py-3 px-3">
          <p class="fs-6 py-2">
            Every student comes from a unique background, holds different aspirations, and has a different comprehension level. That's why we provide totally customised assistance that fits exactly the needs of different learners. We connect you with CIPD Level 7 assignment writers in the UK who are subject matter experts and have a firm grasp of CIPD's guidelines, no matter what your subject is. Moreover, you will be informed at every step so that you know how we go about your work. We welcome feedback, discussions, and questions, so don't hesitate to approach us if you have any inquiries. Our friendly team is available round the clock through chat, and they always respond quickly.
          </p>
          <p class="fs-6 py-2">
            Furthermore, our expert CIPD Level 7 assignment writers not only complete the tasks but also shape your assignments in a way that makes them appear as if you wrote them yourself. They write according to your ideas and understanding of the subject. They create content after deep research and do not use templates or AI tools, which means your work is 100% authentic and original. You have found the perfect place if you have been seeking absolutely customised CIPD Level 7 assignment help. Let's collaborate to produce something that satisfies the requirements.
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
                        <p class="text-center fw-semibold mt-3">CIPD Level 7</p>
                        <div class="row mt-3">
                            <div class="col-12">
                                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                                  <span class="small">Title:</span> 
                                  <span class="small">Talent Management</span>
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
                                  <span class="small">Diploma Level 7</span>
                                </li>
                                </div>

                            <div class="col-12 mt-2">
                              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                                  <span class="small">Pages:</span> 
                                  <span class="small">22</span>
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

            <!-- Card 2 -->
            <div class="col-lg-6 col-md-6">
                <div class="position-relative">
                    <div class="bg-secondary rounded-3 samples-bg position-absolute top-0 start-50 translate-middle-x">
                    </div>
                     <div class="bg-white rounded-3 p-4 position-relative" style="z-index: 1;">
                        <p class="text-center fw-semibold mt-3">CIPD Level 7</p>
                        <div class="row mt-3">
                            <div class="col-12">
                                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                                  <span class="small">Title:</span> 
                                  <span class="small">Learning and Development</span>
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
                                  <span class="small">Diploma Level 7</span>
                                </li>
                                </div>

                            <div class="col-12 mt-2">
                              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                                  <span class="small">Pages:</span> 
                                  <span class="small">24</span>
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
                            <a href="{{asset('samples/CIPD-LEVEL-7(2).docx')}}" target="_blank" class="hero-section-order py-2 fw-bold">
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
                      <p class="text-white">“I came across this platform and chose to try it, and I'm really happy I did. The writer knew what I wanted instantly and clearly explained things throughout the process. The project was thoroughly researched and met all the CIPD Level 7 demands. My tutor was impressed and I got the highest marks.”</p>
                      <h4 class="text-white mt-3">Olivia</h4>
                    </div>
                  </div>
                  <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 5" style="width: 540px; margin-right: 10px;" bis_skin_checked="1">
                    <div class="testimonail_box px-5 py-4" bis_skin_checked="1">
                      <img src="{{asset('images/testimonailicon.webp')}}" alt="testimonial-icon" title="testimonial-icon" class="testiconx">
                      <p class="text-white">“After struggling with my Level 7 assignments, I finally decided to go for professional help, although I was a little sceptical since it was my first time seeking help. They appointed an expert CIPD Level 7 writer knowledgeable in my specific module. The assignment had excellent content, was well-organised and properly referenced in Harvard style. Great experience!”</p>
                      <h4 class="text-white mt-3">William</h4>
                    </div>
                  </div>
                  <div class="swiper-slide" role="group" aria-label="3 / 5" style="width: 540px; margin-right: 10px;" bis_skin_checked="1">
                    <div class="testimonail_box px-5 py-4" bis_skin_checked="1">
                      <img src="{{asset('images/testimonailicon.webp')}}" alt="testimonial-icon" title="testimonial-icon" class="testiconx">
                      <p class="text-white">“What struck me was how professional and supportive the team was. The CIPD Level 7 writer patiently listened to my requirements and understood the assignment brief. They even amended a section when I requested it. The team made sure I was satisfied with the final draft.”</p>
                      <h4 class="text-white mt-3">Isabelle</h4>
                    </div>
                  </div>
                  <div class="swiper-slide" role="group" aria-label="4 / 5" style="width: 540px; margin-right: 10px;" bis_skin_checked="1">
                    <div class="testimonail_box px-5 py-4" bis_skin_checked="1">
                      <img src="{{asset('images/testimonailicon.webp')}}" alt="testimonial-icon" title="testimonial-icon" class="testiconx">
                      <p class="text-white">"Having a full-time job, I was not getting time to complete my assignments, and the deadlines were really stressing me out. I found this service really helpful. The writer was familiar with all the CIPD Level 7 guidelines and even arranged everything according to the specifications of my university.”</p>
                      <h4 class="text-white mt-3">Clarke</h4>
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
            <span class="flex-grow-1 text-start">Do you offer full writing support for CIPD Level 7 assignments?</span>
            <span class="ms-3"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h4>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample"
          >
          <div class="accordion-body">
            Yes, we offer comprehensive writing support for CIPD Level 7 assignments, including case studies, reports, and essays. Every task is completed following the CIPD guidelines.
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
            <span class="flex-grow-1 text-start">Which CIPD Level 7 units do you assist with?</span>
            <span class="ms-3"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h4>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample"
          >
          <div class="accordion-body">
            We assist with all CIPD Level 7 units, including Leadership and Management Development, Ethics and Business Acumen, Organisation Design and Development and more.
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
            <span class="flex-grow-1 text-start">Are your writers CIPD-qualified and experienced at Level 7?</span>
            <span class="ms-3"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h4>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample"
          >
          <div class="accordion-body">
            Our writers are well-versed in HR and L&D topics, and most of them have studied Level 7 themselves, so they are familiar with all the CIPD standards and assessment criteria.
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
            <span class="flex-grow-1 text-start">Is Harvard referencing included in your CIPD Level 7 assignments?</span>
            <span class="ms-3"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h4>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample"
          >
          <div class="accordion-body">
            Yes, we follow the accurate Harvard style referencing in your Level 7 assignments. Our writers always make sure the work is done according to the guidelines.
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
            <span class="flex-grow-1 text-start">AHow do you ensure high academic standards in CIPD Level 7 assignments?</span>
            <span class="ms-3"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h4>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample"
          >
          <div class="accordion-body">
              Assigning CIPD-qualified writers proficient in Level 7 standards enables us to uphold our academic standards. Every project undergoes rigorous quality checks, including plagiarism checks, formatting, and making sure it complies with the grading criteria.
          </div>
        </div>
      </div>

      <div class="accordion-item mb-4 custom-radius">
        <h4 class="accordion-header" id="headingSix">
          <button class="accordion-button collapsed bg-transparent fs-5 d-flex align-items-center"
            type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix"
            aria-expanded="false" aria-controls="collapseSix">
            <span class="me-3 d-flex align-items-center justify-content-center rounded-circle text-white fw-bold num-style">6</span>
            <span class="flex-grow-1 text-start">How long does it take to complete a CIPD Level 7 assignment?</span>
            <span class="ms-3"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h4>
        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample"
          >
          <div class="accordion-body">
            It usually takes 3 to 7 days, depending on the length and complexity of your assignment. If you require it urgently, we can accommodate your order promptly.
          </div>
        </div>
      </div>

      <div class="accordion-item mb-4 custom-radius">
        <h4 class="accordion-header" id="headingSeven">
          <button class="accordion-button collapsed bg-transparent fs-5 d-flex align-items-center"
            type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven"
            aria-expanded="false" aria-controls="collapseSeven">
            <span class="me-3 d-flex align-items-center justify-content-center rounded-circle text-white fw-bold num-style">7</span>
            <span class="flex-grow-1 text-start">Can I request urgent assistance for tight CIPD Level 7 deadlines?</span>
            <span class="ms-3"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h4>
        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample"
          >
          <div class="accordion-body">
            Yes, you can request urgent assistance for tight deadlines. We offer quicker turnaround options without compromising the quality of our work.
          </div>
        </div>
      </div>

      <div class="accordion-item mb-4 custom-radius">
        <h4 class="accordion-header" id="headingEight">
          <button class="accordion-button collapsed bg-transparent fs-5 d-flex align-items-center"
            type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight"
            aria-expanded="false" aria-controls="collapseEight">
            <span class="me-3 d-flex align-items-center justify-content-center rounded-circle text-white fw-bold num-style">8</span>
            <span class="flex-grow-1 text-start">Will your work align with CIPD Level 7 assessment criteria?</span>
            <span class="ms-3"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h4>
        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample"
          >
          <div class="accordion-body">
            Yes, all our work is painstakingly customised to meet the CIPD Level 7 assessment criteria. Our writers ensure your project precisely meets the expectations of the examiners.
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
          <h2 class="pb-2 text-3xl fw-bold text-secondary">Breathe Easy with Our CIPD Level 7 Assignment Help UK by Your Side</h2>
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
