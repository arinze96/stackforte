<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="stylesheet" href="{{ asset('all/css/bootstrap.min.css') }}">
<link rel="icon" type="image/png" href="{{ asset('all/images/mainLogo.png') }}">
<link rel="stylesheet" href="{{ asset('all/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('all/css/icon-font.css') }}">
<link rel="stylesheet" href="{{ asset('all/css/animate.css') }}">
<link rel="stylesheet" href="{[asset('all/css/owl.carousel.min.css')]}">
<link rel="stylesheet" href="{{ asset('all/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('all/css/colorbox.css') }}">
<link rel="stylesheet" href="{{ asset('all/css/contactme/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('all/css/contactme/bootstrap-datepicker.standalone.min.css') }}">
<link rel="stylesheet" href="{{ asset('all/css/contactme/jquery.timepicker.css') }}">
<link rel="stylesheet" href="{{ asset('all/css/contactme/contactme-1.3.css') }}">
<link rel="stylesheet" href="{{ asset('all/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('all/css/responsive.css') }}">

<style>
    li {
        list-style: none;
    }

    .navbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px;
        background-color: #7cbf42;
        color: #fff;
    }

    .nav-links a {
        color: #fff;
    }

    /* LOGO */
    .logo {
        font-size: 32px;
    }

    /* NAVBAR MENU */
    .menu {
        display: flex;
        gap: 1em;
        font-size: 18px;
    }

    .menu li:hover {
        background-color: #7cbf42;
        border-radius: 5px;
        transition: 0.3s ease;
    }

    .menu li {
        padding: 5px 14px;
    }

    /* DROPDOWN MENU */
    .services {
        position: relative;
    }

    .dropdown {
        background-color: #7cbf42;
        padding: 1em 0;
        position: absolute;
        /*WITH RESPECT TO PARENT*/
        display: none;
        border-radius: 8px;
        top: 35px;
    }

    .dropdown li+li {
        margin-top: 10px;
    }

    .dropdown li {
        padding: 0.5em 1em;
        width: 8em;
        text-align: center;
    }

    .dropdown li:hover {
        background-color: #7cbf42;
    }

    .services:hover .dropdown {
        display: block;
    }

    input[type=checkbox] {
        display: none;
    }

    /* HAMBURGER MENU */
    .hamburger {
        display: none;
        font-size: 24px;
        user-select: none;
    }

    /* APPLYING MEDIA QUERIES */
    @media (max-width: 768px) {
        .menu {
            display: none;
            position: absolute;
            background-color:#7cbf42;
            right: 0;
            left: 0;
            text-align: center;
            padding: 16px 0;
        }

        .menu li:hover {
            display: inline-block;
            background-color: #7cbf42;
            transition: 0.3s ease;
        }

        .menu li+li {
            margin-top: 12px;
        }

        input[type=checkbox]:checked~.menu {
            display: block;
        }

        .hamburger {
            display: block;
        }

        .dropdown {
            left: 50%;
            top: 30px;
            transform: translateX(35%);
        }

        .dropdown li:hover {
            background-color: #7cbf42;
        }
    }
</style>
