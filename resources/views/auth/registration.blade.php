@extends('index')

@section('content')
<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
        <div class="card login-card">
            <div class="row no-gutters">
                <div class="col-md-8">
                    <img src="{{ asset('img/login3.jpg') }}" alt="login" class="login-card-img">
                    <!-- <p class="text-white font-weight-medium text-center flex-grow align-self-end footer-link text-small">
                            Free <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white">Bootstrap dashboard templates</a> from Bootstrapdash
                        </p> -->
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <div class="brand-wrapper">
                            <img src="{{ asset('img/logo (1).svg') }}" alt="logo" class="logo">
                        </div>
                        <p class="login-card-description">Create new account</p>
                        <form action="{{ route('register.custom') }}" method="POST" enctype="multipart/form-data" autocomplete="">
                            @csrf
                            <div class="form-group">
                                <label for="access" class="sr-only">Account Access</label>
                                <select class="selectpicker select-option" data-width="100%" title="Account Access" name="access" id="access">
                                    <option value="member">Member</option>
                                    <option value="employee">Employee</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name" class="sr-only">Name</label>
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name" required>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-4">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <input name="signup" id="signup" class="btn btn-block login-btn mb-4" type="submit" value="Sign Up">
                        </form>
                        <!-- <a href="" class="forgot-password-link">Forgot password?</a> -->
                        <p class="login-card-footer-text">Have an account? <a href="{{ url('login') }}" class="text-reset">Login here</a></p>
                        <!-- <nav class="login-card-footer-nav">
                            <a href="#!">Terms of use.</a>
                            <a href="#!">Privacy policy</a>
                        </nav> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection