@extends('layouts.app')

@section('content')
    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('{{ asset('assets/authentication/malika.jpg') }}')">
        </div>
        <div class="contents order-2 order-md-1">
            <div class="container bg-white">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-8">
                        <div class="mb-5 mx-auto text-center">
                            <img src="{{ asset('assets/images/logo_swis.png') }}" alt="logo Swis" width="200">
                        </div>
                        <form method="POST" action="{{ route('login') }}" autocomplete="off">
                            @csrf
                            <div class="form-group first">
                                <label for="email">Email</label>
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="your-email@gmail.com" id="email" />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group last">
                                <label for="password">Password</label>
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" placeholder="Your Password"
                                    id="password" />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>

                            <div class="d-flex mb-5 align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Ingat Saya
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                    <span class="ml-auto"><a href="{{ route('password.request') }}" class="forgot-pass">Lupa
                                            Password?</a></span>
                                @endif
                            </div>

                            <input type="submit" value="Log In" class="btn btn-block btn-primary" />
                        </form>
                        <div class="d-flex justify-content-center py-3">
                            <span>Sudah punya akun? <a href="{{ route('register') }}">Log In</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
