@extends('layouts.app')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    <div class="container-fluid mt-5 auth-container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                @error('login_err')
                    @include('components.alert-error')
                @enderror
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h4 class="card-title my-4 text-center">Sign into Your Account</h4>
                        <form novalidate class="row g-3" method="post" action="{{ route('login') }}">
                            @csrf
                            <div class="col-12">
                                <div class="input-group has-validation">
                                    <span class="input-group-text"> <i class="fa-solid fa-envelope"></i> </span>
                                    <input type="email" placeholder="Email address" name="email" value="{{ old('email') }}"
                                        class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group has-validation">
                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                    <input type="password" placeholder="Password" name="password"
                                        class="form-control @error('password') is-invalid @enderror">
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Log in</button>
                            </div>

                            <!-- OR Divider -->
                            <div class="col-12">
                                <div class="position-relative my-2">
                                    <hr class="border-top">
                                    <div class="position-absolute top-50 start-50 translate-middle bg-white px-2">
                                        <span class="text-muted small">{{ __('OR') }}</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Google Sign-in Button -->
                            <div class="col-12">
                                <a href="{{ route("redirect.google") }}"
                                    class="btn btn-outline-secondary w-100 d-flex align-items-center justify-content-center">
                                    <!-- Google Icon -->
                                    <svg class="me-2" width="20" height="20" viewBox="0 0 24 24">
                                        <path fill="#4285F4"
                                            d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                                        <path fill="#34A853"
                                            d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                                        <path fill="#FBBC05"
                                            d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" />
                                        <path fill="#EA4335"
                                            d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" />
                                    </svg>
                                    {{ __('Sign in with Google') }}
                                </a>
                            </div>

                            <div class="col-12">
                                <p class="text-center mb-0">Don't have an account? <a href="{{ route('register') }}">Sign up
                                        now</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection