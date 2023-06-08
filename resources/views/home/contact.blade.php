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
                        <h1 class="banner-title">Contact Us</h1>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('app.home') }}">Home</a></li>
                            <li>Contact</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>-- Banner area end -->


        <section id="main-container" class="main-container padt-90">
            <div id="ts-contact-us" class="ts-contact-us">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <h2 data-title="Contact Us" class="section-title-dash">
                                Contact Us<span>&nbsp;</span>
                            </h2>
                        </div><!-- Col end -->
                    </div> <!-- Row End -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact-wrapper  ">
                                <div class="contact-box form-box">
                                    <div id="general-form" class="form-container active">
                                        <!-- START copy section: General Contact Form -->
                                        <form class="contactMe small" action="#" method="POST"
                                            enctype="multipart/form-data">
                                            <section>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <input type="text" name="name" data-displayname="Name"
                                                            class="field" placeholder="Full Name*" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="email" name="email" data-displayname="Email"
                                                            class="field" placeholder="Email Address*" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <input type="text" name="subject"
                                                            data-displayname="subject" class="field"
                                                            placeholder="Subject" required="">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <textarea name="message" data-displayname="Message" class="field" placeholder="Message" required=""></textarea>
                                                    </div>
                                                </div>

                                                <!-- Google reCAPTCHA -->
                                                <!-- Create a site key for your website: https://www.google.com/recaptcha -->
                                                <!-- Replace YOUR_SITE_KEY_HERE with your site key -->
                                                <!-- To enable Google reCAPTCHA V2, uncomment the next line -->
                                                <!-- <div class="re-captcha" data-sitekey="YOUR_SITE_KEY_HERE"></div> -->
                                                <!-- To enable Google Invisible reCAPTCHA, uncomment the next line -->
                                                <!-- <div class="re-captcha invisible" data-sitekey="YOUR_SITE_KEY_HERE"></div> -->

                                                <div class="msg"></div>

                                                <button class="btn btn-primary float-lg-right float-md-none"
                                                    type="submit" data-sending="Sending...">Send Message</button>
                                            </section>
                                        </form>
                                        <!-- END copy section: General Contact Form -->
                                    </div>
                                </div> <!-- Contact Box End -->
                                <div class="contact-box info-box">
                                    <div class="contact-info-left">
                                        <h3 class="column-title">
                                            Get In Touch
                                        </h3>
                                        <div class="ts-contact-info"><span class="ts-contact-icon float-left"><i
                                                    class="icon icon-map-marker2"></i></span>
                                            <div class="ts-contact-content">
                                                <h3 class="ts-contact-title">Find Us</h3>
                                                <p>1010 Avenue, NY 90001, United States</p>
                                            </div> <!-- Contact content end-->
                                        </div> <!-- Contact Info End -->
                                        <div class="ts-contact-info"><span class="ts-contact-icon float-left"><i
                                                    class="icon icon-phone3"></i></span>
                                            <div class="ts-contact-content">
                                                <h3 class="ts-contact-title">Call Us</h3>
                                                <p>009-215-5596 (toll free)</p>
                                            </div> <!-- Contact content end-->
                                        </div> <!-- Contact Info End -->
                                        <div class="ts-contact-info last"><span class="ts-contact-icon float-left"><i
                                                    class="icon icon-envelope"></i></span>
                                            <div class="ts-contact-content">
                                                <h3 class="ts-contact-title">Mail Us</h3>
                                                <p><a href="http://demo.themewinter.com/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="b1d8dfd7def1d5dedcd0d8df9fd2dedc">[email&#160;protected]</a>
                                                </p>
                                            </div><!-- Contact content end-->
                                        </div> <!-- Contact Info End -->
                                    </div> <!-- Info End -->
                                </div> <!-- Contact Box End -->
                            </div> <!-- Wrapper End -->
                        </div> <!-- Col End -->
                    </div>
                    <div class="gap-70"></div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="contact-address">
                                <h3 class="address-title">Browse by Country</h3>
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <div class="card-button active">
                                                <a href="#" data-toggle="collapse" data-target="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">United States of
                                                    America
                                                </a>
                                            </div> <!-- Card Button End -->
                                        </div> <!-- Card Header End -->
                                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="info-address">
                                                    <li>(Admin only) Level 14, 388 George Street</li>
                                                    <li>New York 2000</li>
                                                    <li>Phone: +091 (4593) 6689</li>
                                                    <li>Email: <a
                                                            href="http://demo.themewinter.com/cdn-cgi/l/email-protection"
                                                            class="__cf_email__"
                                                            data-cfemail="32745d40574a5c5b5172565d5f535b5c1c515d5f">[email&#160;protected]</a>
                                                    </li>
                                                </ul>
                                            </div> <!-- Card Body End -->
                                        </div> <!-- Collapse End -->
                                    </div> <!-- Card End -->
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <div class="card-button">
                                                <a href="#" data-toggle="collapse" data-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">Germany
                                                </a>
                                            </div> <!-- Card Button End -->
                                        </div> <!-- Card Header End -->
                                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="info-address">
                                                    <li>(Admin only) Level 14, 388 George Street</li>
                                                    <li>New York 2000</li>
                                                    <li>Phone: +091 (4593) 6689</li>
                                                    <li>Email: <a
                                                            href="http://demo.themewinter.com/cdn-cgi/l/email-protection"
                                                            class="__cf_email__"
                                                            data-cfemail="bafcd5c8dfc2d4d3d9faded5d7dbd3d494d9d5d7">[email&#160;protected]</a>
                                                    </li>
                                                </ul>
                                            </div> <!-- Card Body End -->
                                        </div> <!-- Collapse End -->
                                    </div> <!-- Card End -->
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <div class="card-button">
                                                <a href="#" data-toggle="collapse" data-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">United Arab
                                                    Emirates
                                                </a>
                                            </div> <!-- Card Button End -->
                                        </div> <!-- Card Header End -->
                                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="info-address">
                                                    <li>(Admin only) Level 14, 388 George Street</li>
                                                    <li>New York 2000</li>
                                                    <li>Phone: +091 (4593) 6689</li>
                                                    <li>Email: <a
                                                            href="http://demo.themewinter.com/cdn-cgi/l/email-protection"
                                                            class="__cf_email__"
                                                            data-cfemail="c88ea7baadb0a6a1ab88aca7a5a9a1a6e6aba7a5">[email&#160;protected]</a>
                                                    </li>
                                                </ul>
                                            </div> <!-- Card Body End -->
                                        </div> <!-- Collapse End -->
                                    </div> <!-- Card End -->
                                    <div class="card">
                                        <div class="card-header" id="headingFour">
                                            <div class="card-button">
                                                <a href="#" data-toggle="collapse" data-target="#collapseFour"
                                                    aria-expanded="false" aria-controls="collapseFour">Australia
                                                </a>
                                            </div> <!-- Card Button End -->
                                        </div> <!-- Card Header End -->
                                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="info-address">
                                                    <li>(Admin only) Level 14, 388 George Street</li>
                                                    <li>New York 2000</li>
                                                    <li>Phone: +091 (4593) 6689</li>
                                                    <li>Email: <a
                                                            href="http://demo.themewinter.com/cdn-cgi/l/email-protection"
                                                            class="__cf_email__"
                                                            data-cfemail="17517865726f797e745773787a767e793974787a">[email&#160;protected]</a>
                                                    </li>
                                                </ul>
                                            </div> <!-- Card Body End -->
                                        </div> <!-- Collapse End -->
                                    </div> <!-- Card End -->
                                    <div class="card">
                                        <div class="card-header" id="headingFive">
                                            <div class="card-button">
                                                <a href="#" data-toggle="collapse" data-target="#collapseFive"
                                                    aria-expanded="false" aria-controls="collapseFive">South Africa
                                                </a>
                                            </div> <!-- Card Button End -->
                                        </div> <!-- Card Header End -->
                                        <div id="collapseFive" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="info-address">
                                                    <li>(Admin only) Level 14, 388 George Street</li>
                                                    <li>New York 2000</li>
                                                    <li>Phone: +091 (4593) 6689</li>
                                                    <li>Email: <a
                                                            href="http://demo.themewinter.com/cdn-cgi/l/email-protection"
                                                            class="__cf_email__"
                                                            data-cfemail="a5e3cad7c0ddcbccc6e5c1cac8c4cccb8bc6cac8">[email&#160;protected]</a>
                                                    </li>
                                                </ul>
                                            </div> <!-- Card Body End -->
                                        </div> <!-- Collapse End -->
                                    </div> <!-- Card End -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <h3 class="address-title">Find on Map</h3>
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe width="100%" height="500" id="gmap_canvas"
                                        src="https://maps.google.com/maps?q=melborn&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                </div>
                                <style>
                                    .mapouter {
                                        text-align: right;
                                        height: 500px;
                                        width: 799px;
                                    }

                                    .gmap_canvas {
                                        overflow: hidden;
                                        background: none !important;
                                        height: 500px;
                                        width: 799px;
                                    }
                                </style>
                            </div><!-- Map End -->
                        </div>
                    </div>
                </div> <!-- Container End -->
            </div> <!-- Pricing End -->
        </section><!-- Main container end -->

        @include('include.home_footer')

        @include('include.home_css')
    </div>
</body>

</html>
