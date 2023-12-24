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
                            <img src="{{ asset('assets/images/logo_swis.png') }}" alt="logo Swis" width="300">
                        </div>
                        <form method="POST" action="{{ route('password.confirm') }}" autocomplete="off">
                            @csrf
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="form-group first">
                                <label for="password">Password</label>
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" placeholder="*************"
                                    id="email" />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>
                            <div class="d-flex mb-5 justify-content-end align-items-center">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>

                            <input type="submit" value="Konfirmasi" class="btn btn-block btn-primary" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
