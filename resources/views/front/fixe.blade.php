@include('sweetalert::alert')
@php
    $config = DB::table('configs')->first();
    $service = DB::table('services')->get();
    $produit = DB::table('produits')->get();
@endphp
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken">
    <!-- Page Title -->
    <title>PODOPRINTED</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ Storage::url($config->icon ?? ' ') }}">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="/css/slicknav.min.css" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="/css/swiper-bundle.min.css">
    <!-- Font Awesome Icon Css-->
    <link href="css/all.css" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="/css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="/css/mousecursor.css">
    <!-- Main Custom Css -->
    <link href="/css/custom.css" rel="stylesheet" media="screen">

    <link rel="stylesheet" href="{{ asset('botman/css/all.css') }}">


    {{--     <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    
 --}}

    <link rel="stylesheet" href="/public/botman/css/all.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/Script.js"></script>

    @yield('header')

</head>

<body>

    <style>
        .bg-primary2 {
            background-color: #9fc52e;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }


        .btn-default {
            background-color: #9fc52e;


        }
    </style>

    <!-- Preloader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="{{ Storage::url($config->logo) }}" alt=""></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Topbar Section Start -->
    <div class="topbar" style=" background-color: #9fc52e;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-10 col-md-12">
                    <!-- Topbar Contact Information Start -->
                    <div class="topbar-contact-info">
                        <ul>
                            <li><a href="#"><img src="images/icon-phone.svg" alt="">
                                    {{ $config->telephone ?? '' }}</a></li>
                            <li><a href="#"><img src="images/icon-mail.svg" alt="">
                                    {{ $config->email ?? ' ' }}</a></li>
                            <li class="hide-mobile "><a href="#"><img src="images/icon-location.svg"
                                        alt=""> {{ $config->addresse ?? ' ' }}</a></li>
                        </ul>
                    </div>
                    <!-- Topbar Contact Information End -->
                </div>


                <div class="col-lg-2 col-md-0">
                    <!-- Topbar Social Links Start -->
                    <div class="topbar-social-links">
                        <ul>
                            <li><a href="{{ $config->facebook ?? ' ' }}"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li><a href="{{ $config->instagram ?? ' ' }}"><i class="fa-brands fa-instagram"></i></a>
                            </li>

                            <li><a href="{{ $config->linkedin ?? ' ' }}"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <!-- Topbar Social Links End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar Section End -->

    <!-- Header Start -->
    <header class="main-header">
        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Logo Start -->
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ Storage::url($config->logo) }}" height="50" width="50" alt="Logo">
                    </a>
                    <!-- Logo End -->

                    <!-- Main Menu Start -->
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ route('home') }}">{{ __('accueil') }}</a>

                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ route('about') }}">{{ \App\Helpers\TranslationHelper::TranslateText('A propos de nous') }}</a>
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ route('impressions') }}">{{ \App\Helpers\TranslationHelper::TranslateText('Impressions 3D') }}</a>
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ route('processus') }}">{{ \App\Helpers\TranslationHelper::TranslateText('Processus') }}</a>
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ route('avantages') }}">{{ \App\Helpers\TranslationHelper::TranslateText('Avantages') }}</a>
                                </li>



                                <li class="nav-item"><a class="nav-link"
                                        href="{{ route('evenements') }}">{{ \App\Helpers\TranslationHelper::TranslateText('Actualités') }}</a>
                                </li>

                                <li class="nav-item"><a class="nav-link"
                                        href="{{ route('contact') }}">{{ \App\Helpers\TranslationHelper::TranslateText('Contact') }}</a>
                                </li>






                        </div>



                        <!-- Let’s Start Button Start -->
                        <div class="header-btn d-inline-flex">
                            <a href="#" class="btn-default">{{ $config->telephone ?? ' ' }}</a>
                        </div>
                        &nbsp;
                        &nbsp;
                        &nbsp;


                        <style>
                            .custom-dropdown {
                                position: relative;
                                display: inline-block;
                            }

                            .dropbtn {
                                background-color: #ffffff;
                                color: #000;
                                padding: 10px 15px;
                                font-size: 16px;
                                border: 1px solid #ccc;
                                border-radius: 5px;
                                cursor: pointer;
                                display: flex;
                                align-items: center;
                            }

                            .dropbtn img {
                                margin-right: 8px;
                            }

                            .dropdown-content {
                                display: none;
                                position: absolute;
                                background-color: #ffffff;
                                min-width: 150px;
                                box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
                                z-index: 1;
                                border: 1px solid #ccc;
                                border-radius: 5px;
                            }

                            .dropdown-content .dropdown-item {
                                display: flex;
                                align-items: center;
                                padding: 10px 15px;
                                background-color: transparent;
                                border: none;
                                width: 100%;
                                text-align: left;
                                cursor: pointer;
                            }

                            .dropdown-content .dropdown-item img {
                                margin-right: 8px;
                            }

                            .dropdown-content .dropdown-item:hover {
                                background-color: #f0f0f0;
                            }

                            .dropdown:hover .dropdown-content {
                                display: block;
                            }
                        </style>


                        <div class="custom-dropdown">
                            <form action="{{ route('locale.change') }}" method="POST">
                                @csrf
                                <div class="dropdown">
                                    <button class="dropbtn">
                                        {{ app()->getLocale() == 'fr' ? 'Français' : 'English' }}
                                    </button>
                                    <div class="dropdown-content">
                                        <button type="submit" name="locale" value="fr" class="dropdown-item">
                                            <img src="https://img.icons8.com/color/20/france-circular.png"
                                                alt="fr">
                                            Français
                                        </button>
                                        <button type="submit" name="locale" value="en" class="dropdown-item">
                                            <img src="https://img.icons8.com/color/20/great-britain-circular.png"
                                                alt="en">
                                            English
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>



                    </div>
                    <!-- Main Menu End -->
                    <div class="navbar-toggle"></div>
                </div>
            </nav>
            <div class="responsive-menu"></div>
        </div>
    </header>
    <!-- Header End -->


    <main>



        @yield('body')




    </main>

{{-- 
    <script>
        var botmanWidget = {
        
            introMessage: "✋ Hi! I'm form PODO PRINTED",

            frameEnpoint: '/botman/chat/',

            title: 'Podo Printed',
         
            botmanSocketConnected: false,

            csrfToken: "{{ csrf_token() }}",


        };
    </script>

    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
 --}}
<!--Start of Tawk.to Script-->
<!--Start of Tawk.to Script-->
<!--Start of Tawk.to Script-->
<!--Start of Tawk.to Script-->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6746ec264304e3196ae94657/1idmgku0f';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    <!--End of Tawk.to Script-->
    <!--End of Tawk.to Script-->
    <!--End of Tawk.to Script-->
    <!--End of Tawk.to Script-->
    <!-- Footer Start -->
    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <!-- About Footer Start -->
                    <div class="about-footer">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                            <img src="{{ Storage::url($config->logo ?? ' ') }}" width="100" height="100"
                                alt="">
                        </div>
                        <!-- Footer Logo End -->

                        <!-- About Footer Content Start -->
                        <div class="about-footer-content">
                            <p style="text-align: justify"> {!! \App\Helpers\TranslationHelper::TranslateText($config->description) !!}</p>
                        </div>
                        <!-- Footer Social Links Start -->
                        <div class="footer-social-links">
                            <ul>
                                <li><a href="{{ $config->facebook ?? ' ' }}"><i
                                            class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="{{ $config->instagram ?? ' ' }}"><i
                                            class="fa-brands fa-instagram"></i></a></li>

                                <li><a href="{{ $config->linkedin ?? ' ' }}"><i
                                            class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <!-- Footer Social Links End -->

                    </div>
                    <!-- About Footer End -->
                </div>

                <div class="col-lg-3 col-md-4">
                    <!-- About Links Start -->
                    <div class="about-working-hour">
                        <h3> {{ \App\Helpers\TranslationHelper::TranslateText('Horaires de travail') }}</h3>
                        <ul>
                            <li style="font-size: 12px;">
                                {{ \App\Helpers\TranslationHelper::TranslateText('Lundi à Vendredi : 10:00 à 18:00') }}
                            </li>
                            <li style="font-size: 12px;">

                                {{ \App\Helpers\TranslationHelper::TranslateText('Samedi : 10:00 à 15:00') }}

                            </li>
                            <li>
                                <p>{{ \App\Helpers\TranslationHelper::TranslateText('Dimanche : Fermé') }}</p>
                            </li>
                        </ul>
                    </div>
                    <!-- About Links End -->
                </div>

                <div class="col-lg-3 col-md-4">
                    <!-- About Links Start -->
                    <div class="about-service-list">
                        <h3>{{ \App\Helpers\TranslationHelper::TranslateText(' Pages') }}</h3>
                        <ul>
                            <li><a href="{{ route('home') }}">
                                    {{ \App\Helpers\TranslationHelper::TranslateText('Accueil') }}</a></li>
                            <li><a href="{{ route('about') }}">
                                    {{ \App\Helpers\TranslationHelper::TranslateText('A propos de nous') }}</a></li>
                            <li><a href="{{ route('contact') }}">
                                    {{ \App\Helpers\TranslationHelper::TranslateText('Contact') }}</a></li>
                            <li><a href="{{ route('evenements') }}">
                                    {{ \App\Helpers\TranslationHelper::TranslateText('Actualités') }}</a></li>

                        </ul>
                    </div>
                    <!-- About Links End -->
                </div>

                <div class="col-lg-3 col-md-4">
                    <!-- About Links Start -->
                    <div class="footer-contact">
                        <h3> {{ \App\Helpers\TranslationHelper::TranslateText('Contact info') }}</h3>
                        <!-- Footer Contact Details Start -->
                        <div class="footer-contact-details">
                            <!-- Footer Info Box Start -->
                            <div class="footer-info-box">
                                <div class="icon-box">
                                    <img src="images/icon-phone.svg" alt="">
                                </div>
                                <div class="footer-info-box-content">
                                    <p>{{ $config->telephone ?? ' ' }}</p>
                                </div>
                            </div>
                            <!-- Footer Info Box End -->

                            <!-- Footer Info Box Start -->
                            <div class="footer-info-box">
                                <div class="icon-box">
                                    <img src="images/icon-mail.svg" alt="">
                                </div>
                                <div class="footer-info-box-content">
                                    <p>{{ $config->email ?? ' ' }}</p>
                                </div>
                            </div>
                            <!-- Footer Info Box End -->

                            <!-- Footer Info Box Start -->
                            <div class="footer-info-box">
                                <div class="icon-box">
                                    <img src="images/icon-location.svg" alt="">
                                </div>
                                <div class="footer-info-box-content">
                                    <p>{{ $config->addresse ?? ' ' }}</p>
                                </div>
                            </div>
                            <!-- Footer Info Box End -->
                        </div>
                        <!-- Footer Contact Details End -->
                    </div>
                    <!-- About Links End -->
                </div>
            </div>

            <!-- Footer Copyright Section Start -->
            <div class="footer-copyright">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6">
                    </div>


                    <div class="col-lg-4 col-md-6">
                        <!-- Footer Copyright Start -->
                        <div class="footer-copyright-text">
                            <p>Copyright {{ date('Y') }} PODO PRINTED | Design By <a href="https://www.e-build.tn"
                                    style="color: #c71f17;">
                                    <b> E-build </b>
                                </a>.</p>
                        </div>
                        <!-- Footer Copyright End -->
                    </div>

                    <div class="col-lg-4 col-md-6">

                        {{-- <div class="footer-links">
                            <ul>
                                <li><a href="{{ route('home') }}"> {{ \App\Helpers\TranslationHelper::TranslateText('Accueil') }}</a></li>
                        <li><a href="{{ route('about') }}"> {{ \App\Helpers\TranslationHelper::TranslateText('A propos de nous') }}</a></li>
                        <li><a href="{{ route('contact') }}"> {{ \App\Helpers\TranslationHelper::TranslateText('Contact') }}</a></li>

                        </ul>
                    </div> --}}

                    </div>
                </div>
            </div>
            <!-- Footer Copyright Section End -->
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Jquery Library File -->
    <script src="/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js file -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- Validator js file -->
    <script src="/js/validator.min.js"></script>
    <!-- SlickNav js file -->
    <script src="/js/jquery.slicknav.js"></script>
    <!-- Swiper js file -->
    <script src="/js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script src="/js/jquery.waypoints.min.js"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <!-- Magnific js file -->
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="/js/SmoothScroll.js"></script>
    <!-- Parallax js -->
    <script src="/js/parallaxie.js"></script>
    <!-- MagicCursor js file -->
    <script src="/js/gsap.min.js"></script>
    <script src="/js/magiccursor.js"></script>
    <!-- Text Effect js file -->
    <script src="/js/SplitText.js"></script>
    <script src="/js/ScrollTrigger.min.js"></script>
    <!-- YTPlayer js File -->
    <script src="/js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Wow js file -->
    <script src="/js/wow.js"></script>
    <!-- Main Custom js file -->
    <script src="/js/function.js"></script>
    {{--   <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script> --}}
</body>

</html>
