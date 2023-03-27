 {{-- hero --}}
 <div class="h-80 relative ">
    <div class="absolute bg-black z-20 w-full h-full opacity-40">   </div>
    <div class=" z-30 text-white text-center">
        <div class="flex flex-col h-full w-full px-4 items-center justify-center z-30 absolute">
            <h1 class="text-7xl font-bold">{{$title}}</h1>
        </div>
    </div>
    <img src="{{ asset('img/hero.jpeg') }}" alt="" class="h-full w-full object-cover object-center relative">
</div>
