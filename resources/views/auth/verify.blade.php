@extends('layouts.sec')

@section('content')
    <div class="az-signup-wrapper">
        <div class="az-column-signup-left">
          <div>
            <a href="{{ url('/') }}" class="az-logo"><img src="{{asset('images/arifu-logo-darker.svg')}}" alt="{{ config('app.name', 'Laravel') }}" width="50%"></a>
            <h5>Responsive Modern Dashboard &amp; Admin Template</h5>
            <p>We are excited to launch our new company and product Azia. After being featured in too many magazines to mention and having created an online stir, we know that BootstrapDash is going to be big. We also hope to win Startup Fictional Business of the Year this year.</p>
            <p>Browse our site and see for yourself why you need Azia.</p>
            <a href="#" class="btn btn-outline-indigo">Learn More</a>
          </div>
        </div><!-- az-column-signup-left -->
        <div class="az-column-signup">
          <h1 class="az-logo">az<span>i</span>a</h1>
          <div class="az-signup-header">
            <h2>Get Started</h2>
            <h4>It's free to signup and only takes a minute.</h4>

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
              <div class="row row-xs">
                <div class="col-sm-6"><button class="btn btn-block"><i class="fab fa-facebook-f"></i> Signup with Facebook</button></div>
                <div class="col-sm-6 mg-t-10 mg-sm-t-0"><button class="btn btn-primary btn-block"><i class="fab fa-twitter"></i> Signup with Twitter</button></div>
              </div><!-- row -->
            </form>
          </div><!-- az-signup-header -->
          <div class="az-signup-footer">
            <p>Already have an account? <a href="page-signin.html">Sign In</a></p>
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
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
