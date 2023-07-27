<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>

    @yield('meta')
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
