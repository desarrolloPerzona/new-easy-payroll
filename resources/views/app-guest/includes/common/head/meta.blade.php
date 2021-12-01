{{--META TAGS--}}
<meta name="description" content="@yield('seo-description')"/>
<meta name="keywords" content="@yield('seo-keywords')"/>
<meta name="author" content="@yield('seo-author')"/>
{{--OG TYPES--}}
<meta property=”og:site_name” content="{{ env('APP_NAME') }}"/>
<meta property="og:url" content="{{ request()->url() }}"/>
<meta property="og:type" content="@yield('og-type')"/>
<meta property="og:title" content="@yield('og-title')"/>
<meta property="og:image" content="@yield('og-image')"/>
<meta property="og:image:with" content="@yield('og-img-width')"/>
<meta property="og:image:height" content="@yield('og-img-height')"/>
<meta property="og:description" content="@yield('og-description')"/>
<meta property="fb:app_id" content="{{env('FACEBOOK_CLIENT_ID')}}"/>
{{--TWITTER TYPES--}}
<meta property="twitter:creator" content="{{ env('APP_NAME') }}"/>
<meta name="twitter:card" content="@yield('twitter-card')"/>
<meta name="twitter:description" content="@yield('twitter-description')"/>
<meta name="twitter:title" content="@yield('twitter-title')"/>
<meta name="twitter:image" content="@yield('twitter-image')"/>
{{--FAVICON--}}
<link rel="icon" type="image/png" href="{{env('APP_FAVICON')}}">
{{--ICONS--}}
<link rel="apple-touch-icon" sizes="57x57" href="{{asset('images/icons/apple-icon-57x57.png')}}">
<link rel="apple-touch-icon" sizes="60x60" href="{{asset('images/icons/apple-icon-60x60.png')}}">
<link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/icons/apple-icon-72x72.png')}}">
<link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/icons/apple-icon-76x76.png')}}">
<link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/icons/apple-icon-114x114.png')}}">
<link rel="apple-touch-icon" sizes="120x120" href="{{asset('images/icons/apple-icon-120x120.png')}}">
<link rel="apple-touch-icon" sizes="144x144" href="{{asset('images/icons/apple-icon-144x144.png')}}">
<link rel="apple-touch-icon" sizes="152x152" href="{{asset('images/icons/apple-icon-152x152.png')}}">
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/icons/apple-icon-180x180.png')}}">
<link rel="icon" type="image/png" sizes="192x192" href="{{asset('images/icons/android-icon-192x192.png')}}">
<link rel="icon" type="image/png" sizes="192x192" href="{{asset('images/icons/android-icon-144x144.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/icons/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="96x96" href="{{asset('images/icons/favicon-96x96.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/icons/favicon-16x16.png')}}">
{{--META TAGS--}}
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{asset('images/icons/ms-icon-144x144.png')}}">
<meta name="theme-color" content="#ffffff">

