@extends('layouts.master')

<!-- Main Code -->
@section('content')
<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <style>
        .login {
            min-height: 100vh;
            }

        .bg-image {
            background-image: url('https://images.unsplash.com/photo-1509042239860-f550ce710b93?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80');
            background-size: cover;
            background-position: center;
        }

        .login-heading {
            font-weight: 300;
        }

        .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
            border-radius: 3rem;
        }

        .loginpartition {
            background-color: rgba(218, 205, 172, 0.7);
            border-radius: 2rem;
            padding: 30px;
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .left {
            float: left;
            width: 200px;
        }

        .right {
            float: right;
            width: 150px;
        }

        body {
                background-color: rgb(192, 176, 111);
            }
    </style>

  </head>
  <body>
        <div class="container-fluid ps-md-0">
            <div class="row g-0">
                <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
                    <div class="col-md-8 col-lg-6">
                        <div class="login d-flex align-items-center py-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9 col-lg-8 mx-auto">
                                        <h1 class="login-heading mb-4">Login</h1><br>
                                            <!-- Sign In Form -->
                                            <div class="loginpartition">
                                                <form method="POST" action="{{ route('login') }}">
                                                    @csrf
                                                    <!-- Input Email -->
                                                    <div class="form-floating mb-3">
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="name@example.com">
                                                        <label for="email">Email Address</label>

                                                        @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                        @enderror
                                                    </div>

                                                    <!-- Input Password -->
                                                    <div class="form-floating mb-3">
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                                        <label for="password">Password</label>

                                                        @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                        @enderror
                                                    </div>

                                                    <!-- Remember Me Checkbox -->
                                                    <div class="form-check mb-3">
                                                        <input id="remember" type="checkbox" class="form-check-input" type="checkbox" value="" {{ old('remember') ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="remember"> {{ __('Remember Me') }}</label>
                                                    </div>

                                                    <!-- Forgot Password -->
                                                    <div class="d-grid">
                                                        <button style="background-color:rgba(94, 74, 10, 0.548); border-color:rgba(128, 101, 13, 0.548);" type="submit" class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" > {{ __('Login') }} </button>
                                                        <div class="text-center">
                                                            @if (Route::has('password.request'))
                                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                    {{ __('Forgot Your Password?') }}
                                                                </a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </form>
                                            </div><br><br>

                                                <div class="left">
                                                    <h4 class="login-heading mb-4">Create account</h4>
                                                </div>

                                                <div class="right">
                                                    <ul class="nav-item">
                                                        <a class="btn btn-link" href="{{ route('register') }}">{{ __('Register Now') }}</a>
                                                    </ul>
                                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection
