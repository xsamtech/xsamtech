<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="xsamtech.com">
        <meta name="keywords" content="@lang('miscellaneous.keywords')">
        <meta name="xsam-url" content="{{ getWebURL() }}">
        <meta name="xsam-api-url" content="{{ getApiURL() }}">
        <meta name="xsam-ref" content="{{ (!empty(Auth::user()) ? Auth::user()->api_token : 'nat') . '-' . (request()->has('app_id') ? request()->get('app_id') : 'nai') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="">

        <!-- ===============================================-->
        <!--                   Favicons                     -->
        <!-- ===============================================-->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}">
        <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicons/favicon.ico">
        <link rel="manifest" href="{{ asset('assets/img/favicon/site.webmanifest') }}">

        <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicon/android-chrome-192x192.png') }}">
        <meta name="theme-color" content="#ffffff">

        <script src="{{ asset('assets/addons/reign/overlayscrollbars/OverlayScrollbars.min.js') }}"></script>

        <!-- ===============================================-->
        <!--                  Fonts                         -->
        <!-- ===============================================-->
        <link rel="stylesheet" href="{{ asset('assets/icons/bootstrap-icons/bootstrap-icons.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">

        <!-- ===============================================-->
        <!--                  Stylesheets                   -->
        <!-- ===============================================-->
        <link rel="stylesheet" href="{{ asset('assets/addons/reign/swiper/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/reign/theme.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/reign/user.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.custom.css') }}">

        <title>
@if (!empty($exception))
            {{ $exception->getStatusCode() . ' - ' . __('notifications.' . $exception->getStatusCode() . '_title') }}
@else
    @if (!empty($error_title) || \Session::has('error_message') || \Session::has('error_message_login'))
            {{ !empty($error_title) ? $error_title : (\Session::has('error_message_login') ? preg_match('/~/', \Session::get('error_message_login')) ? explode(', ', explode('~', \Session::get('error_message_login'))[0])[2] : \Session::get('error_message_login') : (\Session::has('error_message') ? (preg_match('/~/', \Session::get('error_message')) ? explode('-', explode('~', \Session::get('error_message'))[0])[2] : \Session::get('error_message')) : '')) }}
    @endif

    @if (empty($error_title) && Session::get('error_message') == null)
      @if (Route::is('login'))
        @if (request()->has('check_param'))
          @if (request()->get('check_param') == 'email')
            @lang('auth.verified-email')
          @endif
          @if (request()->get('check_param') == 'phone')
            @lang('auth.verified-phone')
          @endif
        @else
            Xsam / @lang('miscellaneous.menu.login_register')
        @endif
      @endif

      @if (Route::is('register'))
        @if (!empty($token_sent))
            @lang('auth.otp-code')
        @else
          @if (!empty($temporary_user))
            @lang('miscellaneous.account.personal_infos.title')
          @else
          @if (!empty($request->redirect))
            @if (request()->has('check'))
              @if (request()->get('check') == 'email')
            @lang('auth.verify-email')
              @endif
              @if (request()->get('check') == 'phone')
            @lang('auth.verify-phone')
              @endif
            @else
            @lang('auth.reset-password')
            @endif
          @else
            @lang('auth.register')
          @endif
        @endif
      @endif
		@endif

		@if (Route::is('password.request') || !empty($former_password))
      @if (request()->has('check'))
        @if (request()->get('check') == 'email')
            @lang('auth.verify-email')
        @endif
        @if (request()->get('check') == 'phone')
            @lang('auth.verify-phone')
        @endif
        @else
            @lang('auth.reset-password')
        @endif
		  @endif

      @if (!empty($token_sent))
            @lang('auth.otp-code')
      @endif
    @endif

    @if (Route::is('home'))
            Xsam Technologies
    @endif
    @if (Route::is('about.home'))
            Nos produits
    @endif
    @if (Route::is('services.home'))
            Nos services
    @endif
    @if (Route::is('event.home'))
            Evénements
    @endif
    @if (Route::is('career.home'))
            Faire carrière chez Xsam
    @endif
    @if (!empty($entity_title))
            {{ $entity_title }}
    @endif
@endif
        </title>
    </head>

    <body>
      <nav class="navbar navbar-expand-lg navbar-dark navbar-theme fixed-top p-0" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container">
          <a class="navbar-brand fw-normal ls-2" href="{{ route('home') }}">
            <img src="{{ asset('assets/img/logo-text.png') }}" alt="Xsam logo" width="100">
          </a>

          <button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNavbarCollapse" aria-controls="primaryNavbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

          <div class="collapse navbar-collapse" id="primaryNavbarCollapse">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}"><span class="nav-link-text">Accueil</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink2" href="{{ route('about.home') }}" data-bs-toggle="dropdown-on-hover" aria-haspopup="true" aria-expanded="false">
                  <span class="nav-link-text">A propos</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink4">
                  <a class="dropdown-item" href="{{ route('about.entity', ['entity' => 'terms_of_use']) }}">Conditions d’utilisation</a>
                  <a class="dropdown-item" href="{{ route('about.entity', ['entity' => 'privacy_policy']) }}">Politique de confidentialité</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('products.home') }}"><span class="nav-link-text">Produits</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('services.home') }}"><span class="nav-link-text">Services</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('event.home') }}"><span class="nav-link-text">Evénements</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('career.home') }}"><span class="nav-link-text">Carrière</span></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- ===============================================-->
      <!--    Main Content                                -->
      <!-- ===============================================-->
      <main class="main" id="top">
        <div class="preloader" id="preloader" data-preloader>
          <div class="preloader-wrapper big active" data-preloader>
            <div class="spinner-layer spinner-white-only">
              <div class="circle-clipper left">
                <div class="circle"></div>
              </div>
              <div class="gap-patch">
                <div class="circle"></div>
              </div>
              <div class="circle-clipper right">
                <div class="circle"></div>
              </div>
            </div>
          </div>
        </div>

@yield('guest-content')

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-6" data-zanim-timeline="{}" data-zanim-trigger="scroll">
          <div class="bg-holder overlay" style="background-image:url({{ asset('assets/img/transit/backgrounds/newsletter-bg.jpg') }});background-position: 63% 26%;"></div>
          <!--/.bg-holder-->

          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-6 col-lg-4 text-md-end mb-2 mb-md-0">
                <div class="row g-0 align-items-center justify-content-md-end border-md-end">
                  <div class="col-auto ps-2 ps-md-0 pe-2 text-lg-end order-1 order-md-0">
                    <h3 class="text-white d-inline-block fs-4 mb-0 lh-1 mt-1" data-zanim-xs='{"from":{"opacity":1,"x":-30},"to":{"opacity":1,"x":0},"duration":1.5,"delay":0.2}'>S’abonner</h3>
                    <p class="mb-0 text-white" data-zanim-xs='{"from":{"opacity":1,"x":-30},"to":{"opacity":1,"x":0},"duration":1.5,"delay":0.3}'>Pour réjoindre la newsletter</p>
                  </div>
                  <div class="col-auto ps-lg-1 pe-md-4 pe-lg-3 pe-xl-4 order-0 order-md-1" data-zanim-xs='{"from":{"opacity":1,"x":-30},"to":{"opacity":1,"x":0},"duration":1.5,"delay":0.1}'><img class="opacity-75" src="{{ asset('assets/img/transit/line-icons/mail-4.svg') }}" width="65" style="margin-top: 0px;" alt="" /></div>
                </div>
              </div>
              <div class="col-md-6 col-lg-8 col-xl-6 ps-lg-0 px-xl-3">
                <form data-zanim-xs='{"from":{"opacity":1,"x":30},"to":{"opacity":1,"x":0},"duration":1.5,"delay":0.1}'>
                  <div class="form-floating mb-0">
                    <input class="form-control" id="floatingInput" type="email" placeholder="Votre E-mail" required="required" />
                    <label for="floatingInput">Votre E-mail</label>
                    <button class="btn btn-input-icon" type="submit"><span class="fas fa-arrow-right"></span></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- end of .container-->
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section id="contact">
          <div class="container">
            <div class="row">
              <div class="col text-center mb-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h2 class="fs-md-5" data-zanim-xs='{"duration":1.5,"delay":0}'>Ecrivez-nous</h2>
                </div>
                <div class="overflow-hidden">
                  <p class="fs--1 text-uppercase text-black ls-1 mb-0" data-zanim-xs='{"duration":1.5,"delay":0.1}'>nous sommes heureux de vous écouter à tout moment</p>
                </div>
                <div class="overflow-hidden">
                  <hr class="hr-short border-black" data-zanim-xs='{"duration":1.5,"delay":0.2}' />
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-lg-6 mb-5 mb-lg-0 d-flex flex-column justify-content-between">
                <div class="row">
                  <div class="col-12">
                    <h5 class="mb-3">Rejoignez-nous</h5>
                  </div>
                  <div class="col-auto mb-2 mb-sm-0">
                    <div class="row">
                      <div class="col-1"><span class="fas fa-location-arrow text-700"></span></div>
                      <div class="col px-2">
                        <p class="mb-1 text-700"><strong>Xsam Technologies</strong></p>
                        <p class="mb-0 text-600">08, av. Munzele, Q/Musangu,<br />Mt-Ngafula, Kinshasa-RDC</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-auto">
                    <div class="row mb-2 mb-sm-1">
                      <div class="col-1"><span class="fas fa-phone me-2 text-700"> </span></div>
                      <div class="col px-2"><a class="text-600" href="tel:+243815894649">+243 815 894 649 </a></div>
                    </div>
                    <div class="row">
                      <div class="col-1"><span class="fas fa-envelope me-2 text-700"></span></div>
                      <div class="col px-2"><a class="text-600" href="mailto:xsamtechnologies@gmail.com">xsamtechnologies@gmail.com</a></div>
                    </div>
                  </div>
                </div>
                <div class="googlemap rounded data-map mt-4" data-latlng="48.8583701,2.2922873,17" data-scrollwheel="false" data-icon="{{ asset('assets/img/transit/map-marker.png') }}" data-zoom="17" data-theme="Default" style="min-height: 14.63rem;">
                  <div class="marker-content py-3">
                    <h5>Crown Tower</h5>
                    <p>Lorem ipsum sit amet, dolor 1889 tower,<br /> with steps and elevators to observation decks.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <h5 class="mb-3">N'hésitez pas à nous écrire !</h5>
                <form class="zform text-left" method="post">
                  <input type="hidden" name="to" value="contact@xsam-tech.com" />
                  <div class="form-group mb-3">
                    <input class="fs-0 form-control" type="text" placeholder="Vos Noms" required="required" />
                  </div>
                  <div class="form-group mb-3">
                    <input class="fs-0 form-control" type="email" placeholder="Adresse E-mail" required="required" />
                  </div>
                  <div class="form-group mb-3">
                    <textarea class="fs-0 form-control contact-message" rows="8" placeholder="Tapez votre message ici" required="required"></textarea>
                  </div>
                  <div class="zform-feedback d-grid">
                    <button class="btn btn-dark hvr-sweep-top" type="submit">Envoyer le message</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- end of .container-->
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->
      </main>
      <!-- ===============================================-->
      <!--    End of Main Content-->
      <!-- ===============================================-->

      <!--===============================================-->
      <!--    Footer-->
      <!--===============================================-->
      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-1100 py-6 pb-9 px-3 px-lg-0">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 pe-lg-4 mb-4 mb-lg-0">
                <h5 class="text-white mb-3">Notre vision</h5>
                <p class="text-700">Nous visons un monde où toutes les personnes, sans distinction, sont en mesure de profiter d’une <strong>vie descente</strong>, pour eux et leurs proches, grâce à la <strong>technologie</strong>.</p>
                <ul class="list-inline mb-0">
                  <li class="list-inline-item me-0"><a class="text-900 hover-color-white px-2" href="#!"><span class="bi bi-x-twitter"></span></a></li>
                  <li class="list-inline-item me-0"><a class="text-900 hover-color-white px-2" href="#!"><span class="bi bi-linkedin"></span></a></li>
                  <li class="list-inline-item me-0"><a class="text-900 hover-color-white pe-2" href="#!"><span class="bi bi-instagram"></span></a></li>
                </ul>
              </div>

              <div class="col-lg-8">
                <div class="row">
                  <div class="col-6 col-md-3 ps-lg-4 mb-4 mb-lg-0">
                    <h5 class="text-white mb-3">Compagnie</h5>
                    <ul class="list-unstyled mb-0">
                      <li class="mb-1"><a class="text-700 hover-color-white" href="{{ route('about.home') }}">A propos</a></li>
                      <li class="mb-1"><a class="text-700 hover-color-white" href="{{ route('about.entity', ['entity' => 'contact']) }}">Contact</a></li>
                      <li class="mb-1"><a class="text-700 hover-color-white" href="{{ route('about.entity', ['entity' => 'gallery']) }}">Galerie</a></li>
                      <li class="mb-1"><a class="text-700 hover-color-white" href="{{ route('career.home') }}">Carrière</a></li>
                    </ul>
                  </div>

                  <div class="col-6 col-md-3 ps-4 mb-4 mb-lg-0">
                    <h5 class="text-white mb-3">Produit</h5>
                    <ul class="list-unstyled mb-0">
                      <li class="mb-1"><a class="text-700 hover-color-white" href="{{ route('products.home') }}">Produit</a></li>
                      <li class="mb-1"><a class="text-700 hover-color-white" href="{{ route('services.home') }}">Services</a></li>
                      <li class="mb-1"><a class="text-700 hover-color-white" href="{{ route('event.home') }}">Evénements</a></li>
                    </ul>
                  </div>
                  <div class="col-md-6 ps-md-4">
                    <h5 class="text-white mb-3">SUR LE BLOG</h5>
                    <ul class="list-unstyled mb-0">
                      <li class="mb-3">
                        <a class="text-700 hover-color-white" href="#">Lorem ipsum dolor sit amet, consectetur...</a>
                        <p class="text-900 hover-color-white mb-0">Jan 15, 2024</p>
                      </li>
                      <li class="mb-3">
                        <a class="text-700 hover-color-white" href="#">Excepteur sint occaecat cupidatat...</a>
                        <p class="text-900 hover-color-white mb-0">Jan 15, 2024</p>
                      </li>
                      <li class="mb-3">
                        <a class="text-700 hover-color-white" href="#">Fusce convallis, mauris imperdiet gravi...</a>
                        <p class="text-900 hover-color-white mb-0">Jan 15, 2024</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end of .container-->
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

      <footer class="footer text-center bg-black py-3 position-absolute w-100 bottom-0">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-auto mb-1 mb-md-0">
              <p class="mb-0">Copyright &copy; {{ date('Y') }} <a class="text-700 hover-color-white" href="{{ route('about.home') }}">Xsam Technologies</a><span class="mx-2">|</span><span class="text-900 hover-color-white"> Tous droits réservés.</span></p>
            </div>
          </div>
        </div>
      </footer>

      <a class="btn-back-to-top" href="#top"><img src="{{ asset('assets/img/transit/line-icons/upload-arrow.svg') }}" width="8" alt=""></a>

      <!-- ===============================================-->
      <!--                  JavaScripts                   -->
      <!-- ===============================================-->
      <script src="{{ asset('assets/addons/reign/popper/popper.min.js') }}"></script>
      <script src="{{ asset('assets/addons/reign/bootstrap/bootstrap.min.js') }}"></script>
      <script src="{{ asset('assets/addons/reign/anchorjs/anchor.min.js') }}"></script>
      <script src="{{ asset('assets/addons/reign/is/is.min.js') }}"></script>
      <script src="{{ asset('assets/addons/reign/bigpicture/BigPicture.js') }}"></script>
      <script src="{{ asset('assets/addons/reign/countup/countUp.umd.js') }}"></script>
      <script src="{{ asset('assets/addons/reign/progressbar/progressbar.min.js') }}"></script>
      <script src="{{ asset('assets/addons/reign/hover-dir/hoverDir.min.js') }}"></script>
      <script src="{{ asset('assets/addons/reign/isotope-layout/isotope.pkgd.min.js') }}"></script>
      <script src="{{ asset('assets/addons/reign/isotope-packery/packery-mode.pkgd.min.js') }}"></script>
      <script src="{{ asset('assets/addons/reign/swiper/swiper-bundle.min.js') }}"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARdVcREeBK44lIWnv5-iPijKqvlSAVwbw&callback=initMap" async></script>
      <script src="{{ asset('assets/addons/reign/fontawesome/all.min.js') }}"></script>
      <script src="{{ asset('assets/addons/reign/lodash/lodash.min.js') }}"></script>
      <script src="{{ asset('assets/addons/reign/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
      <script src="{{ asset('assets/addons/reign/gsap/gsap.js') }}"></script>
      <script src="{{ asset('assets/addons/reign/gsap/customEase.js') }}"></script>
      <script src="{{ asset('assets/js/reign/theme.js') }}"></script>
    </body>
</html>
