<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all"/>
    <meta name="googlebot" content="all">
    <meta name="author" content="TABS Musica">
    <meta name="publisher" content="TABS Project" />
    <meta name="description" content="@yield('metaDescription')">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('metaTitle')">
    <meta name="twitter:site" content="@tabs_musica">
    <meta name="twitter:description" content="@yield('metaDescription')">
    <meta name="twitter:image" content="@yield('metaImage')">
    <meta name="twitter:image:alt" content="@yield('metaTitle')">

    @yield('og')

    @yield('schema')

    <link rel="alternate" hreflang="id" href="{{url()->current()}}" />
    <link rel="icon" href="{{url('assets/web/media/favicon.svg')}}">
    <link rel="apple-touch-icon" href="{{url('assets/web/media/favicon.svg')}}">
    <link rel="canonical" href="{{url()->current()}}" />
    <meta name="theme-color" content="#4285f4">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('assets/web/css/style.min.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
    <title>@yield('metaTitle')</title>
</head>

<body>
    
    @include('web._inc.navbar')

    @yield('content')
    
    @include('web._inc.footer')

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
