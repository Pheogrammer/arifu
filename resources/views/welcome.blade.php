@extends('layouts.sec')

@section('content')

<body class="az-body">
    <div class="az-home-slider">
      <div class="chart-wrapper">
        <div id="flotChart" class="flot-chart"></div>
      </div><!-- chart-wrapper -->
      <div class="card-columns">
        <div class="card"><img src="{{asset('rsc/img/one.jpg')}}" class="img-fluid" alt=""></div>
        <div class="card"><img src="{{asset('rsc/img/seven.jpg')}}" class="img-fluid" alt=""></div>
        <div class="card"><img src="{{asset('rsc/img/ten.jpg')}}" class="img-fluid" alt=""></div>
        <div class="card"><img src="{{asset('rsc/img/eight.jpg')}}" class="img-fluid" alt=""></div>
        <div class="card"><img src="{{asset('rsc/img/five.jpg')}}" class="img-fluid" alt=""></div>
        <div class="card"><img src="{{asset('rsc/img/six.jpg')}}" class="img-fluid" alt=""></div>
        <div class="card"><img src="{{asset('rsc/img/four.jpg')}}" class="img-fluid" alt=""></div>
        <div class="card"><img src="{{asset('rsc/img/two.jpg')}}" class="img-fluid" alt=""></div>
        <div class="card"><img src="{{asset('rsc/img/three.jpg')}}" class="img-fluid" alt=""></div>
        <div class="card"><img src="{{asset('rsc/img/one.jpg')}}" class="img-fluid" alt=""></div>
        <div class="card"><img src="{{asset('rsc/img/five.jpg')}}" class="img-fluid" alt=""></div>
        <div class="card"><img src="{{asset('rsc/img/three.jpg')}}" class="img-fluid" alt=""></div>
        <div class="card"><img src="{{asset('rsc/img/seven.jpg')}}" class="img-fluid" alt=""></div>
      </div><!-- card-columns -->
      <div class="az-home-content">
        <a  href="{{ url('/') }}"  class="az-logo"> <img src="{{asset('images/app/arifu04.png')}}" alt="{{ config('app.name', 'Laravel') }}" width="50%"> </a>
        <h5>Responsive Bootstrap 4 Dashboard Template</h5>

        <div class="logo-group">
          <i class="fab fa-html5"></i>
          <i class="fab fa-css3-alt"></i>
          <i class="fab fa-sass"></i>
          <i class="fab fa-npm"></i>
          <i class="fab fa-gulp"></i>
        </div>

        <h1>Share emails, information from one app!</h1>
        <p class="mg-b-25">When your dashboard or app is attractive to use, your users will not simply be using it, they’ll look forward to using it. This means that you should fashion the look and feel of your interface for your users.</p>
        <p>
          <a id="loginBtn" href="{{ route('login') }}" class="btn btn-primary flex-1 mg-r-10">Login</a>
          <a id="registerBtn" href="{{ route('register') }}" class="btn btn-primary flex-1">Register</a>
        </p>

        <nav>
          <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank"><i class="fab fa-dribbble"></i></a>
          <a href="#" target="_blank"><i class="fab fa-behance"></i></a>
        </nav>
      </div><!-- az-home-content -->
    </div><!-- az-home-slider -->


      @endsection
