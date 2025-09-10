@extends('layouts.web')

@section('title', 'Invoice')
@section('description', '')
@section('canonical', config('app.url') . Request::path())

{{-- @section('hero-section')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between">
            <h4 class="text-white text-3xl italic"> Order Proceed </h4>
        </div>
    </div>
@endsection --}}
@section('content')

      <section class="bg-primary">


        <div class="lg:mx-12 py-5">
            <div class="container mx-auto px-4 pb-4">
                @if (session('userData'))
                    <div class="md:w-1/2 my-4 mx-auto bg-red-100 border-t-4 border-red-500 rounded-b text-teal-900 px-4 py-3 shadow-md"
                        role="alert">
                        <div class="flex">
                            <div>
                                <p class="text-center font-bold">{{ session('userData.userEmail') }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                <p class="text-4xl text-center  text-white font-bold mt-3">
                    Check Order Details Proceed With Payment
                </p>
                <hr class="border border-primary-one bg-pri w-full h-[0.35rem] my-3 mx-auto" style="background:#AE0000;">
            </div>
            <div class="mx-auto">
                <div class=" px-4 space-y-4 ">
                    <div class="border rounded-2xl max-w-sm mx-auto bg-white" style="box-shadow: 1px 2px 12px 3px #3d151e;">
                        <h4 class="py-2 text-xl text-white text-center px-6 text-primary-two bg-secondary rounded-t-2xl font-bold span-header">
                            Order Summary</h4>
                      
                        <ul class="my-2 space-y-1 pt-4">
                             <li class="space-x-3 px-6"><span class="">Name:</span> <strong
                                    class="float-right">
                                    {{ $order->name }} </strong></li>
                            <li class="space-x-3 px-6 "><span class="">Email:</span> <strong
                                class="float-right ">
                                {{ $order->email }} </strong></li>
                            <li class="space-x-3 px-6"><span>Paper Topic:</span> <strong class="float-right">
                                    {{ $order->paper_topic ?? '-' }} </strong></li>
                            <li class="space-x-3 px-6"><span>Level:</span> <strong
                                    class="float-right">{{ $order->academic_level ?? '-' }}</strong></li>
                            <li class="space-x-3 px-6"><span>deadline:</span> <strong
                                    class="float-right">{{ $order->deadline ?? '-' }}</strong></li>
                            <hr class="border-[2px]">
                            <li class="space-x-3 text-xl text-primary-two py-3 px-6"><strong>Total Amount:</strong><strong
                                    class="float-right ">{{ addCurrency($invoice->amount) }}</strong></li>


                        </ul>

                        <hr class="border-[2px]">
                        <div class="w-full text-center px-6 py-4">
                            <a href="{{ url('https://checkout.cheapresumewriter.com/payment?reference=' . $invoice->ref_no . '&gateway=stripe&source=cipd-uk') }}"
                                class="hero-section-order py-2  fw-bold">
                                {{ 'Pay ' . addCurrency($invoice->amount) }}
                            </a>
                        </div>

                        <div class="flex flex-row text-center justify-center space-x-6">
                            <img src="{{ asset('imgs/payments/professional-cv.png') }}" class="h-14 w-14">
                            <img src="{{ asset('imgs/payments/clutch.png') }}" class="h-14 w-14">
                            <img src="{{ asset('imgs/payments/top-rated.png') }}" class="h-14 w-14">
                        </div>

                        <p class="text-lg text-center my-4">We Accept</p>
                        <img src="{{ asset('imgs/payments/transactions.png') }}" 
                             class="d-block mx-auto my-4">


                        <p class="text-lg text-center my-2 px-2">By proceeding to checkout you accept our</p>
                        <div class="text-lg text-center mb-3 fw-bold">
                            <a href="{{ route('terms-and-conditions') }}" class="text-secondary ">
                                Terms & Conditions
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
