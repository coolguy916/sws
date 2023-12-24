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
                        <form method="POST" action="{{ route('password.email') }}" autocomplete="off">
                            @csrf
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
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

                            <input type="submit" value="Kirim" class="btn btn-block btn-primary" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
