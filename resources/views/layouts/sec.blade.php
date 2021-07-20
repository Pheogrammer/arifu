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
    @yield('content')

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

