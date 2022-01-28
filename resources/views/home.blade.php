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
                           <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                     </form>
                    <li class="nav-item"><a class="nav-link active" href="/home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/home/hotels">Hotels</a></li>
                    <li class="nav-item"><a class="nav-link" href="/home/flights">Flights</a></li>
                    <li class="nav-item"><a class="nav-link" href="/home/activities">Activities</a></li>
                    <li>
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
    </section>
    <section class="ftco-section ftco-no-pb ftco-no-pt ftco-booking">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('web2.find') }}"  method="GET" class="booking-form">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg form-wrap d-flex py-3 py-lg-5 px-4">
                                <div class="form-group ps-4 border-0">
                                    <label >destination</label>
                                    <div class="form-field">
                                        <div class="icon"><span class="fas fa-map-signs"></span></div>
                                        <input type="text" class="form-control"
                                            placeholder="place" name="destination" value="{{ request()->input('destination') }}">
                                    </div>
                                </div>
                            </div>
                          
                            <div class="col-md-6 col-lg form-wrap d-flex py-3 py-lg-5 px-4">
                                <div class="form-group ps-4">
                                    <label >hotel</label>
                                    <div class="form-field">
                                        <div class="icon"><span class="fas fa-hotel"></span></div>
                                        <input type="text" class="form-control"
                                            placeholder="Hotel" name="hotel" value="{{ request()->input('hotel') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg form-wrap d-flex py-3 py-lg-5 px-4">
                                <div class="form-group ps-4">
                                    <label >air-line</label>
                                    <div class="form-field">
                                        <div class="icon"><span class="fas fa-plane-departure"></span></div>
                                        <input type="text" class="form-control"
                                            placeholder="air-line" name="airline" value="{{ request()->input('airline')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg d-flex">
                                <div class="form-group d-flex border-0">
                                    <div class="form-field w-100 align-items-center d-flex">
                                        <input type="submit"
                                            class="d-flex justify-content-center align-items-center align-self-stretch form-control btn btn-primary py-lg-4 py-xl-0">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
  
    <section class="ftco-section">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-md-8 heading-section text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">luxurious Services</span>
                    <h2 class="mb-4">Explore Our Services</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                
                <div class="col-md-3 col-xl-2 text-center d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="200" data-aos-duration="1000">
                    <a href="#" class="services">
                        <div class="icon"><span class="fas fa-desktop"></span></div>
                        <div class="text">
                            <h2>Easy Booking</h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-2 text-center d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="300" data-aos-duration="1000">
                    <a href="/home/hotels" class="services">
                        <div class="icon"><span class="fas fa-hotel"></span></div>
                        <div class="text">
                            <h2>Hotels</h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-2 text-center d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="400" data-aos-duration="1000">
                    <a href="home/flights" class="services">
                        <div class="icon"><span class="fas fa-plane-departure"></span></div>
                        <div class="text">
                            <h2>Flights</h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-2 text-center d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="400" data-aos-duration="1000">
                    <a href="/home/activities" class="services">
                        <div class="icon"><span class="fas fa-hiking"></span></div>
                        <div class="text">
                            <h2>Activities</h2>
                        </div>
                    </a>
                </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-md-8 heading-section text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Featured Items</span>
                    <h2 class="mb-4">Trips</h2>
                </div>
            </div>
            <div class="row justify-content-center">
            @if (count($trips) > 0)
            @foreach ($trips as $trip)
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="flip-left" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="room-wrap d-md-flex flex-md-column-reverse">
                        <a href="room-single.html" class="img img-room"
                            style="background-image:url(images/{{ $trip->image }})">
                        </a>
                        <div class="text p-5 text-center">
                            <h3>{{$trip->Title}}</h3>
                            <p>{{ $trip->description }}</p>
                            <p class="mb-0 mt-2"><span class="me-3 price">{{ $trip->price }}<small>/ night</small></span><a href="/home/trip/{{$trip->id}}"
                                    class="btn-custom">Book Now</a></p>
                        </div>
                    </div>
                </div>
                
            </div>
            @endforeach
            @endif
        </div>
    </section>
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
                
                <div class="col-md-6 col-lg-2">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Quick Links</h2>
                        <ul class="list-unstyled">
                            <li class="nav-item"><a class="nav-link" href="/home/hotels">Hotels</a></li>
                            <li class="nav-item"><a class="nav-link" href="/home/flights">Flights</a></li>
                            <li class="nav-item"><a class="nav-link" href="/home/activities">Activities</a></li>
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

    
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/glightbox.min.js%2baos.js.pagespeed.jc.gNemz1ctce.js"></script>
    <script>eval(mod_pagespeed_HTRluDb_jS);</script>
    <script>eval(mod_pagespeed_4HfeNGdLlq);</script>
    <script src="js/datepicker.min.js%2bgoogle-map.js%2bmain.js.pagespeed.jc.XiV_3kbmz-.js"></script>
    <script>eval(mod_pagespeed_k76nz7Okp_);</script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
    <script>eval(mod_pagespeed_mKCMGOt_Ci);</script>
    <script>eval(mod_pagespeed_VA6WPbHwQJ);</script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon='{"rayId":"6cd18e4aeb267365","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}'
        crossorigin="anonymous"></script>
    <script defer
    src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
    integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
    data-cf-beacon='{"rayId":"6cd18e4aeb267365","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}'
    crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/unwind/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jan 2022 21:02:22 GMT -->

</html>