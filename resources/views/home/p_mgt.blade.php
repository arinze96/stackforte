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
                            <h1 class="banner-title">Portfolio Management
                            </h1>
                            <ol class="breadcrumb">
                                <li><a href="{{ route('app.home') }}">Home</a></li>
                                <li>Portfolio Management
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section id="main-container" class="main-container padt-90">
            <div id="ts-contact-us" class="ts-contact-us">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <h2 data-title="PORTFOLIO MANAGEMENT
                            "
                                class="section-title-dash">
                                Portfolio Management

                                <span>&nbsp;</span>
                            </h2>
                        </div>
                    </div>

                    <div class="gap-70"></div>
                    <div class="row">
                        <h3 class="address-title">Portfolio Management</h3>
                        <p style='font-size: 20px'>
                            Collaborate with our dedicated professional portfolio managers who will work with you and
                            for you, providing clear recommendations designed to help you grow and protect your
                            portfolio. We can help you define your goals, understand your options, and proactively work
                            with you to develop and implement a clear plan. Let’s help you build a flexible plan that's
                            designed to adapt to your changing needs and help grow and protect your wealth over time. It
                            all starts with a conversation. Get in touch with a Manager.
                        </p> <br> <br> <br>


                        <h3 class="address-title" style="margin-top: 20px">Comprehensive Planning</h3>

                        <p style='font-size: 20px'>
                            We can help you build a personalized plan around your full financial picture designed to
                            help you pursue multiple goals, grow your wealth, and take care of the people who matter
                            most to you. Personalized investment management Your portfolio manager can help you choose
                            an investment strategy based on your preferences and feelings about risk, proactively
                            monitoring those investments so that they continue to meet your changing needs, with more
                            maximized gains
                        </p>

                    </div>
                </div>
            </div>
        </section>

        @include('include.home_footer')

        @include('include.home_css')
    </div>
</body>

</html>
