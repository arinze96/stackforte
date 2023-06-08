<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stackforte Finance</title>
    @include('include.home_css')

</head>

<body>

    <div class="body-inner">

        @include('include.home_header')

        <div id="main-slide" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators visible-lg visible-md">
                <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                <li data-target="#main-slide" data-slide-to="1"></li>
                <li data-target="#main-slide" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">

                <div class="carousel-item active"
                    style="background-image:url({{ asset('all/images/slider/bb3.jpg') }})">
                    <div class="container">
                        <div class="slider-content text-left">
                            <div class="col-md-12">
                                <h2 class="slide-title-classic animated3"> Empowering Your Trading <br> Journey in the
                                    Global Currency Market</h2>
                                <p class="slider-description lead animated3">Your security is our top priority.
                                    Stackforte Finance employs industry-leading encryption and security measures to
                                    safeguard
                                    your funds and personal information. We partner with trusted and regulated brokers
                                    to ensure a safe and reliable trading environment.</p>
                                <p class="animated3">
                                    <a href="{{ route('user.register') }}" class="slider btn btn-primary">Get
                                        Started</a>
                                    <a href="{{ route('user.contact') }}" class="slider btn btn-border">Contact Us</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" style="background-image:url({{ asset('all/images/slider/bg3.jpg') }})">
                    <div class="container">
                        <div class="slider-content text-center">
                            <div class="col-md-12">
                                <h3 class="slide-sub-title animated3">Living the dream is a state of mind. <br /> Start
                                    a plan that fit with you.</h3>
                                <p class="animated3">
                                    <a href="{{ route('user.register') }}" class="slider btn btn-primary">Get
                                        Started</a>
                                    <a href="{{ route('user.contact') }}" class="slider btn btn-border">Contact Us</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="carousel-item" style="background-image:url({{ asset('all/images/slider/bg2.jpg') }})">
                    <div class="container">
                        <div class="slider-content text-left">
                            <div class="col-md-12">
                                <h2 class="slide-title-classic animated3">Enabling businesses to <br /> secure your
                                    family.</h2>
                                <p class="slider-description lead animated3">Nobody’s more committed to connecting you
                                    with the exceptional <br /> top talents with the right fit for your business than
                                    us.</p>
                                <p class="animated3">
                                    <a href="#" class="slider btn btn-primary">Our Services</a>
                                    <a href="#" class="slider btn btn-border">Contact Us</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <a class="left carousel-control carousel-item-left" href="#main-slide" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
            </a>
            <a class="right carousel-control carousel-item-right" href="#main-slide" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
            </a>
        </div>

        <section class="ts-features-round no-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 ts-feature-box-round"
                        style="background-image: url({{ asset('all/images/features/feature1.jpg') }});">
                        <div class="feature-info">
                            <i class="icon icon-employee"></i>
                            <h3 class="feature-title">500+ Employees worldwide</h3>
                            <p>Give you personal advise</p>
                        </div>
                    </div>

                    <div class="col-md-4 ts-feature-box-round highlight"
                        style="background-image: url({{ asset('all/images/features/feature2.jpg') }});">
                        <div class="feature-info">
                            <i class="icon icon-balloon"></i>
                            <h3 class="feature-title">25 years in this business</h3>
                            <p>with Proud and Success</p>
                        </div>
                    </div>

                    <div class="col-md-4 ts-feature-box-round"
                        style="background-image: url({{ asset('all/images/features/feature3.jpg') }});">
                        <div class="feature-info">
                            <i class="icon icon-community"></i>
                            <h3 class="feature-title">100+ Community Involvement</h3>
                            <p>with 150+ Active Volunteers</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ts-intro">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <h4 class="column-title"><span>Who we are</span>
                            <h4>ABOUT OUR COMPANY</h4>
                        </h4>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="intro-details">
                            <div class="border-left-long">
                                <span class="border-long"></span>
                            </div>
                            <p class="lead">
                                Stackforte Finance Has Developed A Proprietary Trade
                                Strategy Which Has Proven To Give Our Clients Consistent Gains While Protecting Initial
                                Capital Investment.
                                We have established our presence in the USA and UAE through out the globe by setting a
                                standard of excellence. We strive for utmost excellence by researching all news feeds
                                and charting daily to incorporate strategic moves into our trades . We take pride in our
                                transparency and efficiency, giving our clients full access to our trading history,
                                track records and results.
                            </p>
                            <p><a class="btn btn-primary" href="{{ route('about') }}"> Read More</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="about-feature" class="about-feature solid-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="section-title-dash">
                            Why we are Different<span>&nbsp;</span>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 text-center">
                        <div class="about-feature-box-single">
                            <div class="feature-img-box ">
                                <div class="feature-img-content">
                                    <img class="img-fluid"
                                        src="{{ asset('all/images/icon-image/why-different1.png') }}" alt="">
                                </div>
                                <div class="feature-content">
                                    <h3>Porfolio management</h3>
                                    <p>Collaborate with our dedicated professional portfolio managers who will work with
                                        you and for you, providing clear recommendations designed to help you grow and
                                        protect your portfolio</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="about-feature-box-single">
                            <div class="feature-img-box ">
                                <div class="feature-img-content">
                                    <img class="img-fluid"
                                        src="{{ asset('all/images/icon-image/why-different2.png') }}" alt="">
                                </div>
                                <div class="feature-content">
                                    <h3>Retirement Planning
                                    </h3>
                                    <p>Get professional retirement plan with our low-cost advisor solutions, with access
                                        to advisors when needed. Retirement planning is the process of determining
                                        retirement income goals.

                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="about-feature-box-single">
                            <div class="feature-img-box ">
                                <div class="feature-img-content">
                                    <img class="img-fluid"
                                        src="{{ asset('all/images/icon-image/why-different3.png') }}" alt="">
                                </div>
                                <div class="feature-content">
                                    <h3>Digital Tokenization</h3>
                                    <p>Our technology allows for non-blockchain related companies to fractionally sell
                                        equity in their business, or shares in crop futures, opening a new market for
                                        investors hungry to tap into the booming blockhain industry.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ts-intro">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <img class="img-fluid" src="{{ asset('all/images/nft.jpeg') }}" alt=""
                            style='width: 100%; height: 100%'>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="intro-details">
                            <div class="border-left-long">
                                <span class="border-long"></span>
                            </div>
                            <h3>NFT COMING SOON</h3>
                            <p class="lead">
                                Stackforte Finance Is Developing Proprietary Trade Strategy Which Intends To Hang Its
                                Operations On The Real-Estate-Nature Of Non-Fungible Token And Its Advantages/Advances
                                Due To The 21st Century Blockchain Technology
                            </p>
                            <p><a class="btn btn-primary" href="{{ route('about') }}"> Read More</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <section id="ts-cta-area" class="ts-cta-area ts-cta-bg bg-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="cta-img-box-left">
                            <div class="cta-img-content">
                                <img class="pull-left" src="{{ asset('all/images/icon-image/cta-1.png') }}"
                                    alt="">
                            </div>
                            <div class="cta-content text-white">
                                <h3 class="text-white">ABOUT OUR PROCESS</h3>
                                <h1 style="color: white">Easy Access</h1>
                                <p>We take advantage of algorithms and smart assistants to identify business
                                    relationships automated.We add diversification to your investment portfolio by
                                    investing in our products with ease and transparency.</p>
                                <p>
                                    <a class="btn btn-dark" href="{{ route('user.register') }}">REGISTER</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 ml-lg-auto">
                        <div class="cta-img-box-right text-white">
                            <div class="cta-img-content">
                                <img class="pull-left" src="{{ asset('all/images/icon-image/cta-2.png') }}"
                                    alt="">
                            </div>
                            <div class="cta-content last">
                                <a href="{{ route('investments') }}">
                                    <div class="toll-free-cta">
                                        <h3>CHOOSE A PLAN</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="ts-choose-us" class="ts-choose-us">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2 data-title="Why Choose Us" class="section-title-dash"> Why Choose Us <span
                                class="dashborder">&nbsp;</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-12">
                        <div class="ts-feature-classic ">
                            <div class="ts-feature-info icon-left icon-round">
                                <span class="feature-icon">
                                    <i class="icon icon-consult"></i>
                                </span>
                                <div class="feature-content">
                                    <h3 class="ts-feature-title">24/7 Support</h3>
                                    <p>We provide great cover for backpackers, gap years takers</p>
                                </div>
                            </div>
                        </div>
                        <div class="ts-feature-classic ">
                            <div class="ts-feature-info icon-left icon-round">
                                <span class="feature-icon">
                                    <i class="icon icon-funnel"></i>
                                </span>
                                <div class="feature-content">
                                    <h3 class="ts-feature-title">25 Years of experience</h3>
                                    <p>We provide great cover for backpackers, gap years takers</p>
                                </div>
                            </div>
                        </div>
                        <div class="ts-feature-classic ">
                            <div class="ts-feature-info icon-left icon-round">
                                <span class="feature-icon">
                                    <i class="icon icon-chart22"></i>
                                </span>
                                <div class="feature-content">
                                    <h3 class="ts-feature-title">Growing your business</h3>
                                    <p>We provide great cover for backpackers, gap years takers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="ts-feature-classic ">
                            <div class="ts-feature-info icon-left icon-round">
                                <span class="feature-icon">
                                    <i class="icon icon-community"></i>
                                </span>
                                <div class="feature-content">
                                    <h3 class="ts-feature-title">Dedicated Team member</h3>
                                    <p>We provide great cover for backpackers, gap years takers</p>
                                </div>
                            </div>
                        </div>
                        <div class="ts-feature-classic ">
                            <div class="ts-feature-info icon-left icon-round">
                                <span class="feature-icon">
                                    <i class="icon icon-target"></i>
                                </span>
                                <div class="feature-content">
                                    <h3 class="ts-feature-title">Privacy
                                    </h3>
                                    <p>Stackforte Finance is fully compliant with PCI Data Security Standards. We encrypt and
                                        protect your information, so you never need to worry.</p>
                                </div>
                            </div>
                        </div>
                        <div class="ts-feature-classic ">
                            <div class="ts-feature-info icon-left icon-round">
                                <span class="feature-icon">
                                    <i class="icon icon-love"></i>
                                </span>
                                <div class="feature-content">
                                    <h3 class="ts-feature-title">Security</h3>
                                    <p>Your funds are safe and sound, kept in segregated bank accounts and protected by
                                        industry-leading security protocols.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12">
                        <div class="choose-us-img">
                            <img src="{{ asset('all/images/why-choose-us.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="ts-facts-area" class="ts-facts-area padtb-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7 col-md-12 funfacts-bg no-padding">
                        <img src="{{ asset('all/images/facts/facts-bg.png') }}" alt="">
                        <div class="heading">
                            <div class="column-title">
                                <h3>Prop Trader 2019</h3>
                            </div>
                            <p>We cover trips up to 12 month long with the option to next year have five children in
                                colleghig.</p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 facts-overlay" style="background-color: black">
                        <div class="facts-wrapper">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="ts-facts">
                                        <span class="facts-icon"><i class="fa fa-briefcase"></i></span>
                                        <div class="ts-facts-num">
                                            <h3 class="funfact"><span class="counterUp">370</span></h3>
                                        </div>
                                        <p>Active Expert Traders</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="ts-facts">
                                        <span class="facts-icon"><i class="icon icon-users"></i></span>
                                        <div class="ts-facts-num">
                                            <h3 class="funfact"><span class="counterUp">900</span></h3>
                                        </div>
                                        <p>Expert Financial Consultants</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="ts-facts">
                                        <span class="facts-icon"><i class="fa fa-trophy"></i></span>
                                        <div class="ts-facts-num">
                                            <h3 class="funfact"><span class="counterUp">85</span></h3>
                                        </div>
                                        <p>Satisfied Clients</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="ts-facts">
                                        <span class="facts-icon"><i class="icon icon-graphic-2"></i></span>
                                        <div class="ts-facts-num">
                                            <h3 class="funfact"><span class="counterUp">50</span></h3>
                                        </div>
                                        <p>Reviews
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about-feature" class="about-feature solid-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="section-title-dash">
                            Our Products and Services<span>&nbsp;</span>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 text-center">
                        <div class="about-feature-box-single">
                            <div class="feature-img-box ">
                                <div class="feature-img-content">
                                    <img class="img-fluid"
                                        src="{{ asset('all/images/icon-image/why-different3.png') }}" alt="" style="width: 40px; height: 40px">
                                </div>
                                <div class="feature-content">
                                    <h3>Porfolio management</h3>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="about-feature-box-single">
                            <div class="feature-img-box ">
                                <div class="feature-img-content">
                                    <img class="img-fluid"
                                        src="{{ asset('all/images/icon-image/why-different3.png') }}" alt="" style="width: 40px; height: 40px">
                                </div>
                                <div class="feature-content">
                                    <h3>Cryptocurrency Minning
                                    </h3>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="about-feature-box-single">
                            <div class="feature-img-box ">
                                <div class="feature-img-content">
                                    <img class="img-fluid"
                                        src="{{ asset('all/images/icon-image/why-different3.png') }}" alt="" style="width: 40px; height: 40px">
                                </div>
                                <div class="feature-content">
                                    <h3>Oil and Gas</h3>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center" style="margin-top: 30px">
                        <div class="about-feature-box-single">
                            <div class="feature-img-box ">
                                <div class="feature-img-content">
                                    <img class="img-fluid"
                                        src="{{ asset('all/images/icon-image/why-different3.png') }}" alt="" style="width: 40px; height: 40px">
                                </div>
                                <div class="feature-content">
                                    <h3>Real Estate</h3>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center" style="margin-top: 30px">
                        <div class="about-feature-box-single">
                            <div class="feature-img-box ">
                                <div class="feature-img-content">
                                    <img class="img-fluid"
                                        src="{{ asset('all/images/icon-image/why-different3.png') }}" alt="" style="width: 40px; height: 40px">
                                </div>
                                <div class="feature-content">
                                    <h3>Oil and Gas</h3>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ts-testimonial-bg">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-white column-title"> Client’s Love</h2>
                    </div>
                </div>
            </div>
        </section>

        <section id="ts-testimonial-static" class="ts-testimonial-static no-padding">
            <div class="container">
                <div class="testimonial-items-wrapper">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="testimonial-item-single">
                                <div class="quote-item-static-footer clearfix">
                                    <img class="img-fluid" src="{{ asset('all/images/clients/testimonial1.png') }}"
                                        alt="Jonas Blue">
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Jonas Blue</h3>
                                        <span class="quote-subtext"> Ceo Media </span>
                                    </div>
                                </div>
                                <p class="quote-text">Without taking proper consideration, you could go ahead with a
                                    mismatche policy, meaning you could end up with all.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="testimonial-item-single">
                                <div class="quote-item-static-footer clearfix">
                                    <img class="img-fluid" src="{{ asset('all/images/clients/testimonial2.png') }}"
                                        alt="Jonas Blue">
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Endrew Gotham</h3>
                                        <span class="quote-subtext"> Ceo Rains </span>
                                    </div>
                                </div>
                                <p class="quote-text">Without taking proper consideration, you could go ahead with a
                                    mismatche policy, meaning you could end up with all.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="testimonial-item-single">
                                <div class="quote-item-static-footer clearfix">
                                    <img class="img-fluid" src="{{ asset('all/images/clients/testimonial3.png') }}"
                                        alt="Jonas Blue">
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Nance Merry</h3>
                                        <span class="quote-subtext"> HR at Honta </span>
                                    </div>
                                </div>
                                <p class="quote-text">Without taking proper consideration, you could go ahead with a
                                    mismatche policy, meaning you could end up with all.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        @include('include.home_footer')

        @include('include.home_js')

    </div>
</body>

</html>
