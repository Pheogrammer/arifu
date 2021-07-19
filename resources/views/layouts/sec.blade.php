<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{asset('rsc/css/azia.css')}}">

    <link href="{{asset('rsc/lib/typicons.font/typicons.css')}}" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand tx-22 text-danger font-weight-bold" href="#">
                        <img src="{{asset('images/app/arifu00.png')}}" alt="Arifu" width="100px" srcset="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#leadUIMainNav"
                    aria-controls="leadUIMainNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="typcn icon typcn-th-menu tx-26"></i>
                </button>
                <div class="collapse navbar-collapse" id="leadUIMainNav">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Components</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Resources</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FAQ</a>
                        </li>
                    </ul>
                    <div class="form-inline">
                        <button class="btn btn-outline-light">Sign up</button>
                    </div>
                </div>
            </div>
        </nav>
        <div class="landing-sass-header-content bg-dark">
            <div class="container">
                <h1 class="text-center font-weight-bold pt-5 pb-30px mb-0 text-white">Create a beautiful & awesome marketing <br> website and landing page</h1>
                <div class="text-center mb-5 "><button class="btn btn-light mr-3">Get started</button><button class="btn btn-outline-light">Demo video</button></div>
            </div>
        </div>
        <div class="text-center landing-sass-header-img-wrapper"><img src="{{asset('rsc/img/dash/dash_3.png')}}" alt="header-img" class="img-fluid" width="707px"></div>
    </header>

    <main>
        @yield('content')
    </main>
    <div class="container pb-5">
        <footer class="lead-footer shadow px-5 py-3">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="footer-brand-wrapper tx-22 font-weight-bold">AZIA</div>
                    <p class="pb-2 mb-4">Premium Support. Join over 40,000 satisfied customers who use Medium Rare
                        templates.</p>
                </div>
                <div class="col-lg-5 ml-md-auto">
                    <div class="row">
                        <div class="col-sm">
                            <nav class="nav footer-nav nav-vertical my-4 my-md-0">
                                <a href="#!" class="nav-link">Profile</a>
                                <a href="#!" class="nav-link">Settings</a>
                                <a href="#!" class="nav-link">Billing</a>
                                <a href="#!" class="nav-link">Notifications</a>
                            </nav>
                        </div>
                        <div class="col-sm">
                            <nav class="nav footer-nav nav-vertical my-4 my-md-0">
                                <a href="#!" class="nav-link">Services</a>
                                <a href="#!" class="nav-link">Pricing</a>
                                <a href="#!" class="nav-link">Contact</a>
                                <a href="#!" class="nav-link">Careers</a>
                            </nav>
                        </div>
                        <div class="col-sm">
                            <nav class="nav footer-nav nav-vertical my-4 my-md-0">
                                <a href="#!" class="nav-link">Community</a>
                                <a href="#!" class="nav-link">Help center</a>
                                <a href="#!" class="nav-link">Support</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex flex-column flex-sm-row flex-wrap justify-content-between mt-4">
                    <nav class="lead-social-menu mb-4 mb-sm-0">
                        <a href="#!"><i class="typcn icon typcn-social-twitter tx-20 text-dark"></i></a>
                        <a href="#!"><i class="typcn icon typcn-social-facebook tx-20 text-dark"></i></a>
                        <a href="#!"><i class="typcn icon typcn-social-linkedin tx-20 text-dark"></i></a>
                        <a href="#!"><i class="typcn icon typcn-social-instagram tx-20 text-dark"></i></a>
                    </nav>
                    <p class="footer-text text-gray order-sm-first">©2020 Lead. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
    <script src="{{asset('rsc/lib/jquery/jquery.min.js')}}"></script>
    {{-- <!-- <script src="{{asset('rsc/src/vendors/popper.js/popper.min.js')}}"></script> --> --}}
    <script src="{{asset('rsc/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    {{-- <!-- <script src="{{asset('rsc/js/lead-ui-kit.js')}}"></script> --> --}}
</body>
</html>
