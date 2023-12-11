<!DOCTYPE html>
<html lang="zxx">

<head>
    <style>
        *{
            scroll-behavior: smooth;
            transition-duration:all 1s ease;
        }

    </style>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title', $title)</title>
    <link rel="icon" href="{{ asset('logo.png') }}" type="image/icon type">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/plyr.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


    {{--    --}}


    <div class="scroll-container">

        <!-- Konten scrollable di sini --><!-- Header Section Begin -->
        <nav id="navbar">
            <div class="hamburgerParent">
                <div class="hamburger">
                <div class="element1"></div>
                <div class="element2"></div>
                <div class="element3"></div>
                </div>
            </div>
            <div class="menu">
             <ul>
                <div class="logo">Popcorn Pixels</div>
                <li><a href="{{ route('homepage') }}">Homepage</a></li>
<hr>
                <li><a href="{{ route('categories-animation') }}">Animation</a></li>
                <li><a href="{{ route('categories-action') }}">Action</a></li>
                <li><a href="{{ route('categories-history') }}">History</a></li>
                <li><a href="{{ route('categories-horror') }}">Horror</a></li>
                <li><a href="{{ route('categories-sf') }}">Science Fiction</a></li>
 <hr><hr>
 <li><a href="{{ route('articles.show') }}">Blog & Discusion</a></li>
 <li><a href="{{ route('profile') }}">Profile</a></li>

             </ul>
            </div>
            <div class="logo">Popcorn Pixels</div>
            <div class="signIn">
            @guest
                                    @if (Route::has('login'))




                                        <a class="nav-link" href="{{ route('login') }}">
                                            <button type="submit" class="butt">
                                                Sign Up!
                                                <div class="hoverEffect">
                                                    <div>

                                                    </div>
                                                </div>
                                            </button>
                                        </a>

                                    @endif

                                    @if (Route::has('register'))
                                        <li class="">
                                            <a class="nav-link" href="{{ route('register') }}">Regiter</a>
                                        </li>
                                    @endif
                                @else

                                        <a  class="" href="{{ ('profile') }}" >
                                            Hello {{ Auth::user()->name }} !
                                            @if(Auth::user()->image)
                                            <img class="gambar-profile" src="{{asset('/storage/images/'.Auth::user()->image)}}" alt=":v" style="width: 50px;height: 50px; margin: 0px; ">
                                            @endif
                                        </a>

                                        {{--  <li class="dropdown">
                                        <a id="navbarDropdown" class="nav-link" href="{{ ('profile') }}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            Hello {{ Auth::user()->name }} !  <span class="icon_profile ml-2"></span>
                                        </a>  --}}




                                @endguest
            </div>
        </nav>
        <!-- Header End -->
        <!-- Breadcrumb Begin -->
        <div class="breadcrumb-option" id="head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb__links">
                            <a href="{{ route('homepage') }}"><i class="fa fa-home"></i> Home</a>
                            <a href="{{ route('categories') }}">Categories</a>
                            <a href="{{ route('categories') }}">{{ $category }}</a>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->
        {{--  container  --}}
        @yield('container')


        <!-- Product Section End -->

        <!-- Footer Section Begin -->
        <!-- Footer Section Begin -->
<footer class="footer">
    <div class="page-up">
        <a href="#head"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__logo">
                    <a href="./index.html"><img src="img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer__nav">
                    <ul>
                        <li class=" "><a href="{{ route('homepage') }}">Homepage</a></li>
                        <li class=""><a href="{{ route('categories') }}">Categories</a></li>
                        <li class=""><a href="{{ route('articles.show') }}">Our Blog</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <p>
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                    </p>

              </div>
          </div>
      </div>
  </footer>
  <!-- Footer Section End -->

  <!-- Search model Begin -->
  <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Js Plugins -->
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{  asset('js/player.js') }}"></script>
<script src="{{  asset('js/jquery.nice-select.min.js') }}"></script>
<script src="{{  asset('js/mixitup.min.js') }}"></script>
<script src="{{ asset('js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

<script>
    const hamburger = document.getElementsByClassName("hamburger")[0];
    const hamburgerElement1 = document.getElementsByClassName("element1")[0];
    const hamburgerElement2 = document.getElementsByClassName("element2")[0];
    const hamburgerElement3 = document.getElementsByClassName("element3")[0];
    const navmenu = document.getElementsByClassName("menu")[0];

    hamburger.addEventListener('click', function() {
        navmenu.classList.toggle("show");
        hamburgerElement1.classList.toggle("ok");
        hamburgerElement2.classList.toggle("ok");
        hamburgerElement3.classList.toggle("ok");
    })
</script>


</html>
