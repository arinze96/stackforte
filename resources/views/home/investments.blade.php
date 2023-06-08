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
                            <h1 class="banner-title">Our Pricing</h1>
                            <ol class="breadcrumb">
                                <li><a href="{{ route('app.home') }}">Home</a></li>
                                <li>Pricing</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section id="main-container" class="main-container padt-90">
            <div id="pricing-table-standard" class="pricing-table-standard">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <h2 data-title="Our Pricing" class="section-title-dash">
                                Our Pricing<span>&nbsp;</span>
                            </h2>
                        </div>
                    </div>
                    <div class="gap-30"></div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="plan text-center">
                                <h2 class="plan-name">CRYPTOCURRENCY TRADING<small></small></h2>
                                <h3 class="plan-price">
                                    <sup class="currency">$</sup>
                                    <strong>20,000</strong>
                                    <sub>min</sub>
                                </h3>
                                <ul class="list-unstyled">
                                    <li>Max: $20,000</li>
                                    <li>Management Charges: 10%</li>
                                    <li>Return on Investment Weekly: 8.75%</li>
                                    <li>One Year Contract(Renewable)</li>
                                    <li>Eligible for Compounding Plan</li>
                                    <li>Eligible to Weekly Profit Withdrawal </li>
                                    <li>Priviate Fund Manager </li>
                                    <li>Money Back Guarantee </li>
                                    <li>24/7 </li>
                                </ul>
                                <div class="text-center">
                                    <a target="_self" href="{{ route('user.register') }}" class="btn btn-primary">Buy
                                        Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 highlighted-plan">
                            <div class="plan text-center">
                                <h2 class="plan-name">FOREX FUND<small></small></h2>
                                <h3 class="plan-price">
                                    <sup class="currency">$</sup>
                                    <strong>10,000</strong>
                                    <sub>min</sub>
                                </h3>
                                <ul class="list-unstyled">
                                    <li>Max: $5,000,000</li>
                                    <li>Management Charges: 10%</li>
                                    <li>Return on Investment Weekly: 7.5%</li>
                                    <li>One Year Contract(Renewable)</li>
                                    <li>Eligible for Compounding Plan</li>
                                    <li>Priviate Fund Manager </li>
                                    <li>Money Back Guarantee </li>
                                    <li>24/7 </li>
                                </ul>
                                <div class="text-center">
                                    <a target="_self" href="{{ route('user.register') }}" class="btn btn-primary">Buy
                                        Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="plan text-center">
                                <h2 class="plan-name">CRYPTOCURRENCY MINING<small></small></h2>
                                <h3 class="plan-price">
                                    <sup class="currency">$</sup>
                                    <strong>5,000</strong>
                                    <sub>min</sub>
                                </h3>
                                <ul class="list-unstyled">
                                    <li>Max: $5,000,000</li>
                                    <li>Management Charges: 10%</li>
                                    <li>Return on Investment Weekly: 7%</li>
                                    <li>Eligible to Weekly Profit Withdrawal </li>
                                    <li>One Year Contract(Renewable)</li>
                                    <li>Eligible for Compounding Plan</li>
                                    <li>Priviate Fund Manager </li>
                                    <li>Money Back Guarantee </li>
                                    <li>24/7 </li>
                                </ul>
                                <div class="text-center">
                                    <a target="_self" href="{{ route('user.register') }}" class="btn btn-primary">Buy
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="pricing-table-classic" class="pricing-table-classic solid-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="plan text-center">
                            <h2 class="plan-name">CBD<small></small></h2>
                            <h3 class="plan-price">
                                <sup class="currency">$</sup>
                                <strong>5,000</strong>
                                <sub>/mo</sub>
                            </h3>
                            <ul class="list-unstyled">
                                <li>Max: $5,000,000</li>
                                <li>Management Charges: 10%</li>
                                <li>Return on Investment Weekly: 4.25%</li>
                                <li>Eligible to Monthly Profit Withdrawal </li>
                                <li>One Year Contract(Renewable)</li>
                                <li>Eligible for Compounding Plan</li>
                                <li>Priviate Fund Manager </li>
                                <li>Money Back Guarantee </li>
                                <li>24/7 </li>
                            </ul>
                            <div class="text-center">
                                <a target="_self" href="{{ route('user.register') }}" class="btn btn-primary">Buy
                                    Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 highlighted-plan">
                        <div class="plan text-center">
                            <h2 class="plan-name">REAL ESTATE PROGRAM<small></small></h2>
                            <h3 class="plan-price">
                                <sup class="currency">$</sup>
                                <strong>50,000</strong>
                                <sub>min</sub>
                            </h3>
                            <ul class="list-unstyled">
                                <li>Max: $5,000,000</li>
                                <li>Management Charges: 10%</li>
                                <li>Return on Investment Weekly: 7%</li>
                                <li>Eligible to Monthly Profit Withdrawal </li>
                                <li>Minimum 2 Years Agreement (Renewable)</li>
                                <li>Eligible for Compounding Plan</li>
                                <li>Priviate Fund Manager </li>
                                <li>Money Back Guarantee </li>
                                <li>24/7 </li>
                            </ul>
                            <div class="text-center">
                                <a target="_self" href="{{ route('user.register') }}" class="btn btn-primary">Buy
                                    Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="plan text-center">
                            <h2 class="plan-name">OIL & GAS PARTNERSHIP<small></small></h2>
                            <h3 class="plan-price">
                                <sup class="currency">$</sup>
                                <strong>50,000</strong>
                                <sub>min</sub>
                            </h3>
                            <ul class="list-unstyled">
                                <li>Max: $5,000,000</li>
                                <li>Management Charges: 10%</li>
                                <li>Return on Investment Weekly: 7%</li>
                                <li>Eligible to Weekly Profit Withdrawal </li>
                                <li>One Year Contract(Renewable)</li>
                                <li>Eligible for Compounding Plan</li>
                                <li>Priviate Fund Manager </li>
                                <li>Money Back Guarantee </li>
                                <li>24/7 </li>
                            </ul>
                            <div class="text-center">
                                <a target="_self" href="{{ route('user.register') }}" class="btn btn-primary">Buy
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="pricing-table" class="pricing-table">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="plan text-center">
                            <h2 class="plan-name" style="font-weight: bold">CRADLE INCOPORATION<small></small></h2>
                            <span><i class="fa fa-bar-chart"></i></span>
                            <ul class="list-unstyled">
                                <li>Max: $50,000,000</li>
                                <li>Management Charges: 10%</li>
                                <li>Return on Investment Weekly: 8.75%</li>
                                <li>One Year Contract(Renewable)</li>
                                <li>Eligible for Compounding Plan</li>
                                <li>Eligible to Weekly Profit Withdrawal </li>
                                <li>Priviate Fund Manager </li>
                                <li>Money Back Guarantee </li>
                                <li>24/7 </li>
                            </ul>
                            <h3 class="plan-price">
                                <sup class="currency">$</sup>
                                <strong>300</strong>
                                <sub>min</sub>
                            </h3>
                            <div class="text-center">
                                <a target="_self" href="{{ route('user.register') }}" class="btn btn-primary">Buy
                                    Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 highlighted-plan">
                        <div class="plan text-center">
                            <h2 class="plan-name" style="font-weight: bold">EXCLUSIVE PARTNERSHIP<small></small></h2>
                            <span><i class="fa fa-line-chart"></i></span>
                            <ul class="list-unstyled">
                                <li>Max: $20,000</li>
                                <li>Management Charges: 10%</li>
                                <li>Return on Investment Weekly: 8.75%</li>
                                <li>One Year Contract(Renewable)</li>
                                <li>Eligible for Compounding Plan</li>
                                <li>Eligible to Weekly Profit Withdrawal </li>
                                <li>Priviate Fund Manager </li>
                                <li>Money Back Guarantee </li>
                                <li>24/7 </li>
                            </ul>
                            <h3 class="plan-price">
                                <sup class="currency">$</sup>
                                <strong>69</strong>
                                <sub>/mo</sub>
                            </h3>
                            <div class="text-center">
                                <a target="_self" href="{{ route('user.register') }}" class="btn btn-primary">Buy
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('include.home_footer')
        @include('include.home_js')
</body>

</html>
