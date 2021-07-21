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
              <div class="az-signup-header">
                <h2>Register</h2>
                  @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                  @endif
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group">
                    <label for="name">Firstname &amp; Lastname</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div><!-- form-group -->
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div><!-- form-group -->
                  <div class="form-group">
                    <label for="password" >Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                  </div><!-- form-group -->
                  <div class="form-group">
                    <label>Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                  </div><!-- form-group -->
                  <button class="btn btn-az-primary btn-block">Create Account</button>

                </form> <br>
                <div class="text-center text-dark" >
                    OR
                </div>
                <div class="row row-xs">
                    <div class="col-sm-4">
                        <a class=" btn btn-danger btn-block" style="background-color: red;"><i class="fab fa-google"></i> Signup with Google</a>
                    </div>
                    <div class="col-sm-4">
                        <a class="btn btn-primary btn-block"><i class="fab fa-linkedin"></i> Signup with Linkedin</a>
                    </div>
                    <div class="col-sm-4">
                        <a class="btn btn-az-primary btn-block"> <i class="fab fa-twitter"></i> Signup with Twitter</a>
                    </div>
                </div>
              </div><!-- az-signup-header -->
              <div class="az-signup-footer"> <br>
                <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
              </div><!-- az-signin-footer -->
            </div><!-- az-column-signup -->
          </div><!-- az-signup-wrapper -->
      @endsection
