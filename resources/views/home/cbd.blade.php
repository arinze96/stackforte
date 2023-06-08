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
                            <h1 class="banner-title">CBD</h1>
                            <ol class="breadcrumb">
                                <li><a href="{{ route('app.home') }}">Home</a></li>
                                <li>CBD</li>
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
                            <h2 data-title="TOKENIZATION OF CANNABIS
                            "
                                class="section-title-dash">
                                TOKENIZATION OF CANNABIS
                                <span>&nbsp;</span>
                            </h2>
                        </div>
                    </div>

                    <div class="gap-70"></div>
                    <div class="row">
                        <h3 class="address-title">TOKENIZATION OF CANNABIS</h3>
                        <p style='font-size: 20px'>
                            Our technology allows for cannabis-related companies to fractionally sell equity in their
                            business, or shares in crop futures, opening a new market for investors hungry to tap into
                            the booming cannabis industry.
                        </p> <br>

                        <p style='font-size: 20px'>
                            Farmers can chose to use our Open Source Leaf Area, Bud Area, and Count. Companies would be
                            able to use Motion Logs to automatically track and record fertilization or spraying events
                            on the blockchain system. This mean they can now build a seed-to-harvest focused offering of
                            a Decentralized AI App and deploy as Compliant Smart Camera offering with ease.
                        </p> <br>

                        <p style='font-size: 20px'>
                            These Open Source projects will double as workable instructions for developers to use the
                            Crypto Smart Cameras and for the farmers to try our AI features out of the box. Cultivators
                            can easily install and uninstall services from different 3rd party AI providers, without
                            hardware or configuration changes. What we’re talking about is a platform for cannabis
                            companies to monetize their data.
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
