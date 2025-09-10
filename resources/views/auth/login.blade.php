@extends('layouts.web')

@section('title', 'Login')
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
    
    <div class="container-fluid mx-auto lg:px-4 py-6 pt-5 px-md-5">
        
        <div class="flex flex-col space-y-4 my-2 md:my-0 lg:flex-row lg:mx-4">
            <div class="panel w-full px-2 lg:w-[40%] xl:w-[35%] mx-auto ">
                <form action="{{ route('login') }}" method="POST"
                    class="form-styling border-3  shadow-md rounded-lg pt-2 pb-6 flex flex-col md:ml-auto w-full space-y-2">
                    @csrf
                    <div class="bg-secondary py-2 justify-content-center">
                        
                        <p class="text-3xl text-center text-white font-semibold">
                            Login
                        </p>
                    </div>
                    @if (session('success'))
                        <div class="mt-3 bg-green-200 border-t-4 border-green-600 rounded text-teal-900 text-sm shadow-md"
                            role="alert">
                            <div class="py-2">
                                <p class="text-center font-bold">{{ session('success') }}</p>
                            </div>
                        </div>
                    @elseif (session('error'))
                        <div class="mt-3 bg-white border-t-4 border-red-500 rounded  shadow-md" role="alert">
                            <div class="py-2">
                                <p class="text-center text-red-500  font-bold">{{ session('error') }}</p>
                            </div>
                        </div>
                    @endif
                    <div class="mb-3 pt-3">
                        <input id="email" type="email" class="border border-secondary form-control py-2 @error('email') error-field @enderror"
                            required autocomplete="email" autofocus placeholder="Email"
                            name="email" value="{{ old('email', null) }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red-400">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="pb-2">
                        <input id="password" type="password" class="border border-secondary form-control py-2  @error('password') error-field @enderror"
                            required autocomplete="password" autofocus placeholder="Password"
                            name="password" value="{{ old('password', null) }}">
                        @error('password')
                            <div class="invalid-feedback">Please enter your password!</div>
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-6 col-md-6 pb-1">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember" class="text-secondary">Remember Me</label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 pb-1">
                            @if (Route::has('password.request'))
                            <div class="text-right">
                                <a class="mt-1 font-bold text-secondary float-right" href="{{ route('password.request') }}">
                                    {{ trans('Forgot Password?') }}
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                    <button type="submit" class="bg-primary btn btn-lg text-white w-full">
                        <i class="fa fa-sign-in me-2" ></i>
                        Login
                    </button>

                    <p class="fw-normal text-center">
                        <span class="px-2 text-secondary">or continue with</span>
                    </p>

                    <div class="text-center flex w-full space-x-1 mx-auto justify-center py-3 rounded">
                        <a href="{{ route('register') }}"
                            class="hero-section-order fw-bold py-3 flex justify-center items-center space-x-2">
                            <i class="fa fa-user" ></i>
                            <span>
                                Register
                            </span>
                        </a>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
@endsection
