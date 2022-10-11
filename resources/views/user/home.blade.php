@extends('layouts.base')

@section('content')
<div class="main">

    <!--hero section start-->
    <section class="section section-xl section-header text-white hero-tab-slider gradient-overly-right-color" style="background: url('assets/img/banner-3.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row">
                <div class="owl-carousel owl-theme custom-indicator-slider">
                    <div class="item">
                        <div class="col-md-8 col-lg-7 col-12">
                            <div class="hero-content-wrap">
                                <h1 class="display-2">Planning Your Business & More</h1>
                                <p class="lead">Completely harness extensive testing procedures via ubiquitous
                                    processes. Globally envisioneer cross </p>
                                <ul class="list-unstyled tech-feature-list text-white">
                                    <li class="py-1"><span
                                            class="ti-control-forward mr-2"></span><strong>Accounting</strong>
                                        Procedures Guidebook
                                    </li>
                                    <li class="py-1"><span class="ti-control-forward mr-2"></span><strong>Cost</strong>
                                        Accounting Fundamentals
                                    </li>
                                    <li class="py-1"><span
                                            class="ti-control-forward mr-2"></span><strong>Corporate</strong> Cash
                                        Management
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-secondary mt-3">Get Start Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-md-8 col-lg-7 col-12">
                            <div class="hero-content-wrap">
                                <span class="text-uppercase font-small">For Business Solutions</span>
                                <h1 class="display-2">Your Most Trusted Business Partner</h1>
                                <p class="lead">Holisticly procrastinate mission-critical convergence with reliable
                                    customer service. Assertively underwhelm idea-sharing for impactful solutions. </p>

                                <a href="#" class="btn btn-secondary mt-3">Get Start Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-md-8 col-lg-7 col-12">
                            <div class="hero-content-wrap">
                                <span class="text-uppercase font-small">For Quality Services</span>
                                <h1 class="display-2">We are Creative Digital Agency</h1>
                                <p class="lead">If your WordPress website is your personal business, we
                                    want you to succeed. We made our Hostlar hosting platform.</p>

                                <ul class="list-unstyled tech-feature-list text-white">
                                    <li class="py-1"><span
                                            class="ti-control-forward mr-2"></span><strong>Accounting</strong>
                                        Procedures Guidebook
                                    </li>
                                    <li class="py-1"><span class="ti-control-forward mr-2"></span><strong>Cost</strong>
                                        Accounting Fundamentals
                                    </li>
                                    <li class="py-1"><span
                                            class="ti-control-forward mr-2"></span><strong>Corporate</strong> Cash
                                        Management
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-secondary mt-3">Get Start Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--custom indicator list start-->
        <ul id="carousel-custom-indicator" class="owl-dots list-inline text-center custom-indicators position-absolute bottom-0 w-100 mb-0 d-none d-sm-none d-md-block d-lg-block">
            <li class="list-inline-item">
                <button class="border-0 font-weight-bold d-flex align-items-center"><span
                        class="fas fa-route icon icon-xs mr-2"></span> Marketing
                </button>
            </li>
            <li class="list-inline-item">
                <button class="border-0 font-weight-bold d-flex align-items-center"><span
                        class="fas fa-wallet icon icon-xs mr-2"></span> Finance
                </button>
            </li>
            <li class="list-inline-item">
                <button class="border-0 font-weight-bold d-flex align-items-center"><span
                        class="fas fa-bullhorn icon icon-xs mr-2"></span> Consultation
                </button>
            </li>
        </ul>
        <!--custom indicator list end-->
    </section>
    <!--hero section end-->

    <!--client logos start-->
    <div class="section section-sm border border-bottom border-variant-soft">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <p class="lead">Trusted by over <strong class="text-secondary">4,500+</strong> customers, some of them are here</p>
                    </div>
                </div>
                <div class="col-auto">
                    <ul class="list-unstyled d-flex flex-wrap justify-content-center mb-0">
                        <li class="my-3 mx-3 mx-lg-5">
                            <div class="customer-logo">
                                <img src="{{ asset('assets/img/client-logos/logo1.png') }}" alt="client logo">
                            </div>
                        </li>
                        <li class="my-3 mx-3 mx-lg-5">
                            <div class="customer-logo">
                                <img src="{{ asset('assets/img/client-logos/logo4.png') }}" alt="client logo">
                            </div>
                        </li>
                        <li class="my-3 mx-3 mx-lg-5">
                            <div class="customer-logo">
                                <img src="{{ asset('assets/img/client-logos/logo5.png') }}" alt="client logo">
                            </div>
                        </li>
                        <li class="my-3 mx-3 mx-lg-5">
                            <div class="customer-logo">
                                <img src="{{ asset('assets/img/client-logos/logo6.png') }}" alt="client logo">
                            </div>
                        </li>
                        <li class="my-3 mx-3 mx-lg-5">
                            <div class="customer-logo">
                                <img src="{{ asset('assets/img/client-logos/logo7.png') }}" alt="client logo">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--client logos end-->

    <!--about section start-->
    <section class="section section-lg">
        <div class="container">
            <div class="row row-grid align-items-center">
                <div class="col-12 col-lg-5">
                    <h2>World Class Service Growth Your Business</h2>
                    <p class="lead">Convert your emails into tickets and keep them all organized in one place. Never leave customers' questions unanswered.</p>
                    <ul class="list-unstyled tech-feature-list">
                        <li class="py-1"><span class="icon icon-xs mr-2 text-secondary"> <i class="ti-control-forward"></i></span><strong>Creative</strong> Websites Design</li>
                        <li class="py-1"><span class="icon icon-xs mr-2 text-secondary"> <i class="ti-control-forward"></i></span><strong>Accounting</strong> Procedures Guidebook</li>
                        <li class="py-1"><span class="icon icon-xs mr-2 text-secondary"> <i class="ti-control-forward"></i></span><strong>Cost</strong> Accounting Fundamentals</li>
                        <li class="py-1"><span class="icon icon-xs mr-2 text-secondary"> <i class="ti-control-forward"></i></span><strong>SEO</strong> Optimization Services</li>
                    </ul>

                    <a href="#" class="btn btn-secondary mt-3">View more<span class="icon icon-xs ml-2"><span class="fas fa-arrow-right"></span></span></a>
                </div>
                <div class="col-12 col-lg-6 ml-lg-auto">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="card bg-default text-white shadow-soft rounded mb-4">
                                <div class="px-3 px-lg-4 py-5 text-center">
                                    <span class="icon icon-lg d-block"><i class="fas fa-user-shield"></i></span>
                                    <h5>Customer service</h5>
                                    <p class="mb-0">Create low-effort customer service experiences.</p>
                                </div>
                            </div>
                            <div class="card bg-success text-white shadow-soft rounded mb-4">
                                <div class="px-3 px-lg-4 py-5 text-center">
                                    <span class="icon icon-lg d-block"><i class="fas fa-fire"></i></span>
                                    <h5>Predictive service</h5>
                                    <p class="mb-0">Proactively develop B2B alignments rather.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 pt-lg-4">
                            <div class="card bg-secondary text-white shadow-soft rounded mb-4">
                                <div class="px-3 px-lg-4 py-5 text-center">
                                    <span class="icon icon-lg d-block"><i class="fas fa-lightbulb"></i></span>
                                    <h5>Service to sales</h5>
                                    <p class="mb-0">Progressively brand clicks-and-mortar.</p>
                                </div>
                            </div>
                            <div class="card bg-primary text-white shadow-soft rounded mb-4">
                                <div class="px-3 px-lg-4 py-5 text-center">
                                    <span class="icon icon-lg d-block"><i class="fas fa-shapes"></i></span>
                                    <h5>Make it simple</h5>
                                    <p class="mb-0">Competently evolve user friendly technology.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about section end-->

    <!--features section start-->
    <section class="section section-lg bg-soft ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Best Quality Services</h2>
                        <p class="lead">Efficiently aggregate core competencies without maintainable ideas. Dynamically
                            foster tactical solutions without enabled value.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <!-- Icon box -->
                    <div class="icon-box text-center p-5 border border-variant-soft rounded-custom bg-white shadow-soft">
                        <div class="card-icon mb-4">
                            <img src="{{ asset('assets/img/icon/icon-2.svg') }}" alt="icon" width="60" class="img-fluid">
                        </div>
                        <h2 class="h5">Financial Planning</h2>
                        <p class="mb-0">You can never go wrong with our own top-notch dedicated with communities services</p>
                    </div>
                    <!-- End of Icon box -->
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <!-- Icon box -->
                    <div class="icon-box text-center p-5 border border-variant-soft rounded-custom bg-white shadow-soft">
                        <div class="card-icon mb-4">
                            <img src="{{ asset('assets/img/icon/icon-1.svg') }}" alt="icon" width="60" class="img-fluid">
                        </div>
                        <h2 class="h5">Business Growth</h2>
                        <p class="mb-0">We can guarantee an excellent experience and loading time for your successful</p>
                    </div>
                    <!-- End of Icon box -->
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <!-- Icon box -->
                    <div class="icon-box text-center p-5 border border-variant-soft rounded-custom bg-white shadow-soft">
                        <div class="card-icon mb-4">
                            <img src="{{ asset('assets/img/icon/icon-3.svg') }}" alt="icon" width="60" class="img-fluid">
                        </div>
                        <h2 class="h5">Saving Strategy</h2>
                        <p class="mb-0">With full root access you will be able to take full control of your server very easy</p>
                    </div>
                    <!-- End of Icon box -->
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <!-- Icon box -->
                    <div class="icon-box text-center p-5 border border-variant-soft rounded-custom bg-white shadow-soft">
                        <div class="card-icon mb-4">
                            <img src="{{ asset('assets/img/icon/icon-4.svg') }}" alt="icon" width="60" class="img-fluid">
                        </div>
                        <h2 class="h5">Marketing Solutions</h2>
                        <p class="mb-0">Our VPS hosting plan is fully packed with dedicated IPv6 Internet protocol IP</p>
                    </div>
                    <!-- End of Icon box -->
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 mb-md-0">
                    <!-- Icon box -->
                    <div class="icon-box text-center p-5 border border-variant-soft rounded-custom bg-white shadow-soft">
                        <div class="card-icon mb-4">
                            <img src="{{ asset('assets/img/icon/icon-6.svg') }}" alt="icon" width="60" class="img-fluid">
                        </div>
                        <h2 class="h5">Total SEO Solutions</h2>
                        <p class="mb-0">If you’re not 100% satisfied with Hostlar, we’ll refund your payment no risk</p>
                    </div>
                    <!-- End of Icon box -->
                </div>
                <div class="col-md-6 col-lg-4 mb-lg-0 mb-md-0">
                    <!-- Icon box -->
                    <div class="icon-box text-center p-5 border border-variant-soft rounded-custom bg-white shadow-soft">
                        <div class="card-icon mb-4">
                            <img src="{{ asset('assets/img/icon/icon-8.svg') }}" alt="icon" width="60" class="img-fluid">
                        </div>
                        <h2 class="h5">Business Security</h2>
                        <p class="mb-0">One of many premium features is a dedicated IP cheapest VPS hosting plan</p>
                    </div>
                    <!-- End of Icon box -->
                </div>
            </div>
        </div>
    </section>
    <!--features section end-->

    <!--cta section start-->
    <section class="section py-0" style="background: url('assets/img/hero-bg11.jpg')no-repeat center fixed">
        <div class="section-lg section bg-gradient-primary text-white  ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-9 col-md-10 col-lg-9">
                        <div class="section-title text-center mb-5">
                            <h2>Download Our Business Apps</h2>
                            <p class="lead">Building your Apps helps attract more potential clients. Our integrated marketing team will promote enabled internal or work high-impact convergence.</p>
                        </div>
                        <div class="download-btn-wrap text-center">
                            <a class="btn btn-pill border border-variant-light  text-white  shadow-hover mr-md-3 mb-4 mb-md-3 mb-lg-0" href="#">
                                <div class="d-flex align-items-center">
                                    <span class="icon icon-md mr-3 h-auto"><i class="fab fa-apple"></i></span>
                                    <div class="d-block text-left">
                                        <small class="font-small ">Download on the</small>
                                        <div class="h6 mb-0">App Store</div>
                                    </div>
                                </div>
                            </a>
                            <a class="btn btn-pill border border-variant-light  text-white  shadow-hover mr-md-3 mb-4 mb-md-3 mb-lg-0" href="#">
                                <div class="d-flex align-items-center">
                                    <span class="icon icon-md mr-3 h-auto"><i class="fab fa-google-play"></i></span>
                                    <div class="d-block text-left">
                                        <small class="font-small ">Download on the</small>
                                        <div class="h6 mb-0">Google Play</div>
                                    </div>
                                </div>
                            </a>
                            <a class="btn btn-pill border border-variant-light  text-white  shadow-hover" href="#">
                                <div class="d-flex align-items-center">
                                    <span class="icon icon-md mr-3 h-auto"><i class="fab fa-windows"></i></span>
                                    <div class="d-block text-left">
                                        <small class="font-small ">Download on the</small>
                                        <div class="h6 mb-0">Windows</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--cta section end-->

    <!--blog section start-->
    <section class="section section-lg ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Our Latest News</h2>
                        <p class="lead">Dynamically pursue reliable convergence rather than 24/7 process improvements
                            develop end-to-end customer service.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-4 mb-lg-0 mb-4">
                    <div class="card bg-white border-variant-soft shadow-soft">
                        <div class="blog-img position-relative">
                            <img src="{{ asset('assets/img/blog/4.jpg') }}" class="card-img-top rounded-top" alt="themetags office">
                            <a href="#" class="position-absolute category-text small badge badge-secondary">SEO, Analytics</a>
                        </div>
                        <div class="card-body">
                            <div class="media d-flex align-items-center justify-content-between">
                                <div class="post-group">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="23k followers">
                                        <img class="avatar avatar-xs mr-2 img-fluid rounded-circle border border-variant-primary p-1" src="{{ asset('assets/img/clients/client-1.jpg') }}" alt="admin"> <span class="small">Admin</span>
                                    </a>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="small"><span class="far fa-calendar-alt mr-2"></span>15 March 2020</span>
                                </div>
                            </div>
                            <h3 class="h5 card-title mt-3"><a href="#">Holisticly promote enabled</a></h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="services-details.html" class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read more <span> <i class="fas fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-4 mb-lg-0 mb-4">
                    <div class="card bg-white border-variant-soft shadow-soft">
                        <div class="blog-img position-relative">
                            <img src="{{ asset('assets/img/blog/2.jpg') }}" class="card-img-top rounded-top" alt="themetags office">
                            <a href="#" class="position-absolute category-text small badge badge-secondary">Marketing</a>
                        </div>
                        <div class="card-body">
                            <div class="media d-flex align-items-center justify-content-between">
                                <div class="post-group">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="23k followers">
                                        <img class="avatar avatar-xs mr-2 img-fluid rounded-circle border border-variant-primary p-1" src="{{ asset('assets/img/clients/client-2.jpg') }}" alt="admin"> <span class="small">Writer</span>
                                    </a>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="small"><span class="far fa-calendar-alt mr-2"></span>15 March 2020</span>
                                </div>
                            </div>
                            <h3 class="h5 card-title mt-3"><a href="#">Authoritatively unleash fully</a></h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="services-details.html" class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read more <span> <i class="fas fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-4 mb-lg-0 mb-4">
                    <div class="card bg-white border-variant-soft shadow-soft">
                        <div class="blog-img position-relative">
                            <img src="{{ asset('assets/img/blog/1.jpg') }}" class="card-img-top rounded-top" alt="themetags office">
                            <a href="#" class="position-absolute category-text small badge badge-secondary">Business</a>
                        </div>
                        <div class="card-body">
                            <div class="media d-flex align-items-center justify-content-between">
                                <div class="post-group">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="23k followers">
                                        <img class="avatar avatar-xs mr-2 img-fluid rounded-circle border border-variant-primary p-1" src="{{ asset('assets/img/clients/client-5.jpg') }}" alt="admin"> <span class="small">Joe B</span>
                                    </a>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="small"><span class="far fa-calendar-alt mr-2"></span>15 March 2020</span>
                                </div>
                            </div>
                            <h3 class="h5 card-title mt-3"><a href="#">We partnered up with Google</a></h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="services-details.html" class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read more <span> <i class="fas fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog section end-->

    <!--testimonial section start-->
    <section class="section section-lg  bg-primary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading mb-5 text-center text-white">
                        <h2>What Clients Say About Us</h2>
                        <p class="lead">
                            Rapidiously morph transparent internal or "organic" sources whereas resource sucking
                            e-business innovate compelling internal.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="owl-carousel owl-theme client-testimonial custom-dot">
                        <div class="item">
                            <div class="testimonial-single shadow-sm bg-white rounded-custom p-5">
                                <div class="quotation mb-4">
                                    <span class="icon icon-md icon-lg  icon-light "><i class="fas fa-quote-left"></i></span>
                                </div>
                                <blockquote class="blockquote">
                                    Assertively procrastinate distributed relationships whereas equity invested intellectual capital everything energistically underwhelm proactive.
                                </blockquote>
                                <div class="d-flex justify-content-md-between justify-content-lg-between align-items-center pt-3">
                                    <div class="media align-items-center">
                                        <img src="{{ asset('assets/img/team/team-4.jpg') }}" alt="team" class="avatar avatar-sm mr-3">
                                        <div class="media-body">
                                            <h6 class="mb-0">Kyan Boards</h6>
                                            <small>CEO, ThemeTags</small>
                                        </div>
                                    </div>
                                    <div class="client-ratting d-none d-md-block d-lg-block">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                            <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                            <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                            <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                            <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                        </ul>
                                        <span class="font-weight-bold small">5.0 <span class="font-weight-lighter">Out of 5</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-single shadow-sm bg-white rounded-custom p-5">
                                <div class="quotation mb-4">
                                    <span class="icon icon-md icon-lg  icon-light "><i class="fas fa-quote-left"></i></span>
                                </div>
                                <blockquote class="blockquote">
                                    Intrinsicly facilitate functional imperatives without next-generation services. Compellingly revolutionize worldwide users enterprise best practices.
                                </blockquote>
                                <div class="d-flex justify-content-md-between justify-content-lg-between align-items-center pt-3">
                                    <div class="media align-items-center">
                                        <img src="{{ asset('assets/img/team/team-1.jpg') }}" alt="team" class="avatar avatar-sm mr-3">
                                        <div class="media-body">
                                            <h6 class="mb-0">Pirtle Karol</h6>
                                            <small>Team Leader, ThemeTags</small>
                                        </div>
                                    </div>
                                    <div class="client-ratting d-none d-md-block d-lg-block">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                            <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                            <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                            <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                            <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                        </ul>
                                        <span class="font-weight-bold small">5.0 <span class="font-weight-lighter">Out of 5</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-single shadow-sm bg-white rounded-custom p-5">
                                <div class="quotation mb-4">
                                    <span class="icon icon-md icon-lg  icon-light "><i class="fas fa-quote-left"></i></span>
                                </div>
                                <blockquote class="blockquote">
                                    Assertively procrastinate distributed relationships whereas equity invested intellectual capital everything energistically underwhelm proactive.
                                </blockquote>
                                <div class="d-flex justify-content-md-between justify-content-lg-between align-items-center pt-3">
                                    <div class="media align-items-center">
                                        <img src="{{ asset('assets/img/team/team-2.jpg') }}" alt="team" class="avatar avatar-sm mr-3">
                                        <div class="media-body">
                                            <h6 class="mb-0">Kyan Boards</h6>
                                            <small>CEO, ThemeTags</small>
                                        </div>
                                    </div>
                                    <div class="client-ratting d-none d-md-block d-lg-block">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                            <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                            <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                            <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                            <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                        </ul>
                                        <span class="font-weight-bold small">5.0 <span class="font-weight-lighter">Out of 5</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-single shadow-sm bg-white rounded-custom p-5">
                                <div class="quotation mb-4">
                                    <span class="icon icon-md icon-lg  icon-light "><i class="fas fa-quote-left"></i></span>
                                </div>
                                <blockquote class="blockquote">
                                    Intrinsicly facilitate functional imperatives without next-generation services. Compellingly revolutionize worldwide users enterprise best practices.
                                </blockquote>
                                <div class="d-flex justify-content-md-between justify-content-lg-between align-items-center pt-3">
                                    <div class="media align-items-center">
                                        <img src="{{ asset('assets/img/team/team-6.jpg') }}" alt="team" class="avatar avatar-sm mr-3">
                                        <div class="media-body">
                                            <h6 class="mb-0">Pirtle Karol</h6>
                                            <small>Team Leader, ThemeTags</small>
                                        </div>
                                    </div>
                                    <div class="client-ratting d-none d-md-block d-lg-block">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                            <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                            <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                            <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                            <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                        </ul>
                                        <span class="font-weight-bold small">5.0 <span class="font-weight-lighter">Out of 5</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--testimonial section end-->

    <!--team section start-->
    <section class="section section-lg ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Our Team</h2>
                        <p class="lead">Dynamically pursue reliable convergence rather than 24/7 process improvements
                            develop end-to-end customer service.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mb-md-4 mb-lg-0 mb-4">
                    <div class="profile-card">
                        <div class="card bg-soft  shadow-sm animate-hover border-variant-soft">
                            <div class="profile-image-small  bg-white  shadow-inset shadow border border-light rounded-circle p-1 mt-5 mb-4">
                                <img src="{{ asset('assets/img/team/team-6.jpg') }}" class="card-img-top rounded-circle" alt="Christopher Avatar">
                            </div>
                            <div class="card-body text-center px-5 pb-5 pt-0">
                                <h3 class="h5 mb-2">John Q. Public</h3>
                                <span class="h6 font-weight-normal text-gray mb-3">Developer</span>
                                <ul class="list-unstyled d-flex my-3 justify-content-center">
                                    <li>
                                        <a href="#" target="_blank" aria-label="facebook social link" class="icon icon-xs icon-facebook mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="50k Like">
                                            <span class="fab fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="twitter social link" class="icon icon-xs icon-twitter mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="40k Followers">
                                            <span class="fab fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="slack social link" class="icon icon-xs icon-slack mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="25k Subscribe">
                                            <span class="fab fa-youtube"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="dribbble social link" class="icon icon-xs icon-dribbble mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="2k Project">
                                            <span class="fab fa-dribbble"></span>
                                        </a>
                                    </li>
                                </ul>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-md-4 mb-lg-0 mb-4">
                    <div class="profile-card">
                        <div class="card bg-soft  shadow-sm animate-hover border-variant-soft">
                            <div class="profile-image-small  bg-white  shadow-inset shadow border border-light rounded-circle p-1 mt-5 mb-4">
                                <img src="{{ asset('assets/img/team/team-1.jpg') }}" class="card-img-top rounded-circle" alt="Christopher Avatar">
                            </div>
                            <div class="card-body text-center px-5 pb-5 pt-0">
                                <h3 class="h5 mb-2">Madurai Mani Iyer</h3>
                                <span class="h6 font-weight-normal text-gray mb-3">Developer</span>
                                <ul class="list-unstyled d-flex my-3 justify-content-center">
                                    <li>
                                        <a href="#" target="_blank" aria-label="facebook social link" class="icon icon-xs icon-facebook mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="50k Like">
                                            <span class="fab fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="twitter social link" class="icon icon-xs icon-twitter mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="40k Followers">
                                            <span class="fab fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="slack social link" class="icon icon-xs icon-slack mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="25k Subscribe">
                                            <span class="fab fa-youtube"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="dribbble social link" class="icon icon-xs icon-dribbble mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="2k Project">
                                            <span class="fab fa-dribbble"></span>
                                        </a>
                                    </li>
                                </ul>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-md-4 mb-lg-0 mb-4">
                    <div class="profile-card">
                        <div class="card bg-soft  shadow-sm animate-hover border-variant-soft">
                            <div class="profile-image-small  bg-white  shadow-inset shadow border border-light rounded-circle p-1 mt-5 mb-4">
                                <img src="{{ asset('assets/img/team/team-4.jpg') }}" class="card-img-top rounded-circle" alt="Christopher Avatar">
                            </div>
                            <div class="card-body text-center px-5 pb-5 pt-0">
                                <h3 class="h5 mb-2">Maria J. Go</h3>
                                <span class="h6 font-weight-normal text-gray mb-3">Developer</span>
                                <ul class="list-unstyled d-flex my-3 justify-content-center">
                                    <li>
                                        <a href="#" target="_blank" aria-label="facebook social link" class="icon icon-xs icon-facebook mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="50k Like">
                                            <span class="fab fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="twitter social link" class="icon icon-xs icon-twitter mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="40k Followers">
                                            <span class="fab fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="slack social link" class="icon icon-xs icon-slack mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="25k Subscribe">
                                            <span class="fab fa-youtube"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" aria-label="dribbble social link" class="icon icon-xs icon-dribbble mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="2k Project">
                                            <span class="fab fa-dribbble"></span>
                                        </a>
                                    </li>
                                </ul>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--team section end-->

    <!--cta section start-->
    <section class="section section-sm bg-soft">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-7 text-center">
                    <div class="subscribe-content">
                        <span class="modal-icon icon icon-lg text-primary d-none d-md-block d-lg-block"><i class="fas fa-envelope-open-text"></i></span>
                        <h2 class="h4 modal-title my-2">Join our 3,45,441 subscribers</h2>
                        <p class="mb-4">Get exclusive access to freebies, premium products and news.</p>
                    </div>
                    <div class="form-group">
                        <div class="d-sm-flex flex-column flex-sm-row mb-3 justify-content-center">
                            <input type="text" id="inputYourMail" placeholder="Enter your email address here" class="mr-sm-1 mb-2 mb-sm-0 form-control form-control-lg">
                            <button type="submit" class="ml-sm-1 btn btn-secondary">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--cta section end-->

</div>
@endsection