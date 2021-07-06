@extends('layouts.sec')

@section('content')

        <div class="container">
            <section class="mb-5">
                <h6 class="text-primary mb-4">Need a quick admin panel</h6>
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="mb-3">Multi-profile management from one dashboard.</h1>
                        <p class="text-muted">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of  type and scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-sm-6 mb-5 d-flex align-items-center justify-content-center">
                                <span class="h1 mb-0 mr-2 text-primary font-weight-bold">320</span>
                                <span>Increase in <br> Revenu</span>
                            </div>
                            <div class="col-sm-6 mb-5 d-flex align-items-center justify-content-center">
                                <span class="h1 mb-0 mr-2 text-primary font-weight-bold">100</span>
                                <span>Customer <br> Satisfaction</span>
                            </div>
                            <div class="col-sm-6 mb-5 d-flex align-items-center justify-content-center">
                                <span class="h1 mb-0 mr-2 text-primary font-weight-bold">199</span>
                                <span>Happy <br> Clients</span>
                            </div>
                            <div class="col-sm-6 mb-5 d-flex align-items-center justify-content-center">
                                <span class="h1 mb-0 mr-2 text-primary font-weight-bold">240</span>
                                <span>Components <br> & Features</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-5 mb-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-icon feature-icon-lg rounded border text-primary mb-40px">
                            <i class="typcn icon typcn-coffee tx-26"></i>
                        </div>
                        <h5 class="font-weight-bold">Awesome Support</h5>
                        <p class="text-muted mb-20px">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                        <a href="#!" class="text-dark font-weight-bold">Learn more</a>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-icon feature-icon-lg rounded border text-primary mb-40px">
                            <i class="typcn icon typcn-briefcase tx-26"></i>
                        </div>
                        <h5 class="font-weight-bold">Solutions Business</h5>
                        <p class="text-muted mb-20px">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                        <a href="#!" class="text-dark font-weight-bold">Learn more</a>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-icon feature-icon-lg rounded border text-primary mb-40px">
                            <i class="typcn icon typcn-folder-add tx-26"></i>
                        </div>
                        <h5 class="font-weight-bold">Dynamic Growth</h5>
                        <p class="text-muted mb-20px">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                        <a href="#!" class="text-dark font-weight-bold">Learn more</a>
                    </div>
                </div>
            </section>
        </div>

        <section class="lead-landing-section bg-gradient bg-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('rsc/img/content_section/img_5.png')}}" width="535px" alt="analytics" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <h6 class="font-weight-bold text-primary mb-20px mt-3">Need a quick admin panel</h6>
                        <h2 class="font-weight-bold mb-20px">
                            Advanced analytics, <br> easy to understand.
                        </h2>
                        <p class="text-muted mb-20px">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <ul class="list-ckeck-soft mb-30px">
                            <li>Perfect for modern startups</li>
                            <li>Ready to be customized</li>
                        </ul>
                        <button class="btn btn-primary">Learn more</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="lead-landing-section mb-5">
            <div class="container">
                <h6 class="text-primary font-weight-bold">Testimonial</h6>
                <div id="landing-sass-testimonial-carousel" class="landing-sass-testimonial-carousel carousel slide" data-ride="carousel">
                    <div class="d-flex mb-5">
                        <h2 class="font-weight-bold mb-0">what people say about us</h2>
                        <div class="ml-auto d-flex text-gray">
                            <a class="carousel-control-prev text-reset" href="#landing-sass-testimonial-carousel" role="button" data-slide="prev">
                                <i class="typcn icon typcn-arrow-left tx-30"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next text-reset" href="#landing-sass-testimonial-carousel" role="button" data-slide="next">
                                <i class="typcn icon typcn-arrow-right tx-30"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="card">
                                        <div class="card-body p-40px">
                                            <h5>Modern look & trending design</h5>
                                            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor incididunt labore dolore features Lorem.</p>
                                            <div class="media">
                                                <div class="avatar avatar-rounded avatar-lg mr-3">
                                                    <img src="{{asset('rsc/img/avatar/avatar_13.jpg')}}" alt="avatar">
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-0">Mark King</h6>
                                                    <p class="text-muted mb-0">Co Founder Google Pay</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="card">
                                        <div class="card-body p-40px">
                                            <h5>Modern look & trending design</h5>
                                            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor incididunt labore dolore features Lorem.</p>
                                            <div class="media">
                                                <div class="avatar avatar-rounded avatar-lg mr-3">
                                                    <img src="{{asset('rsc/img/avatar/avatar_15.jpg')}}" alt="avatar">
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-0">Mark King</h6>
                                                    <p class="text-muted mb-0">Co Founder Google Pay</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="card">
                                        <div class="card-body p-40px">
                                            <h5>Modern look & trending design</h5>
                                            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor incididunt labore dolore features Lorem.</p>
                                            <div class="media">
                                                <div class="avatar avatar-rounded avatar-lg mr-3">
                                                    <img src="{{asset('rsc/img/avatar/avatar_7.jpg')}}" alt="avatar">
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-0">Mark King</h6>
                                                    <p class="text-muted mb-0">Co Founder Google Pay</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="card">
                                        <div class="card-body p-40px">
                                            <h5>Modern look & trending design</h5>
                                            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor incididunt labore dolore features Lorem.</p>
                                            <div class="media">
                                                <div class="avatar avatar-rounded avatar-lg mr-3">
                                                    <img src="{{asset('rsc/img/avatar/avatar_10.jpg')}}" alt="avatar">
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-0">Mark King</h6>
                                                    <p class="text-muted mb-0">Co Founder Google Pay</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="card">
                                        <div class="card-body p-40px">
                                            <h5>Modern look & trending design</h5>
                                            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor incididunt labore dolore features Lorem.</p>
                                            <div class="media">
                                                <div class="avatar avatar-rounded avatar-lg mr-3">
                                                    <img src="{{asset('rsc/img/avatar/avatar_14.jpg')}}" alt="avatar">
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-0">Mark King</h6>
                                                    <p class="text-muted mb-0">Co Founder Google Pay</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="card">
                                        <div class="card-body p-40px">
                                            <h5>Modern look & trending design</h5>
                                            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor incididunt labore dolore features Lorem.</p>
                                            <div class="media">
                                                <div class="avatar avatar-rounded avatar-lg mr-3">
                                                    <img src="{{asset('rsc/img/avatar/avatar_12.jpg')}}" alt="avatar">
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-0">Mark King</h6>
                                                    <p class="text-muted mb-0">Co Founder Google Pay</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5 mb-5">
            <div class="container">
                <h3 class="text-center mb-40px">Join the 20,000+ companies using the our platform</h3>
                <div class="row">
                    <div class="col-sm-3 mb-20px px-3">
                        <div class="card h-100 d-flex align-items-center justify-content-center p-3 rounded-0">
                            <div class="card-body">
                                <img src="{{asset('rsc/img/Clients/ga.svg')}}" alt="client" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-20px px-3">
                        <div class="card h-100 d-flex align-items-center justify-content-center p-3 rounded-0">
                            <div class="card-body">
                                <img src="{{asset('rsc/img/Clients/zapier.svg')}}" alt="client" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-20px px-3">
                        <div class="card h-100 d-flex align-items-center justify-content-center p-3 rounded-0">
                            <div class="card-body">
                                <img src="{{asset('rsc/img/Clients/square.svg')}}" alt="client" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-20px px-3">
                        <div class="card h-100 d-flex align-items-center justify-content-center p-3 rounded-0">
                            <div class="card-body">
                                <img src="{{asset('rsc/img/Clients/quickbooks.svg')}}" alt="client" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h6 class="text-primary text-center">TYPE SOMETHING</h6>
                        <p class="h1 text-center">Over 50k developers are using our theme</p>
                        <p class="text-gray text-center">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of  type and scrambled</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card border-0 mb-3">
                            <img src="{{asset('rsc/img/dash/dash_1.jpg')}}" alt="blog" class="card-img-top rounded-0">
                            <div class="card-body">
                                <span class="text-muted small font-weight-bold d-inline-block mb-2">22 Dec 2020</span>
                                <h3 class="font-weight-bold">Floating architecture is making waves </h3>
                                <p class="text-gray mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, cupiditate soluta? Animi dolore voluptatem dignissimos vel.</p>
                                <a href="#!" class="font-weight-bold">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0 mb-3">
                            <img src="{{asset('rsc/img/dash/dash_2.jpg')}}" alt="blog" class="card-img-top rounded-0">
                            <div class="card-body">
                                <span class="text-muted small font-weight-bold d-inline-block mb-2">27 Sep 2020</span>
                                <h3 class="font-weight-bold">Learn design with our new course.</h3>
                                <p class="text-gray mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, cupiditate soluta? Animi dolore voluptatem dignissimos vel.</p>
                                <a href="#!" class="font-weight-bold">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


                {{-- <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                            <img viewBox="0 0 651 192" src="{{ asset('images/app/arifu.png')}}" class="h-16 w-auto text-gray-700 sm:h-20">
                        </div>
                    </div>
                    @if (Route::has('login'))
                    <div class="flex items-center">
                        @auth
                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                              <a href="{{ url('/home') }}">Home</a>
                            </div>
                        </div>

                        @else

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                              <a href="{{ url('/login') }}">Login</a>
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                               <a href="{{ route('register') }}">Register</a>
                            </div>
                        </div>
                        @endauth

                    </div>
                    @endif
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div> --}}

                    {{-- <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div> --}}
                {{-- </div> --}}
@endsection
