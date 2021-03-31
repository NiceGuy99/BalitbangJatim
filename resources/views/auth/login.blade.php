@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">

                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h2 text-white mb-4 border rounded " style="background-color: #4E73DF;">
                                    Halaman Back-End!</h1>
                            </div>
                            <form class="user" method="POST" action="{{ route('login') }}">
                                @csrf
                                <!-- EMAIL -->
                                <div class="form-group">
                                    <a class="h5 text-gray-900 mb-5 ">Masukkan E-Mail : </a>
                                    <p></p>
                                    <input type="email"
                                        class="form-control form-control-user @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{ old('email') }}" required
                                        autocomplete="email" autofocus placeholder="Your Email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- PASSWORD -->
                                <div class="form-group">
                                    <a class="h5 text-gray-900 mb-5">Masukkan Password : </a>
                                    <p></p>
                                    <input type="password"
                                        class="form-control form-control-user @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="current-password" id="password"
                                        placeholder="Your Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- REMEMBER -->
                                <div class="form-group">
                                    <div class=" custom-checkbox">
                                        <div class="form-check">
                                            <input class="custom-control-input" type="checkbox" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="custom-control-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- BUTTON LOGIN -->
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
        </div>
    </div>
</div>
@endsection
