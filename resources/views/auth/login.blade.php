@extends('layouts.app')
@section('content')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif
    }

    body {
        /* background-color: #2444aa; */
        background-image: url("{{asset('images/06.jpg') }}");
        background-repeat: no-repeat;
        background-size: cover;
    }


    .container .wrapper {
        padding: 40px 20px;
        width: 350px;
        height: 640px;
        position: absolute;
        left: 30%;
        top: -62px
    }

    .fa-arrow-right {
        padding-left: 2px;
        transition: all .3s ease-in
    }

    .text-lighter {
        color: #ddd;
        font-size: 0.89rem
    }

    img {
        object-fit: contain;
        width: 20px;
        height: 20px
    }

    .btn.d-flex {
        border: 1px solid #2444aa;
        color: #2444aa;
        font-weight: 600;
        background-color: #f0f5fa
    }

    .btn.d-flex:hover {
        background-color: #dfedfc;
        color: #2444aa;
    }

    .bordered {
        border: 1px solid #ddd
    }

    .border-top {
        position: relative
    }

    .bg-md-white {
        background-color: #fff
    }

    .border-top:after {
        content: 'or';
        position: absolute;
        padding: 0px 10px;
        background-color: #fff;
        top: -13px;
        left: 40%;
        text-align: center;
        color: #777;
        font-size: 0.9rem
    }

    label {
        color: #777;
        font-size: 0.86rem;
        margin: 0
    }

    .form-control {
        border: none;
        border-bottom: 1px solid #ddd;
        height: 30px;
        border-radius: 0px
    }

    .form-control:focus {
        box-shadow: none
    }

    .caption {
        font-size: 0.81rem
    }

    .mt-auto {
        font-size: 0.9rem
    }

    ::-webkit-scrollbar {
        width: 5px
    }

    ::-webkit-scrollbar-thumb {
        background: linear-gradient(to bottom, #ec0101, #f7e92b);
        border-radius: 6px
    }

    @media(min-width:992px) and (max-width: 1199px) {
        .container .wrapper {
            left: 18%
        }
    }

    @media(min-width:768px) and (max-width: 991px) {
        .container .wrapper {
            left: 0%
        }
    }

    @media(max-width:767px) {
        .container {
            padding: 20px
        }

        .container .wrapper {
            position: unset;
            width: max-content;
            display: block
        }

        .bordered {
            border: none
        }

        .bg-md-white {
            background-color: inherit
        }

        .border-top:after {
            background-color: #f7f7f7
        }

        .form-control {
            background-color: inherit
        }
    }

    @media(max-width:575px) {
        .container {
            padding: 20px;
            margin: 10px
        }

        .container .wrapper {
            width: 400px
        }
    }

    @media(max-width: 424px) {
        .container .wrapper {
            width: fit-content;
            padding: 0
        }
    }

    .logo {
        height: 20px;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"  style="display:relative; top:130px; opacity:0.9;">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-5">
                            <h1 class="logo">
                            <img src="{{asset('images/logo.png')}}" height="200px" width="200" alt="">
                            </h1>
                        </div>
                        <div class="col-md-7 margin-auto">
                            <h4>{{ __('Login') }}</h4>
                        </div>
                    </div>
                </div>


                <div class="card-body">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection