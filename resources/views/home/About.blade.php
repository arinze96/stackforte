<!DOCTYPE html>
<html lang="en">

<head>
    <title>Stackforte Finance</title>
    @include('include.home_css')
</head>

<body>

    <div class="body-inner">
        @include('include.home_header')
        <div id="banner-area" class="banner-area bg-overlay"
            style="background-image:url({{ asset('all/images/banner/banner-2.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="banner-heading">
                            <h1 class="banner-title">About Us</h1>
                            <ol class="breadcrumb">
                                <li><a href="{{ route('app.home') }}">Home</a></li>
                                <li>About</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="main-container" class="main-container">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h2 data-title="OUR PRIME FOCUS" class="section-title-dash">
                            OUR PRIME FOCUS <span>&nbsp;</span>
                        </h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 no-padding">
                        <div class="about-content">
                            <h3 class="column-title small">Innovating With
                                &amp; A Digital Mindset</h3>
                            <p>Stackforte Finance has developed a proprietary trade strategy which has proven to give our
                                clients consistent gains while protecting initial capital investment. We have
                                established our presence in the USA and UAE through out the globe by setting a standard
                                of excellence. We strive for utmost excellence by researching all news feeds and
                                charting daily to incorporate strategic moves into our trades.
                                {{-- . We take pride in our
                                transparency and efficiency, giving our clients full access to our trading history,
                                track records and results. Stackforte Finance has been giving its clients continuous access
                                to the Forex market, and various insured services involved in the Blockchain with our
                                prime interest in Cryptocurrency trading, Real Estate Investment, Oil and Gas, Financial
                                and Investment planning since 2014. --}}
                            </p>
                            <a href="{{ route('user.register') }}" class="btn btn-dark">Get Started</a>
                        </div>
                    </div>
                    <div class="col-lg-6 no-padding">
                        <img class="about-img img-fluid" src="{{ asset('all/images/about-intro.jpg') }}" alt="">
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
                                    <img class="img-fluid" src="{{ asset('all/images/icon-image/why-different1.png') }}"
                                        alt="">
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
                                    <img class="img-fluid" src="{{ asset('all/images/icon-image/why-different2.png') }}"
                                        alt="">
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
                                    <img class="img-fluid" src="{{ asset('all/images/icon-image/why-different3.png') }}"
                                        alt="">
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

        <section id="ts-cta-area" class="ts-cta-area ts-cta-bg bg-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="cta-img-box-left">

                            <div class="cta-content text-white">
                                <h3 class="text-white">WHAT WE DO</h3>
                                <h3 style="color: white">We Provide Flexible Services</h3>
                                <p>Stackforte Finance is a company that guarantees seamless and safe access to the forex
                                    market regardless of existing market conditions. Throughout the years, we devoted
                                    best of our efforts to recruiting and retaining the most promising professionals out
                                    there.
                                <p>
                                    <a class="btn btn-dark" href="{{ route('user.register') }}">Get Started</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 ml-lg-auto">
                        <img src="{{ asset('all/images/stack1.jpeg') }}" alt=""
                            style="width: 100%; height: auto">
                    </div>
                </div>
            </div>
        </section>

        <section style=" margin-top: 150px">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class=" column-title" style="color: black"> Client’s Testimonials</h2>
                    </div>
                </div>
            </div>
        </section>
        <section id="ts-testimonial-static" style=" margin-bottom: 150px" class="ts-testimonial-static no-padding">
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

        <section id="ts-cta-area" class="ts-cta-area ts-cta-bg bg-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 ml-lg-auto">
                        <img src="{{ asset('all/images/stack2.jpeg') }}" alt=""
                            style="width: 100%; height: auto">
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="cta-img-box-left">

                            <div class="cta-content text-white">
                                <h3 class="text-white">(JAMES BRENT CRAIG)</h3>
                                <h3 style="color: white">We Provide Flexible Services</h3>
                                <p>James Brent Craig is Chairman and Executive Director of Stackforte Finance, a Commodity
                                    analyst and forex trader with over 16 years experience in the Financial industry. He
                                    has been trading since 2005 within which he developed a proven strategy and has been
                                    able to teach his strategy to other successful traders with consistent results.
                                    James has steered Stackforte Finance from an early online trading pioneer to a leading
                                    facilitator of global capital market access, servicing individuals, private and
                                    institutional clients in so many countries. As Director and one of the main
                                    shareholders, James today continues to head the Stackforte Finance has chairman with
                                    excellence a trademark to his abilities. Stackforte Finance started its journey as a
                                    brokerage with James, alongside Joseph Harry, but quickly grasped the opportunities
                                    presented by the advent of the internet and the world at large. James has given a
                                    holistic knowledge of the financial industry. James is a family man from Miami,
                                    Florida ,USA, loves to travel and engage in meeting clients. Its great to have
                                    something to read on a regular basis. James is particularly interested in topics
                                    related to public health policy, Fintech, startups and crypto. He also plays golf to
                                    relax during leisure times , He likes the out doors. James is known by many people
                                    through private accelerated trade program or investments . He is known for his
                                    honesty and always delivers immediate impact.
                                <p>
                                    <a class="btn btn-dark" href="{{ route('user.register') }}">Get Started</a>
                                </p>
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
