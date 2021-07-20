@extends('layouts.sec')

@section('content')

        <div class="az-signup-wrapper">
            <div class="az-column-signup-left">
              <div>
                <i class="typcn typcn-chart-bar-outline"></i>
                <h1 class="az-logo">az<span>i</span>a</h1>
                <h5>Responsive Modern Dashboard &amp; Admin Template</h5>
                <p>We are excited to launch our new company and product Azia. After being featured in too many magazines to mention and having created an online stir, we know that BootstrapDash is going to be big. We also hope to win Startup Fictional Business of the Year this year.</p>
                <p>Browse our site and see for yourself why you need Azia.</p>
                <a href="index.html" class="btn btn-outline-indigo">Learn More</a>
              </div>
            </div><!-- az-column-signup-left -->
            <div class="az-column-signup">
              <div class="az-signup-header">
                <h2>Register</h2>

                <form action="#">
                  <div class="form-group">
                    <label>Firstname &amp; Lastname</label>
                    <input type="text" class="form-control" placeholder="Enter your firstname and lastname">
                  </div><!-- form-group -->
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" placeholder="Enter your email">
                  </div><!-- form-group -->
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Enter your password">
                  </div><!-- form-group -->
                  <button class="btn btn-az-primary btn-block">Create Account</button>

                </form> <br>
                <div class="text-center text-dark" >
                    OR
                </div> <br>
                <div>
                    <a class="btn btn-az-primary btn-block"> <i class="fab fa-twitter"></i> Signup with Twitter</a></a>
                    <a class="btn btn-danger btn-block"><i class="fab fa-google"></i> Signup with Google</a></a>
                    <a class="btn btn-primary btn-block"><i class="fab fa-facebook-f"></i> Signup with Facebook</a></a>
                </div>
              </div><!-- az-signup-header -->
              <div class="az-signup-footer"> <br>
                <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
              </div><!-- az-signin-footer -->
            </div><!-- az-column-signup -->
          </div><!-- az-signup-wrapper -->
      @endsection
{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
