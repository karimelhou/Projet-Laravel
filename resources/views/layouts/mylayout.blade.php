<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/unwind/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jan 2022 21:00:44 GMT -->

<head>
    <title>luxurious</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&amp;family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../../../stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet"
        href="/css/A.animate.css%2bflaticon.css%2btiny-slider.css%2bglightbox.min.css%2baos.css%2bdatepicker.min.css%2bstyle.css%2cMcc.nCQXu6LVyk.css.pagespeed.cf.rg4CHwA3tS.css" />
    <script>(function (w, d) {
            !function (e, t, r, a, s) {
                e[r] = e[r] || {}, e[r].executed = [], e.zaraz = { deferred: [] }; var n = t.getElementsByTagName("title")[0]; e[r].c = t.cookie, n && (e[r].t = t.getElementsByTagName("title")[0].text), e[r].w = e.screen.width, e[r].h = e.screen.height, e[r].j = e.innerHeight, e[r].e = e.innerWidth, e[r].l = e.location.href, e[r].r = t.referrer, e[r].k = e.screen.colorDepth, e[r].n = t.characterSet, e[r].o = (new Date).getTimezoneOffset(),//
                    e[s] = e[s] || [], e.zaraz._preTrack = [], e.zaraz.track = (t, r) => e.zaraz._preTrack.push([t, r]), e[s].push({ "zaraz.start": (new Date).getTime() }); var i = t.getElementsByTagName(a)[0], o = t.createElement(a); o.defer = !0, o.src = "../../cdn-cgi/zaraz/sd41d.js?" + new URLSearchParams(e[r]).toString(), i.parentNode.insertBefore(o, i)
            }(w, d, "zarazData", "script", "dataLayer");
        })(window, document);</script>
        <script src="https://kit.fontawesome.com/767974efb9.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg  ftco-navbar-light">
        <div class="container-xl">
            <a class="fas fa-shopping-cart" href="/home">
                Panier{{ Cart::count() }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <form action="{{ route('web.find') }}" method="GET">
                        <div style="display: flex" class="form-group">
                           <input type="text" class="form-control" name="query" placeholder="Find a trip" value="{{ request()->input('query') }}">
                           <span class="text-danger">@error('query'){{ $message }} @enderror</span>
                           <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                     </form>
                    <li class="nav-item"><a class="nav-link active" href="/home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/home/hotels">Hotels</a></li>
                    <li class="nav-item"><a class="nav-link" href="/home/flights">Flights</a></li>
                    <li class="nav-item"><a class="nav-link" href="/home/activities">Activity</a></li>

                        @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    
                    @else
                        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Log in</a></li>
                        
                        @if (Route::has('register'))
                            <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <section class="hero-wrap" style="background-image:url(images/eva1.jpg)">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-lg-10 text-center">
                    <span class="subheading">Enjoy Your Wonderful Holidays With A Great Luxury Experience!</span>
                    <h1 class="mb-4">Most Relaxing Place</h1>
                </div>
            </div>
        </div>
    </section><br>
    <main class="py-4">
        @yield('content')
    </main>
</div>
<footer class="ftco-footer">
    <div class="container-xl">
        <div class="row mb-5 pb-5 justify-content-between">
            <div class="col-md-6 col-lg">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2 logo d-flex">
                        <a class="navbar-brand align-items-center" href="index-2.html">
                            <span class="">luxurious <small>Online Booking</small></span>
                        </a>
                    </h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                    </p>
                    <ul class="ftco-footer-social list-unstyled mt-2">
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Services</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ftco-footer-widget mb-4">
                            <ul class="list-unstyled">
                                <li><a href="#"><span class="fa fa-chevron-right me-2"></span>Free Wifi</a></li>
                                <li><a href="#"><span class="fa fa-chevron-right me-2"></span>Easy Booking</a></li>
                                <li><a href="#"><span class="fa fa-chevron-right me-2"></span>Restaurant</a></li>
                                <li><a href="#"><span class="fa fa-chevron-right me-2"></span>Swimming Pool</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ftco-footer-widget mb-4">
                            <ul class="list-unstyled">
                                <li><a href="#"><span class="fa fa-chevron-right me-2"></span>Beauty &amp;
                                        Health</a></li>
                                <li><a href="#"><span class="fa fa-chevron-right me-2"></span>60" Flatscreen TV</a>
                                </li>
                                <li><a href="#"><span class="fa fa-chevron-right me-2"></span>Cold Aircondition</a>
                                </li>
                                <li><a href="#"><span class="fa fa-chevron-right me-2"></span>Help &amp; Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-2">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Quick Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><span class="fa fa-chevron-right me-2"></span>Home</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right me-2"></span>About</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right me-2"></span>Rooms</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right me-2"></span>Resto &amp; Bar</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon fa fa-map marker"></span><span class="text">FSTT. 
                                    Génie Informatique, Tangier, Morocco, MA</span></li>
                            <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+212 675387857</span></a></li>
                            <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span
                                        class="text"><span class="__cf_email__"
                                            data-cfemail="056c6b636a457c6a7077616a68646c6b2b666a68">[email&#160;protected]</span></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0 py-5 bg-darken">
        <div class="container-xl">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0" style="color: rgba(255,255,255,.5); font-size: 13px;">Copyright &copy;
                        <script data-cfasync="false"
                            src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                        <script>document.write(new Date().getFullYear());</script> All rights reserved 
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>