<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <meta name="title" content="{{$title}}"/>
    <meta name="description" content="Sistem yang belum jadi. Sedang dibangun. Sabar, ya! " />


    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@AURIGA_ID">
    <meta name="twitter:title" content="{{$title}}">
    <meta name="twitter:description" content="Sistem yang belum jadi. Sedang dibangun. Sabar, ya! ">
    <meta name="twitter:image"  content="{{ asset('img/ogimage.png') }}">



    <meta property="og:description" content="Sistem yang belum jadi. Sedang dibangun. Sabar, ya! " />
    <meta property="og:site_name" content="{{$title}}" />
    <meta property="og:image" content="{{ asset('img/ogimage.png') }}" />

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    @livewireStyles
    @livewireScripts
</head>

<body class="font-sans">

    @yield('content')
    @stack('scripts')


</body>
@yield('js')
<script>
    // assume only one video is playing at a time
    var videoPlaying = null;
    const onPlay = function() {
    if (videoPlaying && videoPlaying != this) {
        videoPlaying.pause()
    }
    videoPlaying = this
    }
    // init event handler
    const videos = document.getElementsByClassName("video-bg")
    for (let i = 0; i < videos.length; i++) {
    videos[i].addEventListener("play", onPlay)
    }
</script>
</html>
