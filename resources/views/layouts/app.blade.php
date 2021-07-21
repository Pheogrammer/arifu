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
  <body class="az-body">
    <div class="az-iconbar az-iconbar-primary">
        {{-- logo below --}}
        <a href="{{ url('/home') }}" class="az-iconbar-logo"><img src="{{asset('images/arifu-69.png')}}" title="{{ config('app.name', 'Laravel') }}" alt="{{ config('app.name', 'Laravel') }}" width="50%"></a>
        <nav class="nav">
          <a href="#asideDashboard" class="nav-link active"><i class="typcn typcn-device-laptop"></i></a>
          <a href="#asideAppsPages" class="nav-link"><i class="typcn typcn-calendar-outline"></i></a>
          <a href="#asideUIElements" class="nav-link"><i class="typcn typcn-book"></i></a>
          <a href="#asideForms" class="nav-link"><i class="typcn typcn-folder-add"></i></a>
          <a href="#asideCharts" class="nav-link"><i class="typcn typcn-chart-line-outline"></i></a>
          <a href="#asideMaps" class="nav-link"><i class="typcn typcn-map"></i></a>
          <a href="#asideTables" class="nav-link"><i class="typcn typcn-th-large-outline"></i></a>
          <a href="#asideUtil" class="nav-link"><i class="typcn typcn-archive"></i></a>
        </nav>
        <div class="az-iconbar-bottom">
          <a href="#" class="az-iconbar-help"><i class="far fa-question-circle"></i></a>
          <a href="#" class="az-img-user online"><img src="https://via.placeholder.com/500" alt=""></a>
        </div><!-- az-iconbar-bottom -->
      </div><!-- az-iconbar -->
      <div class="az-iconbar-aside az-iconbar-aside-primary">
        <div class="az-iconbar-header">
            <a href="{{ url('/home') }}" class="az-iconbar-logo"><img src="{{asset('images/arifu-02.png')}}" title="{{ config('app.name', 'Laravel') }}" alt="{{ config('app.name', 'Laravel') }}" width="50%"></a>
            <a href="#" class="az-iconbar-toggle-menu">
            <i class="icon ion-md-arrow-back"></i>

            <i class="icon ion-md-close"></i>
          </a>
        </div><!-- az-iconbar-header -->
        <div class="az-iconbar-body">
          <div id="asideDashboard" class="az-iconbar-pane">
            <h6 class="az-iconbar-title">Dashboard</h6>
            <small class="az-iconbar-text">Choose between layouts to experience different look and feel for your projects.</small>

            <ul class="nav">
              <li class="nav-item"><a href="#" class="nav-link">Web Analytics</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Sales Monitoring</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Ad Campaign</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Event Management</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Helpdesk Management</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Finance Monitoring</a></li>
              <li class="nav-item"><a href="dashboard-seven.html" class="nav-link">Cryptocurrency</a></li>
              <li class="nav-item"><a href="dashboard-eight.html" class="nav-link">Executive / SaaS</a></li>
              <li class="nav-item"><a href="dashboard-nine.html" class="nav-link">Campaign Monitoring</a></li>
              <li class="nav-item active"><a href="dashboard-ten.html" class="nav-link">Product Management</a></li>
            </ul>
          </div>
          <div id="asideAppsPages" class="az-iconbar-pane">
            <h6 class="az-iconbar-title">Apps &amp; Pages</h6>
            <small class="az-iconbar-text">Some pre-built web apps and pages for you to use in your project.</small>
            <ul class="nav">
              <li class="nav-item">
                <a href="app-mail.html" class="nav-link">Mailbox</a>
              </li>
              <li class="nav-item">
                <a href="app-chat.html" class="nav-link">Chat</a>
              </li>
              <li class="nav-item">
                <a href="app-calendar.html" class="nav-link">Calendar</a>
              </li>
              <li class="nav-item">
                <a href="app-contacts.html" class="nav-link">Contacts</a>
              </li>
              <li class="nav-item"><a href="app-kanban.html" class="nav-link">Kanban</a></li>
              <li class="nav-item"><a href="app-tickets.html" class="nav-link">Tickets</a></li>
              <li class="nav-item"><a href="page-profile.html" class="nav-link">Profile</a></li>
              <li class="nav-item"><a href="page-invoice.html" class="nav-link">Invoice</a></li>
              <li class="nav-item"><a href="page-signin.html" class="nav-link">Sign In</a></li>
              <li class="nav-item"><a href="page-signup.html" class="nav-link">Sign Up</a></li>
              <li class="nav-item"><a href="page-404.html" class="nav-link">Page 404</a></li>
              <li class="nav-item"><a href="page-faq.html" class="nav-link">Faq</a></li>
              <li class="nav-item"><a href="page-news-grid.html" class="nav-link">News Grid</a></li>
              <li class="nav-item"><a href="page-product-catalogue.html" class="nav-link">Product Catalogue</a></li>
              <li class="nav-item"><a href="page-project-list.html" class="nav-link">Project List</a></li>
              <li class="nav-item"><a href="page-order.html" class="nav-link">Orders</a></li>
              <li class="nav-item"><a href="page-pricing.html" class="nav-link">Pricing</a></li>
              <li class="nav-item"><a href="landing-sass.html" class="nav-link">Landing Page</a></li>
            </ul>
          </div><!-- az-iconbar-pane -->
          <div id="asideUIElements" class="az-iconbar-pane">
            <h6 class="az-iconbar-title">UI Elements</h6>
            <small class="az-iconbar-text">Reusable elements built to provide buttons, dropdowns, input, navigation, alerts, and much more</small>
            <ul class="nav">
              <li class="nav-item"><a href="elem-accordion.html" class="nav-link">Accordion</a></li>
              <li class="nav-item"><a href="elem-alerts.html" class="nav-link">Alerts</a></li>
              <li class="nav-item"><a href="elem-avatar.html" class="nav-link">Avatar</a></li>
              <li class="nav-item"><a href="elem-badge.html" class="nav-link">Badge</a></li>
              <li class="nav-item"><a href="elem-breadcrumbs.html" class="nav-link">Breadcrumbs</a></li>
              <li class="nav-item"><a href="elem-buttons.html" class="nav-link">Buttons</a></li>
              <li class="nav-item"><a href="elem-cards.html" class="nav-link">Cards</a></li>
              <li class="nav-item"><a href="elem-carousel.html" class="nav-link">Carousel</a></li>
              <li class="nav-item"><a href="elem-collapse.html" class="nav-link">Collapse</a></li>
              <li class="nav-item"><a href="elem-dropdown.html" class="nav-link">Dropdown</a></li>
              <li class="nav-item"><a href="elem-icons.html" class="nav-link">Icons</a></li>
              <li class="nav-item"><a href="elem-images.html" class="nav-link">Images</a></li>
              <li class="nav-item"><a href="elem-list-group.html" class="nav-link">List Group</a></li>
              <li class="nav-item"><a href="elem-media-object.html" class="nav-link">Media Object</a></li>
              <li class="nav-item"><a href="elem-modals.html" class="nav-link">Modals</a></li>
              <li class="nav-item"><a href="elem-navigation.html" class="nav-link">Navigation</a></li>
              <li class="nav-item"><a href="elem-pagination.html" class="nav-link">Pagination</a></li>
              <li class="nav-item"><a href="elem-popover.html" class="nav-link">Popover</a></li>
              <li class="nav-item"><a href="elem-progress.html" class="nav-link">Progress</a></li>
              <li class="nav-item"><a href="elem-spinners.html" class="nav-link">Spinners</a></li>
              <li class="nav-item"><a href="elem-toast.html" class="nav-link">Toast</a></li>
              <li class="nav-item"><a href="elem-tooltip.html" class="nav-link">Tooltip</a></li>
            </ul>
          </div><!-- az-iconbar-pane -->
          <div id="asideForms" class="az-iconbar-pane">
            <h6 class="az-iconbar-title">Forms</h6>
            <small class="az-iconbar-text">Forms are used to collect user information with different element types of inputs.</small>

            <ul class="nav">
              <li class="nav-item"><a href="form-elements.html" class="nav-link">Form Elements</a></li>
              <li class="nav-item"><a href="form-layouts.html" class="nav-link">Form Layouts</a></li>
              <li class="nav-item"><a href="form-validation.html" class="nav-link">Form Validation</a></li>
              <li class="nav-item"><a href="form-wizards.html" class="nav-link">Form Wizards</a></li>
              <li class="nav-item"><a href="form-editor.html" class="nav-link">WYSIWYG Editor</a></li>
            </ul>
          </div><!-- az-iconbar-pane -->
          <div id="asideCharts" class="az-iconbar-pane">
            <h6 class="az-iconbar-title">Charts</h6>
            <small class="az-iconbar-text">A sheet of information in the form of a table, graph, or diagram.</small>
            <ul class="nav">
              <li class="nav-item"><a href="chart-morris.html" class="nav-link">Morris Charts</a></li>
              <li class="nav-item"><a href="chart-flot.html" class="nav-link">Flot Charts</a></li>
              <li class="nav-item"><a href="chart-chartjs.html" class="nav-link">ChartJS</a></li>
              <li class="nav-item"><a href="chart-sparkline.html" class="nav-link">Sparkline</a></li>
              <li class="nav-item"><a href="chart-peity.html" class="nav-link">Peity</a></li>
            </ul>
          </div><!-- az-iconbar-pane -->
          <div id="asideMaps" class="az-iconbar-pane">
            <h6 class="az-iconbar-title">Maps</h6>
            <small class="az-iconbar-text">An interactive display of geographic information that you can use for location and more.</small>
            <ul class="nav">
              <li class="nav-item"><a href="map-google.html" class="nav-link">Google Maps</a></li>
              <li class="nav-item"><a href="map-leaflet.html" class="nav-link">Leaflet</a></li>
              <li class="nav-item"><a href="map-vector.html" class="nav-link">Vector Maps</a></li>
            </ul>
          </div><!-- az-iconbar-pane -->
          <div id="asideTables" class="az-iconbar-pane">
            <h6 class="az-iconbar-title">Tables</h6>
            <small class="az-iconbar-text">A collection basic to advanced table design that you can use to your data.</small>
            <ul class="nav">
              <li class="nav-item"><a href="table-basic.html" class="nav-link">Basic Tables</a></li>
              <li class="nav-item"><a href="table-data.html" class="nav-link">Data Tables</a></li>
            </ul>
          </div><!-- az-iconbar-pane -->
          <div id="asideUtil" class="az-iconbar-pane">
            <h6 class="az-iconbar-title">Utilities</h6>
            <small class="az-iconbar-text">A collection of helper classes as additional styles to an element.</small>
            <ul class="nav">
              <li class="nav-item"><a href="util-background.html" class="nav-link">Background</a></li>
              <li class="nav-item"><a href="util-border.html" class="nav-link">Border</a></li>
              <li class="nav-item"><a href="util-display.html" class="nav-link">Display</a></li>
              <li class="nav-item"><a href="util-flex.html" class="nav-link">Flex</a></li>
              <li class="nav-item"><a href="util-height.html" class="nav-link">Height</a></li>
              <li class="nav-item"><a href="util-margin.html" class="nav-link">Margin</a></li>
              <li class="nav-item"><a href="util-padding.html" class="nav-link">Padding</a></li>
              <li class="nav-item"><a href="util-position.html" class="nav-link">Position</a></li>
              <li class="nav-item"><a href="util-typography.html" class="nav-link">Typography</a></li>
              <li class="nav-item"><a href="util-width.html" class="nav-link">Width</a></li>
              <li class="nav-item"><a href="util-extras.html" class="nav-link">Extras</a></li>
            </ul>
          </div><!-- az-iconbar-pane -->
        </div><!-- az-iconbar-body -->
      </div><!-- az-iconbar-aside -->

      <div class="az-content az-content-dashboard-ten">
        <div class="az-header">
          <div class="container-fluid">
            <div class="az-header-left">
              <a href="#" id="azIconbarShow" class="az-header-menu-icon d-lg-none"><span></span></a>
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
                      <div class="az-img-user"><img src="https://via.placeholder.com/500" alt=""></div>
                      <div class="media-body">
                        <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                        <span>Mar 15 12:32pm</span>
                      </div><!-- media-body -->
                    </div><!-- media -->
                    <div class="media new">
                      <div class="az-img-user online"><img src="https://via.placeholder.com/500" alt=""></div>
                      <div class="media-body">
                        <p><strong>Joyce Chua</strong> just created a new blog post</p>
                        <span>Mar 13 04:16am</span>
                      </div><!-- media-body -->
                    </div><!-- media -->
                    <div class="media">
                      <div class="az-img-user"><img src="https://via.placeholder.com/500" alt=""></div>
                      <div class="media-body">
                        <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                        <span>Mar 13 02:56am</span>
                      </div><!-- media-body -->
                    </div><!-- media -->
                    <div class="media">
                      <div class="az-img-user"><img src="https://via.placeholder.com/500" alt=""></div>
                      <div class="media-body">
                        <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                        <span>Mar 12 10:40pm</span>
                      </div><!-- media-body -->
                    </div><!-- media -->
                  </div><!-- az-notification-list -->
                  <div class="dropdown-footer"><a href="#">View All Notifications</a></div>
                </div><!-- dropdown-menu -->
              </div><!-- az-header-notification -->
               <!-- Authentication Links -->
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
        <div class="container-fluid ht-100p pd-t-0-f">
          <span>&copy; 2018 Azia Responsive Bootstrap 4 Dashboard Template</span>
        </div><!-- container -->
      </div><!-- az-footer -->
    </div><!-- az-content -->

    <script src="{{asset('rsc//lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('rsc//lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('rsc//lib/ionicons/ionicons.js')}}"></script>
    <script src="{{asset('rsc//lib/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{asset('rsc//lib/jquery.flot/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('rsc//lib/jquery.flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('rsc//lib/flot.curvedlines/curvedLines.js')}}"></script>

    <script src="{{asset('rsc//js/azia.js')}}"></script>
    <script src="{{asset('rsc//js/dashboard.sampledata.js')}}"></script>
    <script src="{{asset('rsc//js/chart.flot.sampledata.js')}}"></script>
    <script>
      $(function(){
        'use strict'

        $('.az-iconbar .nav-link').on('click', function(e){
          e.preventDefault();

          $(this).addClass('active');
          $(this).siblings().removeClass('active');

          $('.az-iconbar-aside').addClass('show');

          var targ = $(this).attr('href');
          $(targ).addClass('show');
          $(targ).siblings().removeClass('show');
        });

        $('.az-iconbar-body .with-sub').on('click', function(e){
          e.preventDefault();
          $(this).parent().addClass('show');
          $(this).parent().siblings().removeClass('show');
        });

        $('.az-iconbar-toggle-menu').on('click', function(e){
          e.preventDefault();

          if(window.matchMedia('(min-width: 992px)').matches) {
            $('.az-iconbar .nav-link.active').removeClass('active');
            $('.az-iconbar-aside').removeClass('show');
          } else {
            $('body').removeClass('az-iconbar-show');
          }
        })

        $('#azIconbarShow').on('click', function(e){
          e.preventDefault();
          $('body').toggleClass('az-iconbar-show');

          var targ = $('.az-iconbar .nav-link.active').attr('href');
          $(targ).addClass('show');
        });

        $(document).bind('click touchstart', function(e){
          e.stopPropagation();

          var azContent = $(e.target).closest('.az-content').length;
          var azIconBarMenu = $(e.target).closest('.az-header-menu-icon').length;

          if(azContent) {
            $('.az-iconbar-aside').removeClass('show');

            // for mobile
            if(!azIconBarMenu) {
              $('body').removeClass('az-iconbar-show');
            }
          }
        });

        /******************* THE DASHBOARD CHARTS ARE HERE **************************/

        $.plot('#flotBar1', [{
          data: [[1,0],[2,0],[3,0],[4,1],[5,3],[6,3],[7,10],[8,11],[9,10],[10,9],[11,12],[12,8],[13,10],[14,6],[15,3]],
          bars: {
            show: true,
            lineWidth: 0,
            fillColor: '#dee2e6',
            barWidth: .3,
            order: 'left'
          }
        },{
          data: [[1,0],[2,0],[3,1],[4,2],[5,2],[6,5],[7,8],[8,12],[9,10],[10,11],[11,3]],
          bars: {
            show: true,
            lineWidth: 0,
            fillColor: '#006adb',
            barWidth: .3,
            align: 'right'
          }
        }], {
          grid: {
            borderWidth: 0
          },
          yaxis: {
            min: 0,
            max: 15,
            tickColor: '#ddd',
            ticks: [[0,''],[5,'$500'],[10,'$1000'],[15,'$3000']],
            font: {
              color: '#444',
              size: 10
            }
          },
          xaxis: {
            mode: 'categories',
            tickColor: '#eee',
            ticks: [[0,'3am'],[1,'4am'],[2,'5am'],[3,'6am'],[4,'7am'],[5,'8am'],[6,'9am'],[7,'10am'],[8,'11am'],[9,'12nn'],[10,'1pm'],[11,'2pm'],
          [12,'3pm'],[13,'4pm'],[14,'5pm']],
            font: {
              color: '#999',
              size: 9
            }
          }
        });


        $.plot('#flotLine1', [{
          data: [[1,0],[2,0],[3,0],[4,1],[5,3],[6,3],[7,10],[8,11],[9,12],[10,9],[11,12],[12,8],[13,5],[14,10],[15,11]],
          color: '#ced4da'
        },{
          data: [[1,0],[2,0],[3,1],[4,2],[5,2],[6,5],[7,8],[8,12],[9,9],[10,11],[11,5]],
          color: '#f10075'
        }], {
          series: {
    				shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: 0.12 } ] }
            }
    			},
          grid: {
            borderWidth: 0
          },
          yaxis: {
            min: 0,
            max: 15,
            tickColor: '#ddd',
            ticks: [[0,''],[5,'100K'],[10,'200K'],[15,'300K']],
            font: {
              color: '#444',
              size: 10
            }
          },
          xaxis: {
            mode: 'categories',
            tickColor: '#eee',
            ticks: [[0,'3am'],[1,'4am'],[2,'5am'],[3,'6am'],[4,'7am'],[5,'8am'],[6,'9am'],[7,'10am'],[8,'11am'],[9,'12nn'],[10,'1pm'],[11,'2pm'],
          [12,'3pm'],[13,'4pm'],[14,'5pm']],
            font: {
              color: '#999',
              size: 9
            }
          }
        });

        $.plot('#flotChart1', [{
            data: dashData5,
            color: '#560bd0'
          }], {
    			series: {
    				shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: .5 } ] }
            }
    			},
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
    			yaxis: {
            show: false,
            min: 0,
            max: 60
          },
    			xaxis: { show: false }
    		});

        $.plot('#flotChart2', [{
            data: dashData6,
            color: '#006adb'
          }], {
    			series: {
    				shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: .5 } ] }
            }
    			},
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
    			yaxis: {
            show: false,
            min: 0,
            max: 80
          },
    			xaxis: { show: false }
    		});

        $.plot('#flotChart3', [{
            data: dashData7,
            color: '#00cccc'
          }], {
    			series: {
    				shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: .5 } ] }
            }
    			},
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
    			yaxis: {
            show: false,
            min: 0,
            max: 80
          },
    			xaxis: { show: false }
    		});

        $.plot('#flotChart4', [{
            data: dashData5,
            color: '#f10075'
          }], {
    			series: {
    				shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: .5 } ] }
            }
    			},
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
    			yaxis: {
            show: false,
            min: 0,
            max: 80
          },
    			xaxis: { show: false }
    		});

        $.plot('#flotChart5', [{
            data: dashData6,
            color: '#3bb001'
          }], {
    			series: {
    				shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: .5 } ] }
            }
    			},
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
    			yaxis: {
            show: false,
            min: 0,
            max: 80
          },
    			xaxis: { show: false }
    		});

        $.plot('#flotChart6', [{
            data: dashData7,
            color: '#fd7e14'
          }], {
    			series: {
    				shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 2,
              fill: true,
              fillColor: { colors: [ { opacity: 0 }, { opacity: .5 } ] }
            }
    			},
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
    			yaxis: {
            show: false,
            min: 0,
            max: 80
          },
    			xaxis: { show: false }
    		});

        $.plot('#flotChart7', [{
              data: dashData3,
              color: '#00cccc',
              curvedLines: { apply: true }
          },{
              data: dashData4,
              color: '#560bd0',
              curvedLines: { apply: true }
          }], {
    			series: {
    				shadowSize: 0,
            lines: {
              show: true,
              lineWidth: 0,
              fill: true,
              fillColor: { colors: [ { opacity: .5 }, { opacity: 1 } ] }
            },
            curvedLines: { active: true }
    			},
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
    			yaxis: {
            show: true,
            min: 0,
            max: 50,
            ticks: [[0,''],[10,'100'],[20,'200'],[30,'300']],
            tickColor: '#f3f3f3'
          },
    			xaxis: {
            show: true,
            ticks: [[0,''],[20,'Nov 20'],[40,'Nov 21'],[60,'Nov 22']],
            tickColor: 'rgba(255,255,255,0)'
          }
    		});

        $.plot('#flotChart8', [{
          data: dashData4,
          color: '#3381d6'
        }], {
    			series: {
            bars: {
              show: true,
              lineWidth: 0,
              fill: 1,
              barWidth: .5
            }
    			},
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
    			yaxis: {
            show: true,
            min: 0,
            max: 30,
            ticks: [[0,''],[10,'100'],[20,'200']],
            tickColor: 'rgba(255,255,255,0)'
          },
    			xaxis: {
            show: true,
            max: 40,
            ticks: [[0,''],[15,'Nov 20'],[30,'Nov 21']],
            tickColor: 'rgba(255,255,255,0)'
          }
    		});

        $.plot('#flotChart9', [{
          data: dashData3,
          color: '#fff',
          bars: {
            show: true,
            lineWidth: 0,
            barWidth: .5
          }
        },{
          data: dashData4,
          color: '#fff',
          lines: {
            show: true,
            lineWidth: 2,
            fill: .16
          }
        }], {
          series: {
            shadowSize: 0
          },
          grid: {
            borderWidth: 0,
            labelMargin: 0
          },
    			yaxis: {
            show: true,
            min: 0,
            max: 30,
            ticks: [[0,''],[10,'100'],[20,'200']],
            tickColor: 'rgba(255,255,255,0)'
          },
    			xaxis: {
            show: true,
            max: 40,
            ticks: [[0,''],[15,'Nov 20'],[30,'Nov 21']],
            tickColor: 'rgba(255,255,255,0)'
          }
    		});

        //
      });
    </script>
  </body>

</html>

{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/png" href="{{ url('/images/arifu-02.png') }}"/>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}
