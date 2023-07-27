<!-- Place this data between the <head> tags of your website -->
    <meta name="title" content="{{$title}}"/>
    <meta name="description" content="Belum ada deskripsi" />
    <meta name="news_keywords" content="Belum ada deskripsi" />
    <meta name="geo.country" content="ID" />
    <meta http-equiv="content-language" content="ID" />
    <meta name="geo.placename" content="Indonesia" />
    <meta name="copyright" content="{{url()->full()}}">
    <meta name="creation date" content="2023">
    <meta name="keywords" content="Mnukwar, Papua, Mnukwar Papua, Mnukwarpapua">
    <link rel="canonical" href="{{url()->full()}}"/>
    <meta name="robots" content="index, follow">
    <meta name="author" content="Mnukwarpapua">
    <meta name="googlebot-news" content="index, follow, follow" />
    <meta name="googlebot" content="index, follow, follow" />
    <meta name="coverage" content="Mnukwarpapua" >

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="#">
    <meta name="twitter:title" content="{{$title}}">
    <meta name="twitter:description" content="Belum ada deskripsi">
    <meta name="twitter:creator" content="#">
    <meta name="twitter:url" content="{{url()->full()}}" />
    <!-- Twitter summary card with large image must be at least 280x150px -->
    <meta name="twitter:image"  content="{{ asset('img/logometa.jpeg') }}">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{$title}}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url()->full()}}" />
    <!-- Facebook image must be at least 600x315px -->
    <meta property="og:image" content="{{ asset('img/logometa.jpeg') }}" />
    <meta property="og:description" content="Belum ada deskripsi" />
    <meta property="og:site_name" content="{{$title}}" />
    <meta property="article:tag" content="Mnukwar, Papua, Mnukwar Papua, Mnukwarpapua" />
