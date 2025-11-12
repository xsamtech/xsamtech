<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="xsamtech.com">
        <meta name="keywords" content="@lang('miscellaneous.keywords')">
        <meta name="description" content="">
        <meta name="xsam-url" content="{{ getWebURL() }}">
        <meta name="xsam-api-url" content="{{ getApiURL() }}">
        <meta name="xsam-ref" content="{{ (!empty(Auth::user()) ? Auth::user()->api_token : 'nat') . '-' . (request()->has('app_id') ? request()->get('app_id') : 'nai') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">

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
        <link rel="stylesheet" href="{{ asset('assets/icons/bootstrap-icons/font/bootstrap-icons.min.css') }}">
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
    @if (!empty($page_title))
            {{ $page_title }}
    @else
        Xsam Technologies
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
                    <h3 class="text-white d-inline-block fs-4 mb-0 lh-1 mt-1" data-zanim-xs='{"from":{"opacity":1,"x":-30},"to":{"opacity":1,"x":0},"duration":1.5,"delay":0.2}'>@lang('miscellaneous.public.footer.newsletter.title')</h3>
                    <p class="mb-0 text-white" data-zanim-xs='{"from":{"opacity":1,"x":-30},"to":{"opacity":1,"x":0},"duration":1.5,"delay":0.3}'>@lang('miscellaneous.public.footer.newsletter.text')</p>
                  </div>
                  <div class="col-auto ps-lg-1 pe-md-4 pe-lg-3 pe-xl-4 order-0 order-md-1" data-zanim-xs='{"from":{"opacity":1,"x":-30},"to":{"opacity":1,"x":0},"duration":1.5,"delay":0.1}'><img class="opacity-75" src="{{ asset('assets/img/transit/line-icons/mail-4.svg') }}" width="65" style="margin-top: 0px;" alt="" /></div>
                </div>
              </div>
              <div class="col-md-6 col-lg-8 col-xl-6 ps-lg-0 px-xl-3">
                <form data-zanim-xs='{"from":{"opacity":1,"x":30},"to":{"opacity":1,"x":0},"duration":1.5,"delay":0.1}'>
                  <div class="form-floating mb-0">
                    <input class="form-control" id="floatingInput" type="email" placeholder="Votre E-mail" required="required" />
                    <label for="floatingInput">@lang('miscellaneous.public.footer.newsletter.email')</label>
                    <button class="btn btn-input-icon" type="submit" title="@lang('miscellaneous.public.footer.newsletter.submit')"><span class="fas fa-arrow-right"></span></button>
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
                  <h2 class="fs-md-5" data-zanim-xs='{"duration":1.5,"delay":0}'>@lang('miscellaneous.public.footer.contact.title')</h2>
                </div>
                <div class="overflow-hidden">
                  <p class="fs--1 text-uppercase text-black ls-1 mb-0" data-zanim-xs='{"duration":1.5,"delay":0.1}'>@lang('miscellaneous.public.footer.contact.text')</p>
                </div>
                <div class="overflow-hidden">
                  <hr class="hr-short border-black" data-zanim-xs='{"duration":1.5,"delay":0.2}' />
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-lg-6 mb-5 mb-lg-0 d-flex flex-column justify-content-between">
                <div class="row mb-3">
                  <div class="col-12">
                    <h5 class="mb-3">@lang('miscellaneous.public.footer.contact.join_us.title')</h5>
                  </div>
                  <div class="col-auto mb-3 mb-sm-0">
                    <div class="row">
                      <div class="col-1"><span class="fas fa-location-arrow text-700"></span></div>
                      <div class="col px-2">
                        <p class="mb-1 text-700"><strong>Xsam Technologies</strong></p>
                        <p class="mb-0 text-600">@lang('miscellaneous.public.footer.contact.join_us.address')</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-auto">
                    <div class="row my-2">
                      <div class="col-1"><span class="fas fa-phone me-2 text-700"> </span></div>
                      <div class="col px-2"><a class="text-600" href="tel:{{ __('miscellaneous.public.footer.contact.join_us.phones.phone_1.link') }}">@lang('miscellaneous.public.footer.contact.join_us.phones.phone_1.text')</a></div>
                    </div>
                    <div class="row">
                      <div class="col-1"><span class="fas fa-envelope me-2 text-700"></span></div>
                      <div class="col px-2">
                        <a class="text-600" href="mailto:{{ __('miscellaneous.public.footer.contact.join_us.emails.email_1.link') }}">@lang('miscellaneous.public.footer.contact.join_us.emails.email_1.text')</a><br>
                        <a class="text-600" href="mailto:{{ __('miscellaneous.public.footer.contact.join_us.emails.email_2.link') }}">@lang('miscellaneous.public.footer.contact.join_us.emails.email_2.text')</a>
                      </div>
                    </div>
                  </div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.475387842533!2d15.272899674977001!3d-4.321422095652581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a333195cfa37f%3A0xd115031d3fd488e9!2sSilikin%20Village!5e0!3m2!1sfr!2scd!4v1762927202852!5m2!1sfr!2scd" width="480" height="280" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="col-lg-6">
                <h5 class="mb-3">@lang('miscellaneous.public.footer.contact.write_us.title')</h5>
                <p class="mb-3">@lang('miscellaneous.public.footer.contact.write_us.description')</p>
                <div class="zform text-left">
@if (auth()->check())
                  <button class="btn btn-dark hvr-sweep-top">@lang('miscellaneous.public.footer.contact.write_us.start_message')</button>
@else
                  <a href="{{ route('login') }}" class="btn btn-dark hvr-sweep-top">@lang('miscellaneous.public.footer.contact.write_us.start_message')</a>
@endif
                </div>
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
                <div class="bg-image mb-3">
                  <img src="{{ asset('assets/img/logo-text.png') }}" alt="Xsam Technologies" width="250">
                  <div class="mask"></div>
                </div>
                <h5 class="text-white mb-3">@lang('miscellaneous.public.footer.our_vision.title')</h5>
                <p class="text-700">@lang('miscellaneous.public.footer.our_vision.content')</p>
                <ul class="list-inline mb-0">
                  <li class="list-inline-item me-0"><a class="pe-2 text-900 hover-color-white" href="https://x.com/xsamtech" target="_blank"><span class="bi bi-twitter-x"></span></a></li>
                  <li class="list-inline-item me-0"><a class="pe-2 text-900 hover-color-white" href="https://www.linkedin.com/company/xsamtech" target="_blank"><span class="bi bi-linkedin"></span></a></li>
                  <li class="list-inline-item me-0"><a class="pe-2 text-900 hover-color-white" href="https://www.instagram.com/xsamtech/" target="_blank"><span class="bi bi-instagram"></span></a></li>
                  <li class="list-inline-item me-0"><a class="pe-2 text-900 hover-color-white" href="https://web.facebook.com/profile.php?id=61575850362221" target="_blank"><span class="bi bi-facebook"></span></a></li>
                </ul>
              </div>

              <div class="col-lg-8">
                <div class="row">
                  <div class="col-6 col-md-3 ps-lg-4 mb-4 mb-lg-0">
                    <h5 class="text-white mb-3">@lang('miscellaneous.public.footer.links_group.company')</h5>
                    <ul class="list-unstyled mb-0">
                      <li class="mb-1"><a class="text-700 hover-color-white" href="{{ route('about.home') }}">@lang('miscellaneous.menu.about')</a></li>
                      <li class="mb-1"><a class="text-700 hover-color-white" href="{{ route('about.entity', ['entity' => 'contact']) }}">@lang('miscellaneous.menu.contact')</a></li>
                      <li class="mb-1"><a class="text-700 hover-color-white" href="{{ route('career.home') }}">@lang('miscellaneous.menu.public.career')</a></li>
                      <li class="mb-1"><a class="text-700 hover-color-white" href="{{ route('event.home') }}">@lang('miscellaneous.menu.public.events')</a></li>
                    </ul>
                  </div>

                  <div class="col-6 col-md-3 ps-4 mb-4 mb-lg-0">
                    <h5 class="text-white mb-3">@lang('miscellaneous.public.footer.links_group.catalog')</h5>
                    <ul class="list-unstyled mb-0">
                      <li class="mb-1"><a class="text-700 hover-color-white" href="{{ route('products.home') }}">@lang('miscellaneous.menu.public.products')</a></li>
                      <li class="mb-1"><a class="text-700 hover-color-white" href="{{ route('services.home') }}">@lang('miscellaneous.menu.public.services')</a></li>
                      <li class="mb-1"><a class="text-700 hover-color-white" href="{{ route('about.entity', ['entity' => 'gallery']) }}">@lang('miscellaneous.menu.gallery')</a></li>
                    </ul>
                  </div>
                  <div class="col-md-6 ps-md-4">
                    <h5 class="text-white mb-3">@lang('miscellaneous.public.footer.links_group.our_articles')</h5>
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