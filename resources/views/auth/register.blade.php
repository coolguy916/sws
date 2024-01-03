@extends('layouts.app')

@section('content')
    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('{{ asset('assets/authentication/malika.jpg') }}')">
        </div>
        <div class="contents order-2 order-md-1">
            <div class="container bg-white">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-9">
                        <div class="mb-5 mx-auto text-center">
                            <img src="{{ asset('assets/images/logo_swis.png') }}" alt="logo Swis" width="200">
                        </div>
                        <form style="display: flex; flex-direction: column;" method="POST" action="{{ route('register') }}" autocomplete="off">
                            @csrf
                            <div class="py-1">
                                <label for="name">Name</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Username" id="name" />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>
                            <div class="py-1">
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
                            <div class="py-1">
                                <label for="phone">Phone</label>
                                <input type="number" name="phone"
                                    class="form-control @error('phone') is-invalid @enderror" placeholder="************"
                                    id="phone" />
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>
                            <div class="py-1">
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
                            <div class="py-1 mb-3">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" name="password_confirmation"
                                    class="form-control @error('password') is-invalid @enderror" placeholder="Your Confirm Password"
                                    id="password_confirmation" />
                            </div>

                            <input type="submit" value="Register" class="btn btn-block btn-primary" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
