<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="xsamtech.com">
        <meta name="keywords" content="@lang('miscellaneous.keywords')">
        <meta name="xst-url" content="{{ getWebURL() }}">
        <meta name="xst-api-url" content="{{ getApiURL() }}">
        <meta name="xst-ref" content="{{ (!empty(Auth::user()) ? Auth::user()->api_token : 'nat') . '-' . (request()->has('app_id') ? request()->get('app_id') : 'nai') }}">
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
        <!--                  Stylesheets                   -->
        <!-- ===============================================-->
        <link rel="stylesheet" href="{{ asset('assets/addons/reign/swiper/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/reign/theme.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/reign/user.css') }}">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">

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

		@if (Route::is('register') || !empty($request->temporary_user_id))
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
@endif
        </title>
    </head>

    <body>

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
