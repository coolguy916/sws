@extends('layouts.app')

@section('content')
<style>
    .form-control {
        height: 40px; 
        font-size: 14px; 
        padding: 0.375rem 0.75rem; 
    }

    .btn-custom {
        display: inline-block;
        font-weight: 400;
        color: #fff;
        text-align: center;
        vertical-align: middle;
        user-select: none;
        background-color: #007bff;
        border: 1px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .btn-custom:hover {
        color: #fff;
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .btn-custom:active {
        color: #fff;
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .btn-custom:focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
        
    }
   
</style>
<style>
    #submitBtn {
        background-color: #1a2e35; 
        border-color: #1a2e35; 
        color: #fff; 
        transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease; 
    }

    #submitBtn[disabled] {
        background-color: #6c757d; 
        border-color: #6c757d; 
        color: #fff; 
        cursor: not-allowed;

    }
</style>

<div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('{{ asset('assets/authentication/malika.jpg') }}')">
    </div>
    <div class="contents order-2 order-md-1">
        <div class="container bg-white">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-9">
                    <div class="mb-4 mx-auto text-center">
                        <img src="{{ asset('assets/images/logo_swis.png') }}" alt="logo Swis" width="200">
                    </div>
                    <form style="display: flex; flex-direction: column;" method="POST" action="{{ route('register') }}" autocomplete="off">
                        @csrf
                        <div class="py-1">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Username" id="name" />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="py-1">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="your-email@gmail.com" id="email" />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="py-1">
                            <label for="phone">Phone</label>
                            <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="************" id="phone" />
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="py-1">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Your Password" id="password" />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="py-1 mb-1">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror" placeholder="Your Confirm Password" id="password_confirmation" />
                        </div>
                        <div class="py-1">
                            <input type="checkbox" name="agree" id="termsCheck">
                            <label for="agree">
                                Saya menyetujui
                                <button type="button" class="btn-custom btn-sm" data-bs-toggle="modal" data-bs-target="#terms">Syarat dan Ketentuan</button>
                            </label>
                        </div>
                        <div class="modal fade" id="terms" tabindex="-1" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Syarat & Ketentuan Pengguna Swis</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <br>
                                        @foreach ( $termsAndConditions as $data )
                                             <p class="card-text">{!! $data->teks !!}</p>
                                        @endforeach
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" id="submitBtn" class="btn btn-block btn-primary" disabled>Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const termsCheck = document.querySelector('#termsCheck');
    const submitBtn = document.querySelector('#submitBtn');

    termsCheck.addEventListener('change', function() {
        if (this.checked) {
            submitBtn.removeAttribute('disabled');
        } else {
            submitBtn.setAttribute('disabled', true);
        }
    });

</script>
@endsection

