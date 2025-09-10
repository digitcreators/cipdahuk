@extends('layouts.web')
@section('title', 'CIPD Assignment Help UK Sitemap - Navigate Our Services')
@section('description', 'Navigate CIPD Assignment Help UK with ease. Our sitemap helps you quickly find the services and pages you need for a smooth and efficient user experience.')
@section('canonical', config('app.url') . Request::path())
@section('content')

    <section class="container aa my-10 py-5 px-4">

        <div class="bg-primary dark:bg-primary-one rounded">
            <h1 class="text-2xl text-white font-semibold p-3 sm:text-left">
                Our Company
            </h1>
        </div>

        <div class="row mx-2 my-4">
            <ul class="row my-6 sitemap-ul">
                <li class="col-lg-3">
                    <a href="{{ url('/') }}">
                        Home
                    </a>
                </li>
                <li class="col-lg-3">
                    <a href="{{ route('about-us') }}">
                        About Us
                    </a>
                </li>
                
                <li class="col-lg-3">
                    <a href="{{ route('contact-us') }}">
                        Contact Us
                    </a>
                </li>
                <li class="col-lg-3">
                    <a href="{{ route('reviews') }}">
                        Reviews
                    </a>
                </li>
                <li class="col-lg-3">
                    <a href="{{route('pricing')}}">
                        Pricing
                    </a>
                </li>
                <li class="col-lg-3">
                    <a href="#">
                        Blogs
                    </a>
                </li>
                <li class="col-lg-3">
                    <a href="{{ route('order') }}">
                        Order Now
                    </a>
                </li>
                <li class="col-lg-3">
                    <a href="{{ route('sitemap') }}">
                        Sitemap
                    </a>
                </li>
            </ul>
        </div>

        <div class="bg-primary dark:bg-primary-one rounded">
            <h2 class=" text-2xl text-white font-semibold p-3  sm:text-left">
                Our Legal Policies
            </h2>
        </div>

        <div class="row mx-2 my-4">
            <ul class="row my-6 sitemap-ul">
                <li class="col-lg-3">
                    <a href="#">
                        Privacy Policy
                    </a>
                </li>
                <li class="col-lg-3">
                    <a href="#">
                        Terms & Conditions
                    </a>
                </li>
            </ul>
        </div>

        <div class="bg-primary dark:bg-primary-one rounded">
            <h2 class=" text-2xl text-white font-semibold p-3  sm:text-left">
                Our Services
            </h2>
        </div>
        
           
            <ul class="row my-6 sitemap-ul">
                  <li class="col-lg-3"><a href="{{ route('cipd-level-3')}}" class="nav-link header-styling">CIPD Level 3</a></li>
                  <li class="col-lg-3"><a href="{{ route('cipd-level-5')}}" class="nav-link header-styling">CIPD Level 5 </a></li>
                  <li class="col-lg-3"><a href="{{ route('cipd-level-7')}}" class="nav-link header-styling">CIPD Level 7</a></li>
                  <li class="col-lg-3"><a href="{{ route('hr-assignment')}}" class="nav-link header-styling">HR Assignment Help</a></li>
                </ul>
        
    </section>




@endsection