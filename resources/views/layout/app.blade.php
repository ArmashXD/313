<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="description" content="description"/>
    <meta name="keywords" content="keywords"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="icon" href="/img/fav.png"/>
    <title>313</title>
    <!-- styles-->
    <link rel="stylesheet" href="{{asset('')}}/css/styles.min.css"/>
    <!-- web-font loader-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <script>
        WebFontConfig = {
            google: {
                families: ['Quicksand:300,400,500,700', 'Permanent+Marker:400'],
            }
        }
        function font() {
            var wf = document.createElement('script')
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js'
            wf.type = 'text/javascript'
            wf.async = 'true'
            var s = document.getElementsByTagName('script')[0]
            s.parentNode.insertBefore(wf, s)

        }

        font()
    </script>
</head>
<style>
   header.header .row {
        background-color:#20212B;

    }
</style>
<body>
 
<div class="page-wrapper">
    <!-- header start-->
    <header class="header header--front">
        <div class="container-fluid">
            <div class="row no-gutters justify-content-between">
                <div class="col-auto d-flex align-items-center">
                    <div class="header-logo"><a class="header-logo__link" href="{{route('index')}}"><img
                                class="header-logo__img logo--light" src="{{asset('')}}/img/logo313.png" alt="logo"/><img
                                class="header-logo__img logo--dark" src="{{asset('')}}/img/logo313.png" alt="logo"/></a></div>
                </div>
                <div class="col-auto">
                    <!-- main menu start-->
                    <nav>
                        <ul class="main-menu">
                            <li class="main-menu__item text-dark main-menu__item text-dark{{Request::is('') ? '--active' : ''}}"><a
                                    class="main-menu__link text-light"
                                    href="{{route('index')}}"><span>HOME</span></a>
                            </li>
                            <li class="main-menu__item text-dark main-menu__item text-dark{{Request::is('how-it-works') ? '--active' : ''}}"><a
                                    class="main-menu__link text-light" href="{{route('how.it.work')}}"><span>HOw IT WORKS</span></a>
                            </li>
                            <li class="main-menu__item text-dark main-menu__item text-dark{{Request::is('faqs') ? '--active' : ''}}"><a
                                    class="main-menu__link text-light"
                                    href="{{route('faqs')}}"><span>FAQS</span></a></li>
                            <li class="main-menu__item text-dark main-menu__item text-dark{{Request::is('contacts') ? '--active' : ''}}"><a
                                    class="main-menu__link text-light" href="{{route('contact')}}"><span>Contact</span></a>
                            </li>
                            @if(!\Illuminate\Support\Facades\Auth::user())
                                <li class="main-menu__item text-dark main-menu__item text-dark{{Request::is('login') ? '--active' : ''}}"><a
                                        class="main-menu__link text-light"
                                        href="{{route('login')}}"><span>Login</span></a></li>
                                        <li class="main-menu__item text-dark main-menu__item text-dark{{Request::is('register') ? '--active' : ''}}">
                                        <a class="button footer__button button--filled mt-3" href="{{route('register')}}">Join Us</a>
                                    </li>
                            @else
                                <li class="main-menu__item text-dark main-menu__item text-dark{{Request::is('dashboard') ? '--active' : ''}}">
                                    <a
                                        class="main-menu__link text-light"
                                        href="{{route('home')}}"><span>Dashboard</span></a></li>
                                <li class="main-menu__item text-dark main-menu__item text-dark"><a href="#" class="main-menu__link text-light"
                                                        onclick="document.getElementById('logout-form').submit();">Logout</a></li>
                                <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                    @csrf
                                </form>
                            @endif

                        </ul>
                    </nav>
                    <!-- main menu end-->
                </div>
                <div class="col-auto d-flex align-items-center">

                </div>
            </div>
        </div>
    </header>
    <!-- header end-->

    <main class="main">
        @yield('content')
    </main>

    <!-- footer start-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-logo"><a class="footer-logo__link" href="#"><img
                                class="footer-logo__img" src="img/the313.v7.png" alt="logo"/></a></div>
                    <!-- footer socials start-->
                    <ul class="footer-socials">
                        <li class="footer-socials__item"><a class="footer-socials__link" href="#"><i
                                    class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="footer-socials__item"><a class="footer-socials__link" href="#"><i
                                    class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li class="footer-socials__item"><a class="footer-socials__link" href="#"><i
                                    class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li class="footer-socials__item"><a class="footer-socials__link" href="#"><i
                                    class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                    <!-- footer socials end-->
                </div>
                <div class="col-sm-6 col-lg-3">
                    <h4 class="footer__title">Contacts</h4>
                    <div class="footer-contacts">
                        <p class="footer-contacts__mail">Email: <a href="mailto:info@the313cf.com">info@the313cf.com</a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <h4 class="footer__title">Menu & Links</h4>
                    <!-- footer nav start-->
                    <nav>
                        <ul class="footer-menu">
                            <li class="footer-menu__item footer-menu__item--active"><a class="footer-menu__link"
                                                                                       href="{{route('index')}}">Home</a></li>
                            <li class="footer-menu__item"><a class="footer-menu__link" href="{{route('how.it.work')}}">How It Works</a></li>
                            <li class="footer-menu__item"><a class="footer-menu__link" href="{{route('contact')}}">Contact Us</a></li>
                            </li>
                        </ul>
                    </nav>
                    <!-- footer nav end-->
                </div>
                <div class="col-sm-6 col-lg-3">
                    @if(!auth()->user())
                    <h4 class="footer__title">Join Us</h4>
                    <p>Help Us Change the Lives of Everyone in World</p>
                    @else
                    <h4 class="footer__title">Dashboard</h4>
                    <p>You Are logged In.</p>
                    @endif
                    @if(!auth()->user())
                    <a class="button footer__button button--filled" href="{{route('register')}}">Join Us</a>
                    @else
                    <a class="button footer__button button--filled" href="{{route('home')}}">Dashboard</a>
                    @endif
                </div>
            </div>
            <div class="row align-items-baseline">
                <div class="col-md-6">
                    <p class="footer-copyright">Proudly Design and Developed By:
                        <strong><a href="https://www.boossto.com" target="_blank" style="color:white; ">BOOSSTO!</a></strong></p>
                </div>
                <div class="col-md-6">
                    <div class="footer-privacy"><a class="footer-privacy__link" href="#">Privacy Policy</a><span
                            class="footer-privacy__divider">|</span><a class="footer-privacy__link" href="#">Term and
                            Condision</a></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end-->
</div>
<!-- libs-->
<script src="{{asset('')}}/js/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="{{asset('')}}/js/libs.min.js"></script>
<!-- scripts-->
<script src="{{asset('')}}/js/common.min.js"></script>
</body>
</html>
