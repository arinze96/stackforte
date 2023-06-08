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
                            <h1 class="banner-title">OIL AND GAS
                            </h1>
                            <ol class="breadcrumb">
                                <li><a href="{{ route('app.home') }}">Home</a></li>
                                <li>OIL AND GAS
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
                            <h2 data-title="OIL AND GAS

                            " class="section-title-dash">
                                OIL AND GAS

                                <span>&nbsp;</span>
                            </h2>
                        </div>
                    </div>

                    <div class="gap-70"></div>
                    <div class="row">
                        <h3 class="address-title">OIL AND GAS
                        </h3>
                        <p style='font-size: 20px'>
                            We aim to provide a safe, healthy and environmentally flexible portfolios for our investors across the globe and to minimize any adverse effects of our operations on communities and the environment. We are proud to be a part of the drive toward energy independence by cultivating partnerships that drive oilfield development in our core areas of interest. We invest in oil and gas investment opportunities to create a stable growth, long-term gains, greater efficiency and safer portfolio.
                        </p> <br>

                        <p style='font-size: 20px'>
                            Our trusted relationships with proven operators in oil and gas from onshore and offshore sources, and producers in range of products including methane, ethane, propane, butane, paraffinic naphtha, condensates and sulphur have resulted in Aresco’s participation in some of the most sought after plays in the United State and Gulf Coast Region.
                        </p> <br>

                        <p style='font-size: 20px'>
                            As a hard asset with low correlation to stocks & bonds, energy investments could protect your portfolio from short-term market fluctuations. While no single investment strategy is suitable for everyone, exploration and/or production-based energy investments offer the potential for higher returns than many traditional investments. Direct energy investments (a portfolio with ownership in producing oil and gas properties) enjoy low correlation with other traditional asset classes and generally positive correlation with inflation. As a diversification strategy, a portfolio with ownership in such an investment may provide a buffer against fluctuating market conditions and inflation movements. Oil and gas projects offer some of the most attractive tax incentives for investments. The IRS provides tax incentives to encourage private investments in domestic oil and gas production. For drilling program investments, approximately 60-80% of well costs may be fully deductible in year one as intangible drilling costs. The remaining amount is categorized as tangible costs and may be depreciated over time (generally between 5 to 7 years). In addition, 15% of a property’s gross cash flow is tax free in the form of a depletion allowance. An additional cost depletion allowance allows for 100% deduction of property lease costs, sales expenses, legal and administrative accounting expenses. Create a retirement plan.

                        </p> <br>

                    </div>
                </div>
            </div>
        </section>

        @include('include.home_footer')

        @include('include.home_css')
    </div>
</body>

</html>
