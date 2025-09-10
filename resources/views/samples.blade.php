@extends('layouts.web')
@section('title', 'CIPD Samples by Experts | CIPD Assignment Help UK')
@section('description', 'Explore high-quality CIPD Assignment samples crafted by our UK experts. Check structure, style, and academic accuracy before placing your order.')
@section('canonical', config('app.url') . Request::path())
@section('content')

<style>
    .samples-bg {
    width: 16rem !important;
    height: 26rem !important;
    transform: rotate(12deg) !important;
    z-index: 1;
    left: 2rem !important;
}
.g-4, .gy-4 {
    --bs-gutter-y: 2.5rem !important;
}
@media (min-width: 768px) and (max-width: 1024px) {
  .custom-col {
    flex: 0 0 50% !important;
    max-width: 50% !important; /* col-6 */
  }
}

</style>
<section class="bg-primary py-5">
    <div class="container-fluid px-8">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class=" text-white fw-semibold">
                    Samples
                </h1>
            </div>
        </div>

        <!-- Row of Cards -->
        <div class="row g-4 my-3">
            <!-- Card 1 -->
            <div class="col-lg-3 col-md-6 custom-col">
                <div class="position-relative">
                    <div class="bg-secondary rounded-3 samples-bg position-absolute top-0 start-50 translate-middle-x">
                    </div>
                     <div class="bg-white rounded-3 p-4 position-relative" style="z-index: 1;">
                        <p class="text-center fw-semibold mt-3">CIPD Level 3</p>
                        <div class="row mt-3">
                            <div class="col-12">
                                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                                  <span class="small">Title:</span> 
                                  <span class="small">Essentials of People Practice</span>
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
                                  <span class="small">53</span>
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

            <div class="col-lg-3 col-md-6 custom-col">
                <div class="position-relative">
                    <div class="bg-secondary rounded-3 samples-bg position-absolute top-0 start-50 translate-middle-x">
                    </div>
                     <div class="bg-white rounded-3 p-4 position-relative" style="z-index: 1;">
                        <p class="text-center fw-semibold mt-3">CIPD Level 3</p>
                        <div class="row mt-3">
                            <div class="col-12">
                                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                                  <span class="small">Title:</span> 
                                  <span class="small">Essentials of People Practice</span>
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
                                  <span class="small">46</span>
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
                            <a href="{{asset('samples/CIPD-LEVEL-3(2).docx')}}" target="_blank" class="hero-section-order py-2 fw-bold">
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
            
            <div class="col-lg-3 col-md-6 custom-col">
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

            <div class="col-lg-3 col-md-6 custom-col">
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
            
            <div class="col-lg-3 col-md-6 custom-col">
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

            <div class="col-lg-3 col-md-6 custom-col">
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
            
            <div class="col-lg-3 col-md-6 custom-col">
                <div class="position-relative">
                    <div class="bg-secondary rounded-3 samples-bg position-absolute top-0 start-50 translate-middle-x">
                    </div>
                     <div class="bg-white rounded-3 p-4 position-relative" style="z-index: 1;">
                        <p class="text-center fw-semibold mt-3">HR Assignment</p>
                        <div class="row mt-3">
                            <div class="col-12">
                                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                                  <span class="small">Title:</span> 
                                  <span class="small">Remote HRM Adaptation Strategies</span>
                                </li>
                            </div>

                            <div class="col-12 mt-2">
                              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                                  <span class="small">Discipline:</span> 
                                  <span class="small">Human Resource Management</span>
                                </li>
                            </div>

                            <div class="col-12 mt-2">
                              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                                  <span class="small">Academic Level:</span> 
                                  <span class="small">Bachelors</span>
                                </li>
                                </div>

                            <div class="col-12 mt-2">
                              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                                  <span class="small">Pages:</span> 
                                  <span class="small">18</span>
                                </li>
                              </div>
                            <div class="col-12 mt-2">
                              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                                  <span class="small">Format:</span> 
                                  <span class="small">APA 7th Edition</span>
                                </li>
                            </div>
                        </div>

                       <div class="text-center mt-3">
                            <a href="{{asset('samples/HR-Assignment.docx')}}" target="_blank" class="hero-section-order py-2 fw-bold">
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

            <div class="col-lg-3 col-md-6 custom-col">
                <div class="position-relative">
                    <div class="bg-secondary rounded-3 samples-bg position-absolute top-0 start-50 translate-middle-x">
                    </div>
                     <div class="bg-white rounded-3 p-4 position-relative" style="z-index: 1;">
                        <p class="text-center fw-semibold mt-3">HR Assignment</p>
                        <div class="row mt-3">
                            <div class="col-12">
                                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                                  <span class="small">Title:</span> 
                                  <span class="small">HRM and Organisational Growth</span>
                                </li>
                            </div>

                            <div class="col-12 mt-2">
                              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                                  <span class="small">Discipline:</span> 
                                  <span class="small">Human Resource Management</span>
                                </li>
                            </div>

                            <div class="col-12 mt-2">
                              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                                  <span class="small">Academic Level:</span> 
                                  <span class="small">Higher National Diploma</span>
                                </li>
                                </div>

                            <div class="col-12 mt-2">
                              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                                  <span class="small">Pages:</span> 
                                  <span class="small">39</span>
                                </li>
                              </div>
                            <div class="col-12 mt-2">
                              <li class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
                                  <span class="small">Format:</span> 
                                  <span class="small">APA 7th Edition</span>
                                </li>
                            </div>
                        </div>

                       <div class="text-center mt-3">
                            <a href="{{asset('samples/HR-Assignment(2).docx')}}" target="_blank" class="hero-section-order py-2 fw-bold">
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
            
        </div>
            
        </div>

        </div>
    </div>
</section>

@endsection