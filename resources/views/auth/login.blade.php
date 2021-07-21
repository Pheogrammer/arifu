@extends('layouts.sec')

@section('content')
    <div class="az-signup-wrapper">
        <div class="az-column-signup-left">
          <div>
            <h1 class="az-logo"><img src="{{asset('images/arifu-01.png')}}" alt="{{ config('app.name', 'Laravel') }}" width="50%"></h1>
            <h5>Responsive Modern Dashboard &amp; Admin Template</h5>
            <p>We are excited to launch our new company and product Azia. After being featured in too many magazines to mention and having created an online stir, we know that BootstrapDash is going to be big. We also hope to win Startup Fictional Business of the Year this year.</p>
            <p>Browse our site and see for yourself why you need Azia.</p>
            <a href="index.html" class="btn btn-outline-indigo">Learn More</a>
          </div>
        </div><!-- az-column-signup-left -->
        <div class="az-column-signup">
          <h1 class="az-logo"></h1>
          <div class="az-signup-header">
            <h2>Login</h2>
            <h4>It's free to signup and only takes a minute.</h4>

            <form action="#">
              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Enter your email">
              </div><!-- form-group -->
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter your password">
              </div><!-- form-group -->
              <button class="btn btn-az-primary btn-block">Create Account</button>

            </form>
          </div><!-- az-signup-header -->
          <div class="az-signup-footer">
            <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
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
                <div class="card-header">{{ __('Login') }}</div>

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
@endsection --}}
