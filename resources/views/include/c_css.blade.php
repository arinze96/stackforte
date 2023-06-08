<link rel="canonical" href="https://www.creative-tim.com/product/soft-ui-dashboard" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('new/assets/img/apple-icon.png') }}">
<link rel="icon" type="image/png" href="{{ asset('all/images/mainLogo.png') }}">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<link href="{{ asset('new/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
<link href="{{ asset('new/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@44659d9/css/all.min.css" rel="stylesheet"
    type="text/css" />
<script src="{{ asset('new/kit.fontawesome.com/42d5adcbca.js') }}" crossorigin="anonymous"></script>
<link href="{{ 'new/assets/css/nucleo-svg.css' }}" rel="stylesheet" />
<link id="pagestyle" href="{{ asset('new/assets/css/soft-ui-dashboard.minf2ad.css?v=1.0.7') }}" rel="stylesheet" />
<meta name="csrf-token" content="{{ csrf_token() }}" />
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>

<style>
    :root {
        --font-family-sans-serif: "Open Sans", -apple-system, BlinkMacSystemFont,
            "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji",
            "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    }

    *,
    *::before,
    *::after {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    html {
        font-family: sans-serif;
        line-height: 1.15;
        -webkit-text-size-adjust: 100%;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    nav {
        display: block;
    }

    body {
        margin: 0;
        font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI",
            Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji",
            "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #515151;
        text-align: left;
        background-color: #e9edf4;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin-top: 0;
        margin-bottom: 0.5rem;
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    a {
        color: #3f84fc;
        text-decoration: none;
        background-color: transparent;
    }

    a:hover {
        color: #0458eb;
        text-decoration: underline;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6 {
        font-family: "Nunito", sans-serif;
        margin-bottom: 0.5rem;
        font-weight: 500;
        line-height: 1.2;
    }

    .item-resize: {
        font-size: 12px
    }

    h1,
    .h1 {
        font-size: 2.5rem;
        font-weight: normal;
    }

    .card {
        position: relative;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, 0.125);
        border-radius: 0;
    }

    .card-body {
        -webkit-box-flex: 1;
        -webkit-flex: 1 1 auto;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.25rem;
    }

    .card-header {
        padding: 0.75rem 1.25rem;
        margin-bottom: 0;
        background-color: rgba(0, 0, 0, 0.03);
        border-bottom: 1px solid rgba(0, 0, 0, 0.125);
        text-align: center;
    }

    .dashboard {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        min-height: 100vh;
    }

    .dashboard-app {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-flex: 2;
        -webkit-flex-grow: 2;
        -ms-flex-positive: 2;
        flex-grow: 2;
        margin-top: 84px;
    }

    .dashboard-content {
        -webkit-box-flex: 2;
        -webkit-flex-grow: 2;
        -ms-flex-positive: 2;
        flex-grow: 2;
        padding: 25px;
    }

    .dashboard-nav {
        min-width: 238px;
        position: fixed;
        left: 0;
        top: 0;
        bottom: 0;
        overflow: auto;
        background-color: #2152ff;
    }

    .dashboard-compact .dashboard-nav {
        display: none;
    }

    .dashboard-nav header {
        min-height: 84px;
        padding: 8px 27px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .dashboard-nav header .menu-toggle {
        display: none;
        margin-right: auto;
    }

    .dashboard-nav a {
        color: #515151;
    }

    .dashboard-nav a:hover {
        text-decoration: none;
    }

    .dashboard-nav {
        background-color: #2152ff;
    }

    .dashboard-nav a {
        color: #fff;
    }

    .brand-logo {
        font-family: "Nunito", sans-serif;
        font-weight: bold;
        font-size: 20px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        color: #515151;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .brand-logo:focus,
    .brand-logo:active,
    .brand-logo:hover {
        color: #dbdbdb;
        text-decoration: none;
    }

    .brand-logo i {
        color: #d2d1d1;
        font-size: 27px;
        margin-right: 10px;
    }

    .dashboard-nav-list {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    .dashboard-nav-item {
        min-height: 56px;
        padding: 8px 20px 8px 70px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        letter-spacing: 0.02em;
        transition: ease-out 0.5s;
    }

    .dashboard-nav-item i {
        width: 36px;
        font-size: 19px;
        margin-left: -40px;
    }

    .dashboard-nav-item:hover {
        background: rgba(255, 255, 255, 0.04);
    }

    .active {
        background: rgba(0, 0, 0, 0.1);
    }

    .dashboard-nav-dropdown {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    .dashboard-nav-dropdown.show {
        background: rgba(255, 255, 255, 0.04);
    }

    .dashboard-nav-dropdown.show>.dashboard-nav-dropdown-toggle {
        font-weight: bold;
    }

    .dashboard-nav-dropdown.show>.dashboard-nav-dropdown-toggle:after {
        -webkit-transform: none;
        -o-transform: none;
        transform: none;
    }

    .dashboard-nav-dropdown.show>.dashboard-nav-dropdown-menu {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
    }

    .dashboard-nav-dropdown-toggle:after {
        content: "";
        margin-left: auto;
        display: inline-block;
        width: 0;
        height: 0;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-top: 5px solid rgba(81, 81, 81, 0.8);
        -webkit-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
    }

    .dashboard-nav .dashboard-nav-dropdown-toggle:after {
        border-top-color: rgba(255, 255, 255, 0.72);
    }

    .dashboard-nav-dropdown-menu {
        display: none;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    .dashboard-nav-dropdown-item {
        min-height: 40px;
        padding: 8px 20px 8px 70px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        transition: ease-out 0.5s;
        
    }

    .dashboard-nav-dropdown-item:hover {
        background: rgba(255, 255, 255, 0.04);
    }

    .menu-toggle {
        position: relative;
        width: 42px;
        height: 42px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        color: #443ea2;
    }

    .menu-toggle:hover,
    .menu-toggle:active,
    .menu-toggle:focus {
        text-decoration: none;
        color: #875de5;
    }

    .menu-toggle i {
        font-size: 20px;
    }

    .dashboard-toolbar {
        min-height: 84px;
        background-color: #dfdfdf;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        padding: 8px 27px;
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1000;
    }

    .nav-item-divider {
        height: 1px;
        margin: 1rem 0;
        overflow: hidden;
        background-color: rgba(236, 238, 239, 0.3);
    }

    @media (min-width: 992px) {
        .dashboard-app {
            margin-left: 238px;
        }

        .dashboard-compact .dashboard-app {
            margin-left: 0;
        }
    }


    @media (max-width: 768px) {
        .dashboard-content {
            padding: 15px 0px;
        }
    }

    @media (max-width: 992px) {
        .dashboard-nav {
            display: none;
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            z-index: 1070;
        }

        .dashboard-nav.mobile-show {
            display: block;
        }
    }

    @media (max-width: 992px) {
        .dashboard-nav header .menu-toggle {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }
    }

    @media (min-width: 992px) {
        .dashboard-toolbar {
            left: 238px;
        }

        .dashboard-compact .dashboard-toolbar {
            left: 0;
        }
    }
</style>

<style>
    a,
    a:hover,
    a:focus,
    a:active {
        text-decoration: none;
        outline: none;
    }

    a,
    a:active,
    a:focus {
        color: #333;
        text-decoration: none;
        transition-timing-function: ease-in-out;
        -ms-transition-timing-function: ease-in-out;
        -moz-transition-timing-function: ease-in-out;
        -webkit-transition-timing-function: ease-in-out;
        -o-transition-timing-function: ease-in-out;
        transition-duration: .2s;
        -ms-transition-duration: .2s;
        -moz-transition-duration: .2s;
        -webkit-transition-duration: .2s;
        -o-transition-duration: .2s;
    }

    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    .sec-title {
        position: relative;
        margin-bottom: 70px;
    }

    .sec-title .title {
        position: relative;
        display: block;
        font-size: 16px;
        line-height: 1em;
        color: #ff8a01;
        font-weight: 500;
        background: rgb(247, 0, 104);
        background: -moz-linear-gradient(to left, rgba(247, 0, 104, 1) 0%, rgba(68, 16, 102, 1) 25%, rgba(247, 0, 104, 1) 75%, rgba(68, 16, 102, 1) 100%);
        background: -webkit-linear-gradient(to left, rgba(247, 0, 104, 1) 0%, rgba(68, 16, 102, 1) 25%, rgba(247, 0, 104, 1) 75%, rgba(68, 16, 102, 1) 100%);
        background: linear-gradient(to left, rgba(247, 0, 104) 0%, rgba(68, 16, 102, 1) 25%, rgba(247, 0, 104, 1) 75%, rgba(68, 16, 102, 1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#F70068', endColorstr='#441066', GradientType=1);
        color: transparent;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-transform: uppercase;
        letter-spacing: 5px;
        margin-bottom: 15px;
    }

    .sec-title h2 {
        position: relative;
        display: inline-block;
        font-size: 48px;
        line-height: 1.2em;
        color: #1e1f36;
        font-weight: 700;
    }

    .sec-title .text {
        position: relative;
        font-size: 16px;
        line-height: 28px;
        color: #888888;
        margin-top: 30px;
    }

    .sec-title.light h2,
    .sec-title.light .title {
        color: #ffffff;
        -webkit-text-fill-color: inherit;
    }

    .pricing-section {
        position: relative;
        padding: 100px 0 80px;
        overflow: hidden;
    }

    .pricing-section .outer-box {
        max-width: 1100px;
        margin: 0 auto;
    }


    .pricing-section .row {
        margin: 0 -30px;
    }

    .pricing-block {
        position: relative;
        padding: 0 30px;
        margin-bottom: 40px;
    }

    .pricing-block .inner-box {
        position: relative;
        background-color: #ffffff;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        padding: 0 0 30px;
        max-width: 370px;
        margin: 0 auto;
        border-bottom: 20px solid #40cbb4;
    }

    .pricing-block .icon-box {
        position: relative;
        padding: 50px 30px 0;
        background-color: #40cbb4;
        text-align: center;
    }

    .pricing-block .icon-box:before {
        position: absolute;
        left: 0;
        bottom: 0;
        height: 75px;
        width: 100%;
        border-radius: 50% 50% 0 0;
        background-color: #ffffff;
        content: "";
    }


    .pricing-block .icon-box .icon-outer {
        position: relative;
        height: 150px;
        width: 150px;
        background-color: #ffffff;
        border-radius: 50%;
        margin: 0 auto;
        padding: 10px;
    }

    .pricing-block .icon-box i {
        position: relative;
        display: block;
        height: 130px;
        width: 130px;
        line-height: 120px;
        border: 5px solid #40cbb4;
        border-radius: 50%;
        font-size: 50px;
        color: #40cbb4;
        -webkit-transition: all 600ms ease;
        -ms-transition: all 600ms ease;
        -o-transition: all 600ms ease;
        -moz-transition: all 600ms ease;
        transition: all 600ms ease;
    }

    .pricing-block .inner-box:hover .icon-box i {
        transform: rotate(360deg);
    }

    .pricing-block .price-box {
        position: relative;
        text-align: center;
        padding: 10px 20px;
    }

    .pricing-block .title {
        position: relative;
        display: block;
        font-size: 24px;
        line-height: 1.2em;
        color: #222222;
        font-weight: 600;
    }

    .pricing-block .price {
        display: block;
        font-size: 30px;
        color: #222222;
        font-weight: 700;
        color: #40cbb4;
    }


    .pricing-block .features {
        position: relative;
        max-width: 200px;
        margin: 0 auto 20px;
    }

    .pricing-block .features li {
        position: relative;
        display: block;
        font-size: 14px;
        line-height: 30px;
        color: #848484;
        font-weight: 500;
        padding: 5px 0;
        padding-left: 30px;
        border-bottom: 1px dashed #dddddd;
    }

    .pricing-block .features li:before {
        position: absolute;
        left: 0;
        top: 50%;
        font-size: 16px;
        color: #2bd40f;
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1;
        content: "\f058";
        font-family: "Font Awesome 5 Free";
        margin-top: -8px;
    }

    .pricing-block .features li.false:before {
        color: #e1137b;
        content: "\f057";
    }

    .pricing-block .features li a {
        color: #848484;
    }

    .pricing-block .features li:last-child {
        border-bottom: 0;
    }

    .pricing-block .btn-box {
        position: relative;
        text-align: center;
    }

    .pricing-block .btn-box a {
        position: relative;
        display: inline-block;
        font-size: 14px;
        line-height: 25px;
        color: #ffffff;
        font-weight: 500;
        padding: 8px 30px;
        background-color: #40cbb4;
        border-radius: 10px;
        border-top: 2px solid transparent;
        border-bottom: 2px solid transparent;
        -webkit-transition: all 400ms ease;
        -moz-transition: all 400ms ease;
        -ms-transition: all 400ms ease;
        -o-transition: all 400ms ease;
        transition: all 300ms ease;
    }

    .pricing-block .btn-box a:hover {
        color: #ffffff;
    }

    .pricing-block .inner-box:hover .btn-box a {
        color: #40cbb4;
        background: none;
        border-radius: 0px;
        border-color: #40cbb4;
    }

    .pricing-block:nth-child(2) .icon-box i,
    .pricing-block:nth-child(2) .inner-box {
        border-color: #1d95d2;
    }

    .pricing-block:nth-child(2) .btn-box a,
    .pricing-block:nth-child(2) .icon-box {
        background-color: #1d95d2;
    }

    .pricing-block:nth-child(2) .inner-box:hover .btn-box a {
        color: #1d95d2;
        background: none;
        border-radius: 0px;
        border-color: #1d95d2;
    }

    .pricing-block:nth-child(2) .icon-box i,
    .pricing-block:nth-child(2) .price {
        color: #1d95d2;
    }

    .pricing-block:nth-child(3) .icon-box i,
    .pricing-block:nth-child(3) .inner-box {
        border-color: #ffc20b;
    }

    .pricing-block:nth-child(3) .btn-box a,
    .pricing-block:nth-child(3) .icon-box {
        background-color: #ffc20b;
    }

    .pricing-block:nth-child(3) .icon-box i,
    .pricing-block:nth-child(3) .price {
        color: #ffc20b;
    }

    .pricing-block:nth-child(3) .inner-box:hover .btn-box a {
        color: #ffc20b;
        background: none;
        border-radius: 0px;
        border-color: #ffc20b;
    }
</style>

<script>
    (function(a, s, y, n, c, h, i, d, e) {
        s.className += ' ' + y;
        h.start = 1 * new Date;
        h.end = i = function() {
            s.className = s.className.replace(RegExp(' ?' + y), '')
        };
        (a[n] = a[n] || []).hide = h;
        setTimeout(function() {
            i();
            h.end = null
        }, c);
        h.timeout = c;
    })(window, document.documentElement, 'async-hide', 'dataLayer', 4000, {
        'GTM-K9BGS8K': true
    });
</script>

<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-46172202-22', 'auto', {
        allowLinker: true
    });
    ga('set', 'anonymizeIp', true);
    ga('require', 'GTM-K9BGS8K');
    ga('require', 'displayfeatures');
    ga('require', 'linker');
    ga('linker:autoLink', ["2checkout.com", "avangate.com"]);
</script>
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            '../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
</script>

<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '64286dd76d34ea27c6a38da9457f31014f42f8fb';
    window.smartsupp || (function(d) {
        var s, c, o = smartsupp = function() {
            o._.push(arguments)
        };
        o._ = [];
        s = d.getElementsByTagName('script')[0];
        c = d.createElement('script');
        c.type = 'text/javascript';
        c.charset = 'utf-8';
        c.async = true;
        c.src = 'https://www.smartsuppchat.com/loader.js?';
        s.parentNode.insertBefore(c, s);
    })(document);
</script>

<script>
    const mobileScreen = window.matchMedia("(max-width: 990px )");
    $(document).ready(function() {
        $(".dashboard-nav-dropdown-toggle").click(function() {
            $(this).closest(".dashboard-nav-dropdown")
                .toggleClass("show")
                .find(".dashboard-nav-dropdown")
                .removeClass("show");
            $(this).parent()
                .siblings()
                .removeClass("show");
        });
        $(".menu-toggle").click(function() {
            if (mobileScreen.matches) {
                $(".dashboard-nav").toggleClass("mobile-show");
            } else {
                $(".dashboard").toggleClass("dashboard-compact");
            }
        });
    });
</script>
