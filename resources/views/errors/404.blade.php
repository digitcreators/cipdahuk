@extends('layouts.web')

@section('title', 'Woops! 404 Not Found')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path() )

@section('content')


    <section class="container mx-auto my-4 px-4">

        {{-- <h1 class="text-primary text-4xl my-4"><strong>About</strong></h1> --}}

       <h1 class="text-[#8f0739] text-7xl md:text-9xl text-center text-secondary">
                4 <span class="text-primary ">0</span> 4
            </h1>

        <div class="text-center  space-y-2 text-xl md:text-3xl">
            <div class="text-primary"><strong>Woops</strong></div>
            <div class="text-secondary"><strong>This page got lost in conversation</strong></div>
        </div>
        <div class="text-center mt-5">
            <a class="hero-section-order py-2  fw-bold" href="{{ route('home') }}">
                Back to Home
            </a>
        </div>
    </section>

@endsection
