

@extends('layouts.web')

@section('title', 'Password Reset')
@section('description', '')
@section('canonical', config('app.url') . Request::path())

@section('noindex')
    {{-- This section is used to trigger the noindex meta tag in the layout --}}
@endsection

@section('content')

<style>
    .form-styling {
    border: 2px #3d151e solid;
    padding: 20px 20px 20px 20px;
    border-radius: 5px;
    box-shadow: 2px 4px 9px 3px #be8672 !important;
}
</style>

    <div class="container-fluid py-5 mx-auto lg:px-4 py-6">
        <div class="flex flex-col space-y-4   my-2 md:my-0 lg:flex-row lg:mx-4">
            <div class="panel w-full px-2 lg:w-[40%] xl:w-[35%] mx-auto ">
               <div class="reset-setting my-auto lg:mt-32">
                    @if (session('status'))
                        <div class="bg-green-500 text-white py-2 text-center my-4 font-bold rounded-lg" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <form action="{{ route('password.email') }}" method="POST" class="form-styling border-3 border-color-secondry shadow-md rounded-lg px-4 pt-2 pb-6 flex flex-col md:ml-auto w-full space-y-2 my-auto ">
                    @csrf
                    <div class="bg-secondary py-2 justify-content-center">
                        <p class="text-3xl text-center text-white font-semibold">
                            Send Reset Link
                        </p>
                    </div>
                    <div class="mb-2 mt-3">
                        <input id="email" type="email"
                            class="border border-secondary form-control py-2 @error('email') error-field @enderror" required
                            autocomplete="email" autofocus placeholder="Email" name="email"
                            value="{{ old('email', null) }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red-400">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                   
                    <button type="submit" class="bg-primary btn btn-lg text-white w-full">
                        <i class="fa fa-refresh" ></i>
                        {{ trans('Reset Password') }}
                    </button>

                  
                </form>
               </div>
               
            </div>
        </div>
    </div>
@endsection


