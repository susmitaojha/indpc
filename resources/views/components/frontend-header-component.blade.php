<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>INDPC</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!--<link href="assets/img/favicon.png" rel="icon">-->
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Tinos&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('public/assets/front/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/front/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/front/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/assets/front/assets/css/jquery.fancybox.css') }}" media="screen">

    <!-- Template Main CSS File -->
    <link href="{{ asset('public/assets/front/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <a href="#">
                    @if (!empty($websitelogo_file_path))
                        <img src="{{ asset('public/assets/front_images/' . $websitelogo_file_path) }}" alt="">
                    @else
                        <img src="{{ asset('public/assets/front/images/logoindpc.png') }}" alt="">
                    @endif

                </a>
            </div>
            <div class="mainMenu">
                <nav id='cssmenu'>
                    <div class="button"></div>
                    <ul>
                        <li><a href='{{ url('/') }}'>Home</a></li>
                        <li><a href='{{ url('about-us') }}'>About Us</a></li>
                        <li><a href='{{ url('our-products') }}'>Our Products</a></li>
                        <li><a href='{{ url('blogs') }}'>Blogs</a></li>
                        <li><a href='{{ url('why-us') }}'>Why Us</a></li>
                        <li><a href='{{ url('contact-us') }}'>Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
