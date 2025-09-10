@extends('layouts.web')
@section('title', 'CIPD Assignment Help Reviews - See Our Clients Feedback')
@section('description', "Check out our clients' reviews to understand why CIPD Assignment Help UK is trusted by Students. See how we have helped students to achieve success.")
@section('canonical', config('app.url') . Request::path())
@section('content')

<style>
/*    .rev-para {*/
/*    height: 157px;*/
/*}*/
/*@media (max-width: 1024px) {*/
/*  .rev-para {*/
/*    height: auto; */
/*  }*/
/*}*/
.main-review .review-tab {
    background-color: var(--color-secondary);
    background-size: cover;
    height: auto;
    padding: 2rem;
    border-top-left-radius: 120px;
}
.review-tab p {
    font-size: 4.8rem;
    font-weight: 700;
    color: var(--color-primary);
    text-shadow: 1px 2px #fff;
    font-family: "Exo 2", sans-serif;
}
.main-review .nav-pills .nav-link.active {
    background-color: var(--color-primary);
    color: #fff;
}
.main-review .nav-pills .nav-link {
    background-color: #fff;
    color: var(--color-primary);
}
.review-box {
    border-top-right-radius: 120px;
    position: relative;
    height: 28rem;
    border: 2px solid #bd8571;
    box-shadow: 3px 3px 7px 0px #bd8571 !important;
}
@media only screen and (min-width: 1024px) and (max-width: 1366px) {
  .review-tab p {
    font-size: 3.5rem;
  }
}

</style>

@php
  $rating = 5; // example rating value
  $maxStars = 5;
@endphp

<div class="main-review pt-lg-5 pb-lg-5 pt-4 pb-4" bis_skin_checked="1">
<div class="container" bis_skin_checked="1">
<div class="row" bis_skin_checked="1">
<div class="col-md-8 col-12 offset-md-2 mb-3" bis_skin_checked="1">
<h1 class="text-3xl text-center fw-semibold">Positive Feedback From Our Clients: A Glimpse of Our Service
    Excellence</h1>
</div>
</div>
<div class="row" bis_skin_checked="1">
<div class="col-md-12 col-12" bis_skin_checked="1">
<div class="row" bis_skin_checked="1">
    <div class="col-lg-4 col-md-12 col-12" bis_skin_checked="1">
        <div class="review-tab" bis_skin_checked="1">
            <p class="m-0">Reviews</p>
            <div class="d-flex align-items-start justify-content-evenly" bis_skin_checked="1">
                <div class="nav flex-row nav-pills me-3 flex-column w-100 gap-3" id="v-pills-tab" role="tablist" aria-orientation="vertical" bis_skin_checked="1">
                    <button class="nav-link fs-3 fw-bold active" id="v-pills-level-3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-level-3" type="button" role="tab" aria-controls="v-pills-level-3" aria-selected="true" tabindex="-1">
                        CIPD Level 3
                    </button>
                    <button class="nav-link fs-3 fw-bold" id="v-pills-level-5-tab" data-bs-toggle="pill" data-bs-target="#v-pills-level-5" type="button" role="tab" aria-controls="v-pills-level-5" aria-selected="false" tabindex="-1">
                        CIPD Level 5
                    </button>
                    <button class="nav-link fs-3 fw-bold" id="v-pills-level-7-tab" data-bs-toggle="pill" data-bs-target="#v-pills-level-7" type="button" role="tab" aria-controls="v-pills-level-7" aria-selected="false" tabindex="-1">
                        CIPD Level 7
                    </button>
                    <button class="nav-link fs-3 fw-bold" id="v-pills-level-9-tab" data-bs-toggle="pill" data-bs-target="#v-pills-level-9" type="button" role="tab" aria-controls="v-pills-level-9" aria-selected="false" tabindex="-1">
                        HR Assignment
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-12 col-12" bis_skin_checked="1">
        <div class="tab-content" id="v-pills-tabContent" bis_skin_checked="1">
             <div class="tab-pane fade active show mt-3 lg:mt-0" id="v-pills-level-3" role="tabpanel" aria-labelledby="v-pills-level-3-tab" tabindex="0" bis_skin_checked="1">
                <div class="swiper reviewSlider3 swiper-initialized swiper-horizontal swiper-backface-hidden" bis_skin_checked="1">
                    <div class="swiper-wrapper" id="swiper-wrapper-e3ae51396110f10175" aria-live="polite" bis_skin_checked="1" style="transition-duration: 0ms; transition-delay: 0ms; transform: translate3d(0px, 0px, 0px);">
                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" role="group" aria-label="1 / 6" bis_skin_checked="1" style="width: 403px; margin-right: 50px;">
                            <div class="review-box shadow m-2 p-3" bis_skin_checked="1">
                                <p class="m-0 fs-1 fw-bold text-secondary lh-sm">CIPD Level 3</p>
                                <div class="d-flex">
                                  {{-- Filled Stars --}}
                                  @for ($i = 0; $i < $rating; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-star-fill text-primary mt-3 me-1" viewBox="0 0 16 16">
                                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 
                                        6.765c-.329-.32-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 
                                        0l2.184 4.327 4.898.696c.441.062.612.63.283.95l-3.522 
                                        3.356.83 4.73c.078.443-.36.79-.746.592L8 
                                        13.187l-4.389 2.256z"/>
                                    </svg>
                                  @endfor
                                </div>
                                <p class="m-0 pt-3 pb-2">“I was stuck on my assignment and had no idea where to start. The writer assisted me in grasping the brief and helped me plan the content and complete the work. I learned a lot in the process and passed without difficulty. Thanks a million!”</p>
                                <div class="review-info" bis_skin_checked="1">
                                    <p class="m-0 text-red fw-bold">Ellie</p>
                                </div>
                                <img src="{{asset('images/quote.png')}}" alt="" class="d-block ms-auto">
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" role="group" aria-label="2 / 6" bis_skin_checked="1" style="width: 403px; margin-right: 50px;">
                            <div class="review-box shadow m-2 p-3" bis_skin_checked="1">
                                <p class="m-0 fs-1 fw-bold text-secondary lh-sm">CIPD Level 3</p>
                                <div class="d-flex">
                                  {{-- Filled Stars --}}
                                  @for ($i = 0; $i < $rating; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-star-fill text-primary mt-3 me-1" viewBox="0 0 16 16">
                                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 
                                        6.765c-.329-.32-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 
                                        0l2.184 4.327 4.898.696c.441.062.612.63.283.95l-3.522 
                                        3.356.83 4.73c.078.443-.36.79-.746.592L8 
                                        13.187l-4.389 2.256z"/>
                                    </svg>
                                  @endfor
                                </div>
                                <p class="m-0 pt-3 pb-2">“I was a CIPD Level 3 student, and my work became quite challenging. I was not getting time to study and work on my assignments. I benefited from their CIPD level 3 Assistance UK and had my tasks completed by them, and they delivered amazing work on time. They communicated in a friendly way and listened to and answered all my queries with patience.”</p>
                                <div class="review-info" bis_skin_checked="1">
                                    <p class="m-0 text-red fw-bold">Freya</p>
                                </div>
                                <img src="{{asset('images/quote.png')}}" alt="" class="d-block ms-auto">
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="3 / 6" bis_skin_checked="1" style="width: 403px; margin-right: 50px;">
                            <div class="review-box shadow m-2 p-3" bis_skin_checked="1">
                                <p class="m-0 fs-1 fw-bold text-secondary lh-sm">CIPD Level 3</p>
                                <div class="d-flex">
                                  {{-- Filled Stars --}}
                                  @for ($i = 0; $i < $rating; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-star-fill text-primary mt-3 me-1" viewBox="0 0 16 16">
                                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 
                                        6.765c-.329-.32-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 
                                        0l2.184 4.327 4.898.696c.441.062.612.63.283.95l-3.522 
                                        3.356.83 4.73c.078.443-.36.79-.746.592L8 
                                        13.187l-4.389 2.256z"/>
                                    </svg>
                                  @endfor
                                </div>
                                <p class="m-0 pt-3 pb-2">“Initially, I was doubtful when I used their services, but they really exceeded my expectations. The writer followed every guideline, organised my work, and assisted me with resolving citation problems. They are just great at what they do.”
                                </p>
                                <div class="review-info" bis_skin_checked="1">
                                    <p class="m-0 text-red fw-bold">Lewis</p>
                                </div>
                                <img src="{{asset('images/quote.png')}}" alt="" class="d-block ms-auto">
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="4 / 6" bis_skin_checked="1" style="width: 403px; margin-right: 50px;">
                            <div class="review-box shadow m-2 p-3" bis_skin_checked="1">
                                <p class="m-0 fs-1 fw-bold text-secondary lh-sm">CIPD Level 3</p>
                                <div class="d-flex">
                                  {{-- Filled Stars --}}
                                  @for ($i = 0; $i < $rating; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-star-fill text-primary mt-3 me-1" viewBox="0 0 16 16">
                                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 
                                        6.765c-.329-.32-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 
                                        0l2.184 4.327 4.898.696c.441.062.612.63.283.95l-3.522 
                                        3.356.83 4.73c.078.443-.36.79-.746.592L8 
                                        13.187l-4.389 2.256z"/>
                                    </svg>
                                  @endfor
                                </div>
                                <p class="m-0 pt-3 pb-2">“I got in touch with them when my assignment deadline was fast approaching. They not only took on the task but delivered it way ahead of schedule. The support team was very helpful and encouraging throughout. I passed with flying colours.”</p>
                                <div class="review-info" bis_skin_checked="1">
                                    <p class="m-0 text-red fw-bold">Nathan</p>
                                </div>
                                <img src="{{asset('images/quote.png')}}" alt="" class="d-block ms-auto">
                            </div>
                        </div>
                        
                    </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                 <div class="swiper-pagination reviews-pagination3"></div>
            </div>
            <div class="tab-pane fade mt-3 lg:mt-0" id="v-pills-level-5" role="tabpanel" aria-labelledby="v-pills-level-5-tab" tabindex="0" bis_skin_checked="1">
                <div class="swiper reviewSlider5 swiper-initialized swiper-horizontal swiper-backface-hidden" bis_skin_checked="1">
                    <div class="swiper-wrapper" id="swiper-wrapper-e3ae51396110f10175" aria-live="polite" bis_skin_checked="1" style="transition-duration: 0ms; transition-delay: 0ms; transform: translate3d(0px, 0px, 0px);">
                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" role="group" aria-label="1 / 6" bis_skin_checked="1" style="width: 403px; margin-right: 50px;">
                            <div class="review-box shadow m-2 p-3" bis_skin_checked="1">
                                <p class="m-0 fs-1 fw-bold text-secondary lh-sm">CIPD Level 5</p>
                                <div class="d-flex">
                                  {{-- Filled Stars --}}
                                  @for ($i = 0; $i < $rating; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-star-fill text-primary mt-3 me-1" viewBox="0 0 16 16">
                                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 
                                        6.765c-.329-.32-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 
                                        0l2.184 4.327 4.898.696c.441.062.612.63.283.95l-3.522 
                                        3.356.83 4.73c.078.443-.36.79-.746.592L8 
                                        13.187l-4.389 2.256z"/>
                                    </svg>
                                  @endfor
                                </div>
                                <p class="m-0 pt-3 pb-2">“I was assigned a task and had no idea where to begin. I am happy I discovered this platform, as not only did the writer submit it ahead of my deadline, but he also clarified everything in a way that helped me better understand the concepts.”</p>
                                <div class="review-info" bis_skin_checked="1">
                                    <p class="m-0 text-red fw-bold">Samantha</p>
                                </div>
                                <img src="{{asset('images/quote.png')}}" alt="" class="d-block ms-auto">
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" role="group" aria-label="2 / 6" bis_skin_checked="1" style="width: 403px; margin-right: 50px;">
                            <div class="review-box shadow m-2 p-3" bis_skin_checked="1">
                                <p class="m-0 fs-1 fw-bold text-secondary lh-sm">CIPD Level 5</p>
                                <div class="d-flex">
                                  {{-- Filled Stars --}}
                                  @for ($i = 0; $i < $rating; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-star-fill text-primary mt-3 me-1" viewBox="0 0 16 16">
                                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 
                                        6.765c-.329-.32-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 
                                        0l2.184 4.327 4.898.696c.441.062.612.63.283.95l-3.522 
                                        3.356.83 4.73c.078.443-.36.79-.746.592L8 
                                        13.187l-4.389 2.256z"/>
                                    </svg>
                                  @endfor
                                </div>
                                <p class="m-0 pt-3 pb-2">“They helped me with my case study, and it turned out even better than I had hoped. The team was quite friendly and made the whole process so smooth and easy. Thanks a lot!”</p>
                                <div class="review-info" bis_skin_checked="1">
                                    <p class="m-0 text-red fw-bold">Lauren</p>
                                </div>
                                <img src="{{asset('images/quote.png')}}" alt="" class="d-block ms-auto">
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="3 / 6" bis_skin_checked="1" style="width: 403px; margin-right: 50px;">
                            <div class="review-box shadow m-2 p-3" bis_skin_checked="1">
                                <p class="m-0 fs-1 fw-bold text-secondary lh-sm">CIPD Level 5</p>
                                <div class="d-flex">
                                  {{-- Filled Stars --}}
                                  @for ($i = 0; $i < $rating; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-star-fill text-primary mt-3 me-1" viewBox="0 0 16 16">
                                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 
                                        6.765c-.329-.32-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 
                                        0l2.184 4.327 4.898.696c.441.062.612.63.283.95l-3.522 
                                        3.356.83 4.73c.078.443-.36.79-.746.592L8 
                                        13.187l-4.389 2.256z"/>
                                    </svg>
                                  @endfor
                                </div>
                                <p class="m-0 pt-3 pb-2">“I was apprehensive because this was my first encounter with any project assistance. But the writer really nailed it. They also provided me with helpful writing and referencing tips.”
                                </p>
                                <div class="review-info" bis_skin_checked="1">
                                    <p class="m-0 text-red fw-bold">Jessica</p>
                                </div>
                                <img src="{{asset('images/quote.png')}}" alt="" class="d-block ms-auto">
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="4 / 6" bis_skin_checked="1" style="width: 403px; margin-right: 50px;">
                            <div class="review-box shadow m-2 p-3" bis_skin_checked="1">
                                <p class="m-0 fs-1 fw-bold text-secondary lh-sm">CIPD Level 5</p>
                                <div class="d-flex">
                                  {{-- Filled Stars --}}
                                  @for ($i = 0; $i < $rating; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-star-fill text-primary mt-3 me-1" viewBox="0 0 16 16">
                                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 
                                        6.765c-.329-.32-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 
                                        0l2.184 4.327 4.898.696c.441.062.612.63.283.95l-3.522 
                                        3.356.83 4.73c.078.443-.36.79-.746.592L8 
                                        13.187l-4.389 2.256z"/>
                                    </svg>
                                  @endfor
                                </div>
                                <p class="m-0 pt-3 pb-2">"I think it was a great decision to choose them for my CIPD Level 5 units. It has been a seamless experience, luckily and now I feel less stressed in managing my studies along with work.”</p>
                                <div class="review-info" bis_skin_checked="1">
                                    <p class="m-0 text-red fw-bold">Ben</p>
                                </div>
                                <img src="{{asset('images/quote.png')}}" alt="" class="d-block ms-auto">
                            </div>
                        </div>
                        
                    </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                 <div class="swiper-pagination reviews-pagination5"></div>
            </div>
            <div class="tab-pane fade mt-3 lg:mt-0" id="v-pills-level-7" role="tabpanel" aria-labelledby="v-pills-level-7-tab" tabindex="0" bis_skin_checked="1">
                <div class="swiper reviewSlider7 swiper-initialized swiper-horizontal swiper-backface-hidden" bis_skin_checked="1">
                    <div class="swiper-wrapper" id="swiper-wrapper-67b56ee5b61b10f104" aria-live="polite" bis_skin_checked="1" style="transition-duration: 0ms; transition-delay: 0ms; transform: translate3d(0px, 0px, 0px);">
                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" role="group" aria-label="1 / 6" bis_skin_checked="1" style="width: 403px; margin-right: 50px;">
                            <div class="review-box shadow m-2 p-3" bis_skin_checked="1">
                                <p class="m-0 fs-1 fw-bold text-secondary lh-sm">CIPD Level 7</p>
                               <div class="d-flex">
                                  {{-- Filled Stars --}}
                                  @for ($i = 0; $i < $rating; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-star-fill text-primary mt-3 me-1" viewBox="0 0 16 16">
                                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 
                                        6.765c-.329-.32-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 
                                        0l2.184 4.327 4.898.696c.441.062.612.63.283.95l-3.522 
                                        3.356.83 4.73c.078.443-.36.79-.746.592L8 
                                        13.187l-4.389 2.256z"/>
                                    </svg>
                                  @endfor
                                </div>
                                <p class="m-0 pt-3 pb-2">“I came across this platform and chose to try it, and I'm really happy I did. The writer knew what I wanted instantly and clearly explained things throughout the process. The project was thoroughly researched and met all the CIPD Level 7 demands. My tutor was impressed and I got the highest marks.”</p>
                                <div class="review-info" bis_skin_checked="1">
                                    <p class="m-0 text-red fw-bold">Olivia</p>
                                </div>
                                <img src="{{asset('images/quote.png')}}" alt="" class="d-block ms-auto">
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" role="group" aria-label="2 / 6" bis_skin_checked="1" style="width: 403px; margin-right: 50px;">
                            <div class="review-box shadow m-2 p-3" bis_skin_checked="1">
                                <p class="m-0 fs-1 fw-bold text-secondary lh-sm">CIPD Level 7</p>
                                <div class="d-flex">
                                  {{-- Filled Stars --}}
                                  @for ($i = 0; $i < $rating; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-star-fill text-primary mt-3 me-1" viewBox="0 0 16 16">
                                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 
                                        6.765c-.329-.32-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 
                                        0l2.184 4.327 4.898.696c.441.062.612.63.283.95l-3.522 
                                        3.356.83 4.73c.078.443-.36.79-.746.592L8 
                                        13.187l-4.389 2.256z"/>
                                    </svg>
                                  @endfor
                                </div>
                                <p class="m-0 pt-3 pb-2">“After struggling with my Level 7 assignments, I finally decided to go for professional help, although I was a little sceptical since it was my first time seeking help. They appointed an expert CIPD Level 7 writer knowledgeable in my specific module. The assignment had excellent content, was well-organised and properly referenced in Harvard style. Great experience!”</p>
                                <div class="review-info" bis_skin_checked="1">
                                    <p class="m-0 text-red fw-bold">William</p>
                                </div>
                                <img src="{{asset('images/quote.png')}}" alt="" class="d-block ms-auto">
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="3 / 6" bis_skin_checked="1" style="width: 403px; margin-right: 50px;">
                            <div class="review-box shadow m-2 p-3" bis_skin_checked="1">
                                <p class="m-0 fs-1 fw-bold text-secondary lh-sm">CIPD Level 7</p>
                                <div class="d-flex">
                                  {{-- Filled Stars --}}
                                  @for ($i = 0; $i < $rating; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-star-fill text-primary mt-3 me-1" viewBox="0 0 16 16">
                                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 
                                        6.765c-.329-.32-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 
                                        0l2.184 4.327 4.898.696c.441.062.612.63.283.95l-3.522 
                                        3.356.83 4.73c.078.443-.36.79-.746.592L8 
                                        13.187l-4.389 2.256z"/>
                                    </svg>
                                  @endfor
                                </div>
                                <p class="m-0 pt-3 pb-2">“What struck me was how professional and supportive the team was. The CIPD Level 7 writer patiently listened to my requirements and understood the assignment brief. They even amended a section when I requested it. The team made sure I was satisfied with the final draft.”</p>
                                <div class="review-info" bis_skin_checked="1">
                                    <p class="m-0 text-red fw-bold">Isabelle</p>
                                </div>
                                <img src="{{asset('images/quote.png')}}" alt="" class="d-block ms-auto">
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="4 / 6" bis_skin_checked="1" style="width: 403px; margin-right: 50px;">
                            <div class="review-box shadow m-2 p-3" bis_skin_checked="1">
                                <p class="m-0 fs-1 fw-bold text-secondary lh-sm">CIPD Level 7</p>
                                <div class="d-flex">
                                  {{-- Filled Stars --}}
                                  @for ($i = 0; $i < $rating; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-star-fill text-primary mt-3 me-1" viewBox="0 0 16 16">
                                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 
                                        6.765c-.329-.32-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 
                                        0l2.184 4.327 4.898.696c.441.062.612.63.283.95l-3.522 
                                        3.356.83 4.73c.078.443-.36.79-.746.592L8 
                                        13.187l-4.389 2.256z"/>
                                    </svg>
                                  @endfor
                                </div>
                                <p class="m-0 pt-3 pb-2">"Having a full-time job, I was not getting time to complete my assignments, and the deadlines were really stressing me out. I found this service really helpful. The writer was familiar with all the CIPD Level 7 guidelines and even arranged everything according to the specifications of my university.”</p>
                                <div class="review-info" bis_skin_checked="1">
                                    <p class="m-0 text-red fw-bold">Clarke</p>
                                </div>
                                <img src="{{asset('images/quote.png')}}" alt="" class="d-block ms-auto">
                            </div>
                        </div>
                    </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                 <div class="swiper-pagination reviews-pagination7"></div>
            </div>
            <div class="tab-pane fade mt-3 lg:mt-0" id="v-pills-level-9" role="tabpanel" aria-labelledby="v-pills-level-9-tab" tabindex="0" bis_skin_checked="1">
                <div class="swiper reviewSlider9 swiper-initialized swiper-horizontal swiper-backface-hidden" bis_skin_checked="1">
                    <div class="swiper-wrapper" id="swiper-wrapper-67b56ee5b61b10f104" aria-live="polite" bis_skin_checked="1" style="transition-duration: 0ms; transition-delay: 0ms; transform: translate3d(0px, 0px, 0px);">
                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" role="group" aria-label="1 / 6" bis_skin_checked="1" style="width: 403px; margin-right: 50px;">
                            <div class="review-box shadow m-2 p-3" bis_skin_checked="1">
                                <p class="m-0 fs-1 fw-bold text-secondary lh-sm">HR Assignment</p>
                               <div class="d-flex">
                                  {{-- Filled Stars --}}
                                  @for ($i = 0; $i < $rating; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-star-fill text-primary mt-3 me-1" viewBox="0 0 16 16">
                                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 
                                        6.765c-.329-.32-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 
                                        0l2.184 4.327 4.898.696c.441.062.612.63.283.95l-3.522 
                                        3.356.83 4.73c.078.443-.36.79-.746.592L8 
                                        13.187l-4.389 2.256z"/>
                                    </svg>
                                  @endfor
                                </div>
                                <p class="m-0 pt-3 pb-2">"I was truly worried about my assignment, but the team took care of everything so flawlessly. The writer followed the rules and guidelines properly. They also made the necessary edits quickly without any fuss. The whole process was just smooth and easy.”</p>
                                <div class="review-info" bis_skin_checked="1">
                                    <p class="m-0 text-red fw-bold">Reuben</p>
                                </div>
                                <img src="{{asset('images/quote.png')}}" alt="" class="d-block ms-auto">
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" role="group" aria-label="2 / 6" bis_skin_checked="1" style="width: 403px; margin-right: 50px;">
                            <div class="review-box shadow m-2 p-3" bis_skin_checked="1">
                                <p class="m-0 fs-1 fw-bold text-secondary lh-sm">HR Assignment</p>
                                <div class="d-flex">
                                  {{-- Filled Stars --}}
                                  @for ($i = 0; $i < $rating; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-star-fill text-primary mt-3 me-1" viewBox="0 0 16 16">
                                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 
                                        6.765c-.329-.32-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 
                                        0l2.184 4.327 4.898.696c.441.062.612.63.283.95l-3.522 
                                        3.356.83 4.73c.078.443-.36.79-.746.592L8 
                                        13.187l-4.389 2.256z"/>
                                    </svg>
                                  @endfor
                                </div>
                                <p class="m-0 pt-3 pb-2">“During my last semester, I had no idea how to approach my HRM task, and it was due in just a few days, which was really stressing me out. I found this service very helpful. They provided content that was structured, well-written and just spot on. It was also delivered right on time.”</p>
                                <div class="review-info" bis_skin_checked="1">
                                    <p class="m-0 text-red fw-bold">Edward</p>
                                </div>
                                <img src="{{asset('images/quote.png')}}" alt="" class="d-block ms-auto">
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="3 / 6" bis_skin_checked="1" style="width: 403px; margin-right: 50px;">
                            <div class="review-box shadow m-2 p-3" bis_skin_checked="1">
                                <p class="m-0 fs-1 fw-bold text-secondary lh-sm">HR Assignment</p>
                                <div class="d-flex">
                                  {{-- Filled Stars --}}
                                  @for ($i = 0; $i < $rating; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-star-fill text-primary mt-3 me-1" viewBox="0 0 16 16">
                                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 
                                        6.765c-.329-.32-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 
                                        0l2.184 4.327 4.898.696c.441.062.612.63.283.95l-3.522 
                                        3.356.83 4.73c.078.443-.36.79-.746.592L8 
                                        13.187l-4.389 2.256z"/>
                                    </svg>
                                  @endfor
                                </div>
                                <p class="m-0 pt-3 pb-2">"They delivered entirely original and correctly cited work. The writer was professional and always kept me updated regarding my project. They understood the topic and met all the requirements. I really appreciate their patience, positive attitude and responsiveness.”</p>
                                <div class="review-info" bis_skin_checked="1">
                                    <p class="m-0 text-red fw-bold">Rebecca</p>
                                </div>
                                <img src="{{asset('images/quote.png')}}" alt="" class="d-block ms-auto">
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="4 / 6" bis_skin_checked="1" style="width: 403px; margin-right: 50px;">
                            <div class="review-box shadow m-2 p-3" bis_skin_checked="1">
                                <p class="m-0 fs-1 fw-bold text-secondary lh-sm">HR Assignment</p>
                                <div class="d-flex">
                                  {{-- Filled Stars --}}
                                  @for ($i = 0; $i < $rating; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-star-fill text-primary mt-3 me-1" viewBox="0 0 16 16">
                                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 
                                        6.765c-.329-.32-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 
                                        0l2.184 4.327 4.898.696c.441.062.612.63.283.95l-3.522 
                                        3.356.83 4.73c.078.443-.36.79-.746.592L8 
                                        13.187l-4.389 2.256z"/>
                                    </svg>
                                  @endfor
                                </div>
                                <p class="m-0 pt-3 pb-2">“I was initially hesitant to order their service, but luckily, everything turned out to be perfect. The writer adopted my university’s particular formatting style and explained everything in a clear manner. Great job!”</p>
                                <div class="review-info" bis_skin_checked="1">
                                    <p class="m-0 text-red fw-bold">Alex</p>
                                </div>
                                <img src="{{asset('images/quote.png')}}" alt="" class="d-block ms-auto">
                            </div>
                        </div>
                    </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                 <div class="swiper-pagination reviews-pagination9"></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>


<script>
new Swiper('.reviewSlider3', {
  loop: true,
  spaceBetween: 20,
  slidesPerView: 2,
  breakpoints: {
    0: { slidesPerView: 1 },    
    768: { slidesPerView: 2 }  
  },
  pagination: {
    el: '.reviews-pagination3',
    clickable: true,
    renderBullet: function (index, className) {
      if (index < 3) {   // limit to 3 bullets
        return '<span class="' + className + '"></span>';
      }
      return '';
    }
  },
});

new Swiper('.reviewSlider5', {
  loop: true,
  spaceBetween: 20,
  slidesPerView: 2,
  breakpoints: {
    0: { slidesPerView: 1 },
    768: { slidesPerView: 2 }
  },
  pagination: {
    el: '.reviews-pagination5',
    clickable: true,
    renderBullet: function (index, className) {
      if (index < 3) {
        return '<span class="' + className + '"></span>';
      }
      return '';
    }
  },
});

new Swiper('.reviewSlider7', {
  loop: true,
  spaceBetween: 20,
  slidesPerView: 2,
  breakpoints: {
    0: { slidesPerView: 1 },
    768: { slidesPerView: 2 }
  },
  pagination: {
    el: '.reviews-pagination7',
    clickable: true,
    renderBullet: function (index, className) {
      if (index < 3) {
        return '<span class="' + className + '"></span>';
      }
      return '';
    }
  },
});

new Swiper('.reviewSlider9', {
  loop: true,
  spaceBetween: 20,
  slidesPerView: 2,
  breakpoints: {
    0: { slidesPerView: 1 },
    768: { slidesPerView: 2 }
  },
  pagination: {
    el: '.reviews-pagination9',
    clickable: true,
    renderBullet: function (index, className) {
      if (index < 3) {
        return '<span class="' + className + '"></span>';
      }
      return '';
    }
  },
});

</script>
@endsection



