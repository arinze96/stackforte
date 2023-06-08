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
                            <h1 class="banner-title">Affiliate Program</h1>
                            <ol class="breadcrumb">
                                <li><a href="{{ route('app.home') }}">Home</a></li>
                                <li>Affiliate Program</li>
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
                            <h2 data-title="AFFILIATE PROGRAM
                            " class="section-title-dash">
                                Affiliate Program
                                <span>&nbsp;</span>
                            </h2>
                        </div>
                    </div>

                    <div class="gap-70"></div>
                    <div class="row">
                        <h3 class="address-title">Affiliate Program</h3>
                        <p style='font-size: 20px'>
                            Just because we know there are lot of reasons for our investors to refer their friends and
                            business partners, most of our new business now comes from valued, personal referrals
                            provided by our happy investors. So, we thought it was time to share the love and help our
                            members increase their personal production and income by providing even more ways to help
                            our members meet their financial goals. We’d rather invest in our members than spend money
                            on expensive marketing.
                        </p> <br>

                        <p style='font-size: 20px'>
                            **We decided to stop expensive marketing and advertising, and create an exclusive automated
                            affiliate downline, focused on providing the very best services and care to our members.
                            Rewarding our registered members for being our best advertisers.
                        </p> <br>

                        <p style='font-size: 20px'>
                            **We designed a trusted proven automated system to track record of all affiliates/referrals
                            from your 1st generation down to your 10th generation.
                        </p> <br>
                        <p style='font-size: 20px'>
                            **We have a guaranteed referral commission plan from your 1st generation to the 10th
                            generation respectively.
                        </p> <br>
                        <p style='font-size: 20px'>
                            **Signups made from your referrals are displayed on your dashboard in "points" (10pts) per
                            referral including their names, and names of those referred by them.
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
