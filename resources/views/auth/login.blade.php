@extends('layouts.sec')

@section('content')
    <div class="az-signup-wrapper">
        <div class="az-column-signup-left">
          <div>
            <a href="{{ url('/') }}" class="az-logo"><img src="{{asset('images/arifu-01.png')}}" alt="{{ config('app.name', 'Laravel') }}" width="50%"></a>
            <h5>Responsive Modern Dashboard &amp; Admin Template</h5>
            <p>We are excited to launch our new company and product Azia. After being featured in too many magazines to mention and having created an online stir, we know that BootstrapDash is going to be big. We also hope to win Startup Fictional Business of the Year this year.</p>
            <p>Browse our site and see for yourself why you need Azia.</p>
            <a href="#" class="btn btn-outline-indigo">Learn More</a>
          </div>
        </div><!-- az-column-signup-left -->
        <div class="az-column-signup">
          <h1 class="az-logo"></h1>
          <div class="az-signup-header">
            @if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}" class="btn btn-az-primary btn-block">Home</a>
            @else
            <h2>Login</h2>
            <h4>It's free to signup and only takes a minute.</h4>

            <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" placeholder="Enter your email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div><!-- form-group -->
              <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" placeholder="Enter your password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div><!-- form-group -->
              <button type="submit" class="btn btn-az-primary btn-block">Login</button>


            </form>
        @endauth
@endif
          </div><!-- az-signup-header -->
          @if (Route::has('login'))
          @auth
          @else
          <div class="az-signup-footer">
            <p>
                @if (Route::has('password.request'))
                    Forgot Your Password? <a href="{{ route('password.request') }}"> Recover</a>
                @endif
            </p> <br>
            <p>Don't have an account? <a href="{{ route('register') }}"> Register</a></p>
          </div><!-- az-signin-footer -->
          @endauth
          @endif
        </div><!-- az-column-signup -->
      </div><!-- az-signup-wrapper -->
      @endsection
