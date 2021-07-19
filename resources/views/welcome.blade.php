<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="{{ config('app.author', 'pheogrammer') }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- vendor css -->
    <link href="{{asset('rsc/lib/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('rsc/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('rsc/lib/typicons.font/typicons.css')}}" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="{{asset('rsc/css/azia.css')}}">

  </head>
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
        <div class="az-logo"> <img src="{{asset('images/app/arifu04.png')}}" alt="{{ config('app.name', 'Laravel') }}" width="50%"> </div>
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
          <a id="azDemoBtn" href="#azDemo" class="btn btn-primary flex-1 mg-r-10">Login</a>
          <a href="#" class="btn btn-primary flex-1">Register</a>
        </p>

        <nav>
          <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank"><i class="fab fa-dribbble"></i></a>
          <a href="#" target="_blank"><i class="fab fa-behance"></i></a>
        </nav>
      </div><!-- az-home-content -->
    </div><!-- az-home-slider -->


        {{-- <div>&copy; {{date('Y')}} {{ config('app.name', 'Laravel') }}.</div> --}}
       
    <script src="{{asset('rsc/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('rsc/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('rsc/lib/ionicons/ionicons.js')}}"></script>
    <script src="{{asset('rsc/lib/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{asset('rsc/lib/jquery.flot/jquery.flot.resize.js')}}"></script>

    <script src="{{asset('rsc/js/azia.js')}}"></script>
    <script src="{{asset('rsc/js/dashboard.sampledata.js')}}"></script>
    <script>
      $(function(){
        'use strict'

        $.plot('#flotChart', [{
          data: dashData1,
          color: '#3d0894',
          bars: {
            show: true,
            lineWidth: 0,
            barWidth: .5,
            fill: 1
          }
        },{
          data: dashData4,
          color: '#2d066d',
          bars: {
            show: true,
            lineWidth: 0,
            barWidth: .5,
            fill: 1
          }
        }], {
          series: {
            shadowSize: 0
          },
          grid: {
            borderWidth: 0,
            labelMargin: 10
          },
          yaxis: {
            show: true,
            min: 0,
            max: 45,
            ticks: 4,
            tickColor: 'rgba(255,255,255,.08)',
            font: { color: 'rgba(255,255,255,0)' }
          },
          xaxis: {
            show: true,
            position: 'top',
            tickColor: 'rgba(255,255,255,.08)',
            font: {
              color: 'rgba(255,255,255,.2)',
              size: 11
            }
          }
        });


        // animated smooth scroll on target from top menu
        $('#azDemoBtn').on('click', function(e){

          var target = $(this).attr('href');
          $('html, body').animate({
            scrollTop: $(''+target).offset().top
          }, 500);

          e.preventDefault();
        });
      })
    </script>
  </body>

</html>
