<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="/img/icon.png" type="image/png"/>

    <meta name="description" content="@yield('meta-description', 'Exportez facilement vos revenus Stripe pour votre comptabilité européenne.')">
    <meta name="keywords" content="Stripe,export,belgique,belgium,accounting,comptabilité,comptable">
    <meta name="author" content="stripecomptable.be">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Stripe Comptable">
    <meta name="twitter:description" content="Exportez facilement vos revenus Stripe pour votre comptabilité européenne" />
    <meta name="twitter:image:src" content="{{ url('img/social_banner.png') }}">
    <meta name="twitter:url" content="{{ route('home') }}">

    <meta property="og:title" content="Votre comptabilité toujours à jour | Stripe Comptable" />
    <meta property="og:url" content="{{ route('home') }}"/>
    <meta property="og:description" content="Exportez facilement vos revenus Stripe pour votre comptabilité européenne" />
    <meta property="og:image" content="{{ url('img/social_banner.png') }}">
    <meta property="og:site_name" content="Exportez facilement vos revenus Stripe pour votre comptabilité européenne" />
    <meta property="og:type" content="website"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('meta-title', 'Exportez facilement vos revenus Stripe pour votre comptabilité européenne')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.accounting = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        @include('partials.nav')
        @include('partials.errors')
        @include('partials.flash')
        @yield('content')
        @include('partials.footer')
        <portal-target name="modal"></portal-target>
    </div>

    <!-- Scripts -->
    <script src="{{ mix('/js/app.js') }}"></script>
    @include('partials.ga')
</body>
</html>
