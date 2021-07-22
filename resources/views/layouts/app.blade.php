<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="{{ config('app.author', 'pheogrammer') }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/png" href="{{ url('/images/arifu-02.png') }}"/>

    <!-- css -->
    <link href="{{asset('rsc/lib/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('rsc/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('rsc/lib/typicons.font/typicons.css')}}" rel="stylesheet">
    <link href="{{asset('rsc/lib/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('rsc/css/azia.css')}}">
  </head>
  <body class="az-body  az-body-sidebar">

    <div class="az-sidebar">
        <div class="az-sidebar-header">
            <a href="{{ url('/') }}" class="az-logo"><img src="{{asset('images/arifu-01.png')}}" alt="{{ config('app.name', 'Laravel') }}" width="50%"></a>
        </div><!-- az-sidebar-header -->

        <div class="az-sidebar-body">
          <ul class="nav">
            <li class="nav-label">Main Menu</li>
            <li class="nav-item active show">
              <a href="index.html" class="nav-link with-sub"><i class="typcn typcn-clipboard"></i>Dashboard</a>
              <ul class="nav-sub">
                <li class="nav-sub-item"><a href="dashboard-one.html" class="nav-sub-link">Web Analytics</a></li>
                <li class="nav-sub-item active"><a href="dashboard-two.html" class="nav-sub-link">Sales Monitoring</a></li>
                <li class="nav-sub-item"><a href="dashboard-three.html" class="nav-sub-link">Ad Campaign</a></li>
                <li class="nav-sub-item"><a href="dashboard-four.html" class="nav-sub-link">Event Management</a></li>
                <li class="nav-sub-item"><a href="dashboard-five.html" class="nav-sub-link">Helpdesk Management</a></li>
                <li class="nav-sub-item"><a href="dashboard-six.html" class="nav-sub-link">Finance Monitoring</a></li>
                <li class="nav-sub-item"><a href="dashboard-seven.html" class="nav-sub-link">Cryptocurrency</a></li>
                <li class="nav-sub-item"><a href="dashboard-eight.html" class="nav-sub-link">Executive / SaaS</a></li>
                <li class="nav-sub-item"><a href="dashboard-nine.html" class="nav-sub-link">Campaign Monitoring</a></li>
                <li class="nav-sub-item"><a href="dashboard-ten.html" class="nav-sub-link">Product Management</a></li>
              </ul>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="#" class="nav-link with-sub"><i class="typcn typcn-document"></i>Apps &amp; Pages</a>
              <ul class="nav-sub">
                <li class="nav-sub-item">
                  <a href="app-mail.html" class="nav-sub-link">Mailbox</a>
                </li>
                <li class="nav-sub-item">
                  <a href="app-chat.html" class="nav-sub-link">Chat</a>
                </li>
                <li class="nav-sub-item">
                  <a href="app-calendar.html" class="nav-sub-link">Calendar</a>
                </li>
                <li class="nav-sub-item">
                  <a href="app-contacts.html" class="nav-sub-link">Contacts</a>
                </li>
                <li class="nav-sub-item"><a href="app-kanban.html" class="nav-sub-link">Kanban</a></li>
                <li class="nav-sub-item"><a href="app-tickets.html" class="nav-sub-link">Tickets</a></li>
                <li class="nav-sub-item"><a href="page-profile.html" class="nav-sub-link">Profile</a></li>
                <li class="nav-sub-item"><a href="page-invoice.html" class="nav-sub-link">Invoice</a></li>
                <li class="nav-sub-item"><a href="page-signin.html" class="nav-sub-link">Sign In</a></li>
                <li class="nav-sub-item"><a href="page-signup.html" class="nav-sub-link">Sign Up</a></li>
                <li class="nav-sub-item"><a href="page-404.html" class="nav-sub-link">Page 404</a></li>
                <li class="nav-sub-item"><a href="page-faq.html" class="nav-sub-link">Faq</a></li>
                <li class="nav-sub-item"><a href="page-news-grid.html" class="nav-sub-link">News Grid</a></li>
                <li class="nav-sub-item"><a href="page-product-catalogue.html" class="nav-sub-link">Product Catalogue</a></li>
                <li class="nav-sub-item"><a href="page-project-list.html" class="nav-sub-link">Project List</a></li>
                <li class="nav-sub-item"><a href="page-order.html" class="nav-sub-link">Orders</a></li>
                <li class="nav-sub-item"><a href="page-pricing.html" class="nav-sub-link">Pricing</a></li>
                <li class="nav-sub-item"><a href="landing-sass.html" class="nav-sub-link">Landing Page</a></li>

              </ul>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="#" class="nav-link with-sub"><i class="typcn typcn-book"></i>UI Elements</a>
              <ul class="nav-sub">
                <li class="nav-sub-item"><a href="elem-accordion.html" class="nav-sub-link">Accordion</a></li>
                <li class="nav-sub-item"><a href="elem-alerts.html" class="nav-sub-link">Alerts</a></li>
                <li class="nav-sub-item"><a href="elem-avatar.html" class="nav-sub-link">Avatar</a></li>
                <li class="nav-sub-item"><a href="elem-badge.html" class="nav-sub-link">Badge</a></li>
                <li class="nav-sub-item"><a href="elem-breadcrumbs.html" class="nav-sub-link">Breadcrumbs</a></li>
                <li class="nav-sub-item"><a href="elem-buttons.html" class="nav-sub-link">Buttons</a></li>
                <li class="nav-sub-item"><a href="elem-cards.html" class="nav-sub-link">Cards</a></li>
                <li class="nav-sub-item"><a href="elem-carousel.html" class="nav-sub-link">Carousel</a></li>
                <li class="nav-sub-item"><a href="elem-collapse.html" class="nav-sub-link">Collapse</a></li>
                <li class="nav-sub-item"><a href="elem-dropdown.html" class="nav-sub-link">Dropdown</a></li>
                <li class="nav-sub-item"><a href="elem-icons.html" class="nav-sub-link">Icons</a></li>
                <li class="nav-sub-item"><a href="elem-images.html" class="nav-sub-link">Images</a></li>
                <li class="nav-sub-item"><a href="elem-list-group.html" class="nav-sub-link">List Group</a></li>
                <li class="nav-sub-item"><a href="elem-media-object.html" class="nav-sub-link">Media Object</a></li>
                <li class="nav-sub-item"><a href="elem-modals.html" class="nav-sub-link">Modals</a></li>
                <li class="nav-sub-item"><a href="elem-navigation.html" class="nav-sub-link">Navigation</a></li>
                <li class="nav-sub-item"><a href="elem-pagination.html" class="nav-sub-link">Pagination</a></li>
                <li class="nav-sub-item"><a href="elem-popover.html" class="nav-sub-link">Popover</a></li>
                <li class="nav-sub-item"><a href="elem-progress.html" class="nav-sub-link">Progress</a></li>
                <li class="nav-sub-item"><a href="elem-spinners.html" class="nav-sub-link">Spinners</a></li>
                <li class="nav-sub-item"><a href="elem-toast.html" class="nav-sub-link">Toast</a></li>
                <li class="nav-sub-item"><a href="elem-tooltip.html" class="nav-sub-link">Tooltip</a></li>
              </ul>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="#" class="nav-link with-sub"><i class="typcn typcn-edit"></i>Forms</a>
              <ul class="nav-sub">
                <li class="nav-sub-item"><a href="form-elements.html" class="nav-sub-link">Form Elements</a></li>
                <li class="nav-sub-item"><a href="form-layouts.html" class="nav-sub-link">Form Layouts</a></li>
                <li class="nav-sub-item"><a href="form-validation.html" class="nav-sub-link">Form Validation</a></li>
                <li class="nav-sub-item"><a href="form-wizards.html" class="nav-sub-link">Form Wizards</a></li>
                <li class="nav-sub-item"><a href="form-editor.html" class="nav-sub-link">WYSIWYG Editor</a></li>
              </ul>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="#" class="nav-link with-sub"><i class="typcn typcn-chart-bar-outline"></i>Charts</a>
              <ul class="nav-sub">
                <li class="nav-sub-item"><a href="chart-morris.html" class="nav-sub-link">Morris Charts</a></li>
                <li class="nav-sub-item"><a href="chart-flot.html" class="nav-sub-link">Flot Charts</a></li>
                <li class="nav-sub-item"><a href="chart-chartjs.html" class="nav-sub-link">ChartJS</a></li>
                <li class="nav-sub-item"><a href="chart-sparkline.html" class="nav-sub-link">Sparkline</a></li>
                <li class="nav-sub-item"><a href="chart-peity.html" class="nav-sub-link">Peity</a></li>
              </ul>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="#" class="nav-link with-sub"><i class="typcn typcn-map"></i>Maps</a>
              <ul class="nav-sub">
                <li class="nav-sub-item"><a href="map-google.html" class="nav-sub-link">Google Maps</a></li>
                <li class="nav-sub-item"><a href="map-leaflet.html" class="nav-sub-link">Leaflet</a></li>
                <li class="nav-sub-item"><a href="map-vector.html" class="nav-sub-link">Vector Maps</a></li>
              </ul>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="#" class="nav-link with-sub"><i class="typcn typcn-tabs-outline"></i>Tables</a>
              <ul class="nav-sub">
                <li class="nav-sub-item"><a href="table-basic.html" class="nav-sub-link">Basic Tables</a></li>
                <li class="nav-sub-item"><a href="table-data.html" class="nav-sub-link">Data Tables</a></li>
              </ul>
            </li><!-- nav-item -->
            <li class="nav-item">
              <a href="#" class="nav-link with-sub"><i class="typcn typcn-archive"></i>Utilities</a>
              <ul class="nav-sub">
                <li class="nav-sub-item"><a href="util-background.html" class="nav-sub-link">Background</a></li>
                <li class="nav-sub-item"><a href="util-border.html" class="nav-sub-link">Border</a></li>
                <li class="nav-sub-item"><a href="util-display.html" class="nav-sub-link">Display</a></li>
                <li class="nav-sub-item"><a href="util-flex.html" class="nav-sub-link">Flex</a></li>
                <li class="nav-sub-item"><a href="util-height.html" class="nav-sub-link">Height</a></li>
                <li class="nav-sub-item"><a href="util-margin.html" class="nav-sub-link">Margin</a></li>
                <li class="nav-sub-item"><a href="util-padding.html" class="nav-sub-link">Padding</a></li>
                <li class="nav-sub-item"><a href="util-position.html" class="nav-sub-link">Position</a></li>
                <li class="nav-sub-item"><a href="util-typography.html" class="nav-sub-link">Typography</a></li>
                <li class="nav-sub-item"><a href="util-width.html" class="nav-sub-link">Width</a></li>
                <li class="nav-sub-item"><a href="util-extras.html" class="nav-sub-link">Extras</a></li>
              </ul>
            </li><!-- nav-item -->
          </ul><!-- nav -->
        </div><!-- az-sidebar-body -->
      </div><!-- az-sidebar -->

      <div class="az-content az-content-dashboard-two">
        <div class="az-header">
          <div class="container-fluid">
            <div class="az-header-left">
              <a href="#" id="azSidebarToggle" class="az-header-menu-icon"><span></span></a>
            </div><!-- az-header-left -->
            <div class="az-header-center">
              <input type="search" class="form-control" placeholder="Search for anything...">
              <button class="btn"><i class="fas fa-search"></i></button>
            </div><!-- az-header-center -->
            <div class="az-header-right">
              <div class="az-header-message">
                <a href="app-chat.html"><i class="typcn typcn-messages"></i></a>
              </div><!-- az-header-message -->
              <div class="dropdown az-header-notification">
                <a href="#" class="new"><i class="typcn typcn-bell"></i></a>
                <div class="dropdown-menu">
                  <div class="az-dropdown-header mg-b-20 d-sm-none">
                    <a href="#" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                  </div>
                  <h6 class="az-notification-title">Notifications</h6>
                  <p class="az-notification-text">You have 2 unread notification</p>
                  <div class="az-notification-list">
                    <div class="media new">
                      <div class="az-img-user"><img src="{{asset('rsc/img/faces/face2.jpg')}}" alt=""></div>
                      <div class="media-body">
                        <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                        <span>Mar 15 12:32pm</span>
                      </div><!-- media-body -->
                    </div><!-- media -->
                    <div class="media new">
                      <div class="az-img-user online"><img src="{{asset('rsc/img/faces/face3.jpg')}}" alt=""></div>
                      <div class="media-body">
                        <p><strong>Joyce Chua</strong> just created a new blog post</p>
                        <span>Mar 13 04:16am</span>
                      </div><!-- media-body -->
                    </div><!-- media -->
                    <div class="media">
                      <div class="az-img-user"><img src="{{asset('rsc/img/faces/face4.jpg')}}" alt=""></div>
                      <div class="media-body">
                        <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                        <span>Mar 13 02:56am</span>
                      </div><!-- media-body -->
                    </div><!-- media -->
                    <div class="media">
                      <div class="az-img-user"><img src="{{asset('rsc/img/faces/face5.jpg')}}" alt=""></div>
                      <div class="media-body">
                        <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                        <span>Mar 12 10:40pm</span>
                      </div><!-- media-body -->
                    </div><!-- media -->
                  </div><!-- az-notification-list -->
                  <div class="dropdown-footer"><a href="#">View All Notifications</a></div>
                </div><!-- dropdown-menu -->
              </div><!-- az-header-notification -->
              @guest
                    @if (Route::has('login'))
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li> --}}
                    @endif

                    @if (Route::has('register'))
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li> --}}
                    @endif
                    @else

                    <div class="dropdown az-profile-menu">
                    <a href="#" class="az-img-user"><img src="https://via.placeholder.com/500" alt=""></a>
                    <div class="dropdown-menu">
                    <div class="az-dropdown-header d-sm-none">
                        <a href="#" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                    </div>
                    <div class="az-header-profile">
                        <div class="az-img-user">
                        <img src="https://via.placeholder.com/500" alt="">
                        </div><!-- az-img-user -->
                        <h6>{{ Auth::user()->name }}</h6>
                        <span>{{ Auth::user()->email }}</span>
                    </div><!-- az-header-profile -->

                    <a href="#" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                    <a href="#" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                    <a href="#" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
                    <a href="#" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        <i class="typcn typcn-power-outline"></i> {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    </div><!-- dropdown-menu -->
                    </div>
                @endguest
            </div><!-- az-header-right -->
          </div><!-- container -->
        </div><!-- az-header -->

    @yield('content')

    <div class="az-footer ht-40">
        <div class="container-fluid pd-t-0-f ht-100p">
          <span>&copy; 2019 Azia Responsive Bootstrap 4 Dashboard Template</span>
        </div><!-- container -->
      </div><!-- az-footer -->
    </div><!-- az-content -->


    <script src="{{asset('rsc/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('rsc/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('rsc/lib/ionicons/ionicons.js')}}"></script>
    <script src="{{asset('rsc/lib/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('rsc/lib/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('rsc/lib/morris.js/morris.min.js')}}"></script>
    <script src="{{asset('rsc/lib/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('rsc/lib/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

    <script src="{{asset('rsc/js/azia.js')}}"></script>
    <script>
      $(function(){
        'use strict'

        $('.az-sidebar .with-sub').on('click', function(e){
          e.preventDefault();
          $(this).parent().toggleClass('show');
          $(this).parent().siblings().removeClass('show');
        })

        $(document).on('click touchstart', function(e){
          e.stopPropagation();

          // closing of sidebar menu when clicking outside of it
          if(!$(e.target).closest('.az-header-menu-icon').length) {
            var sidebarTarg = $(e.target).closest('.az-sidebar').length;
            if(!sidebarTarg) {
              $('body').removeClass('az-sidebar-show');
            }
          }
        });


        $('#azSidebarToggle').on('click', function(e){
          e.preventDefault();

          if(window.matchMedia('(min-width: 992px)').matches) {
            $('body').toggleClass('az-sidebar-hide');
          } else {
            $('body').toggleClass('az-sidebar-show');
          }
        })

        /* ----------------------------------- */
        /* Dashboard content */

        $('#compositeline').sparkline('html', {
          lineColor: '#cecece',
          lineWidth: 2,
          spotColor: false,
          minSpotColor: false,
          maxSpotColor: false,
          highlightSpotColor: null,
          highlightLineColor: null,
          fillColor: '#f9f9f9',
          chartRangeMin: 0,
          chartRangeMax: 10,
          width: '100%',
          height: 20,
          disableTooltips: true
        });

        $('#compositeline2').sparkline('html', {
          lineColor: '#cecece',
          lineWidth: 2,
          spotColor: false,
          minSpotColor: false,
          maxSpotColor: false,
          highlightSpotColor: null,
          highlightLineColor: null,
          fillColor: '#f9f9f9',
          chartRangeMin: 0,
          chartRangeMax: 10,
          width: '100%',
          height: 20,
          disableTooltips: true
        });

        $('#compositeline3').sparkline('html', {
          lineColor: '#cecece',
          lineWidth: 2,
          spotColor: false,
          minSpotColor: false,
          maxSpotColor: false,
          highlightSpotColor: null,
          highlightLineColor: null,
          fillColor: '#f9f9f9',
          chartRangeMin: 0,
          chartRangeMax: 10,
          width: '100%',
          height: 20,
          disableTooltips: true
        });

        $('#compositeline4').sparkline('html', {
          lineColor: '#cecece',
          lineWidth: 2,
          spotColor: false,
          minSpotColor: false,
          maxSpotColor: false,
          highlightSpotColor: null,
          highlightLineColor: null,
          fillColor: '#f9f9f9',
          chartRangeMin: 0,
          chartRangeMax: 10,
          width: '100%',
          height: 20,
          disableTooltips: true
        });


        var morrisData = [
          { y: 'Oct 01', a: 95000, b: 70000 },
          { y: 'Oct 05', a: 75000,  b: 55000 },
          { y: 'Oct 10', a: 50000,  b: 40000 },
          { y: 'Oct 15', a: 75000,  b: 65000 },
          { y: 'Oct 20', a: 50000,  b: 40000 },
          { y: 'Oct 25', a: 80000, b: 90000 },
          { y: 'Oct 30', a: 75000,  b: 65000 }
        ];

        new Morris.Bar({
          element: 'morrisBar1',
          data: morrisData,
          xkey: 'y',
          ykeys: ['a', 'b'],
          labels: ['Online', 'Offline'],
          barColors: ['#560bd0', '#00cccc'],
          preUnits: '$',
          barSizeRatio: 0.55,
          gridTextSize: 11,
          gridTextColor: '#494c57',
          gridTextWeight: 'bold',
          gridLineColor: '#999',
          gridStrokeWidth: 0.25,
          hideHover: 'auto',
          resize: true,
          padding: 5
        });

        $('#vmap2').vectorMap({
          map: 'usa_en',
          showTooltip: true,
          backgroundColor: '#fff',
          color: '#60adff',
          colors: {
            mo: '#9fceff',
            fl: '#60adff',
            or: '#409cff',
            ca: '#005cbf',
            tx: '#005cbf',
            wy: '#005cbf',
            ny: '#007bff'
          },
          hoverColor: '#222',
          enableZoom: false,
          borderWidth: 1,
          borderColor: '#fff',
          hoverOpacity: .85
        });

      });
    </script>
  </body>

</html>
