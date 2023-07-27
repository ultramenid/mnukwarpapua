@extends('layouts.indexLayout')

@section('meta')
    @include('partials.metaIndex')
@endsection

@section('content')
    @include('partials.nav')

    {{-- hero --}}
    @if($cover)
    <div class="sm:h-106 h-64 relative w-full">
        <div class="absolute bg-black z-20 w-full h-full opacity-40">   </div>
        <div class=" z-30 text-white text-center">
            <div class="flex flex-col h-full w-full px-4 items-center justify-center z-30 absolute">
                <h1 class="sm:text-7xl text-3xl font-bold">{{$cover->title}}</h1>
                <p class="max-w-3xl mx-auto mt-6 sm:text-base text-sm">{{$cover->deskripsi}}</p>
            </div>
        </div>
        <img src="{{ asset('storage/files/photos/'.$cover->img) }}" alt="" class="h-full w-full object-cover object-center relative">
    </div>
    @endif
    {{-- terkini --}}
    <div class="max-w-6xl mx-auto px-4 grid sm:grid-cols-2 grid-cols-1 gap-4 mt-12 w-full">
        <div class="col-span-1 sm:order-last order-first ">
            <img src="{{ asset('img/hero.jpeg') }}" alt="title" class="sm:h-72 h-48 w-full object-center object-cover">
        </div>
        <div class=" col-span-1 sm:order-first order-last ">
            <h1 class="sm:text-3xl text-xl mb-2">A Section Title</h1>
            <p class="mb-6 sm:text-base text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus laboriosam magni voluptas maiores architecto quas nobis enim veritatis est eaque exercitationem corrupti alias id modi, sint atque inventore vel illo?</p>
            <a class="px-4 text-center rounded py-2 text-white bg-mnukwar sm:w-32 w-full sm:text-base text-sm">
                Read More
            </a>
        </div>


    </div>

    {{-- headline --}}
    <div class="max-w-6xl mx-auto px-4 bg-gray-100 py-4 mt-12 mb-4 w-full">
        <div class="w-full text-center">
            <h2 class="text-mnukwar sm:text-4xl text-2xl font-semibold">A punchy Headline</h2>
            <p class="mt-6 max-w-3xl mx-auto sm:text-base text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae dolor a numquam provident quae dolores dolorum harum! Reiciendis, similique suscipit? Dignissimos aliquid vero aperiam suscipit ullam sint quae deleniti magnam.</p>
            <p class="mt-6 max-w-4xl  mx-auto bg-white px-2 py-2">
                <img src="{{ asset('img/hero.jpeg') }}" alt="headline" class="w-full  sm:h-106 h-60 object-cover object-center ">
                <p class="font-light text-xs italic mt-4 max-w-3xl mx-auto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur esse perferendis natus dignissimos amet ipsam, cupiditate accusantium hic tenetur minus cum aliquam architecto nesciunt minima consequuntur aliquid omnis similique voluptatibus.</p>
            </p>


            <div class=" grid md:grid-cols-3 grid-cols-1 gap-4 mt-32 ">
                <!-- card -->
                <div class="bg-white pb-6">
                    <div class="card">
                        <div class="card-header ">
                            <img
                                class="sm:h-72 h-48 w-full object-cover"
                                src="{{ asset('img/hero.jpeg') }}"
                                alt="tailwind-card-image"
                            />
                        </div>
                        <div class="card-body ">
                            <h1 class="mt-6 md:text-2xl sm:text-xl text-base  font-bold  text-auriga-biru">Judul artikel maksimal 70
                                karakter termasuk spasi
                                di sini jadi 3 baris
                            </h1>
                            <div class="mt-6  text-auriga-biru">
                                <a class="font-bold sm:text-base text-sm">NOVEMBER 2022</a><span> | </span><a>Xerundistius ipsum nulpa
                                    destibus de omnihit volupist, si dipitempore,
                                    quiaerum quibus. Harciatur aborit fugiatusdae
                                    num reptatur</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card -->
                <div class="bg-white pb-6">
                    <div class="card">
                        <div class="card-header ">
                            <img
                                class="sm:h-72 h-48 w-full object-cover"
                                src="{{ asset('img/hero.jpeg') }}"
                                alt="tailwind-card-image"
                            />
                        </div>
                        <div class="card-body ">
                            <h1 class="mt-6 md:text-2xl sm:text-xl text-base  font-bold  text-auriga-biru">Judul artikel maksimal 70
                                karakter termasuk spasi
                                di sini jadi 3 baris
                            </h1>
                            <div class="mt-6  text-auriga-biru">
                                <a class="font-bold sm:text-base text-sm">NOVEMBER 2022</a><span> | </span><a>Xerundistius ipsum nulpa
                                    destibus de omnihit volupist, si dipitempore,
                                    quiaerum quibus. Harciatur aborit fugiatusdae
                                    num reptatur</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card -->
                <div class="bg-white pb-6">
                    <div class="card">
                        <div class="card-header ">
                            <img
                                class="sm:h-72 h-48 w-full object-cover"
                                src="{{ asset('img/hero.jpeg') }}"
                                alt="tailwind-card-image"
                            />
                        </div>
                        <div class="card-body ">
                            <h1 class="mt-6 md:text-2xl sm:text-xl text-base  font-bold  text-auriga-biru">Judul artikel maksimal 70
                                karakter termasuk spasi
                                di sini jadi 3 baris
                            </h1>
                            <div class="mt-6  text-auriga-biru">
                                <a class="font-bold sm:text-base text-sm">NOVEMBER 2022</a><span> | </span><a>Xerundistius ipsum nulpa
                                    destibus de omnihit volupist, si dipitempore,
                                    quiaerum quibus. Harciatur aborit fugiatusdae
                                    num reptatur</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- footer --}}
    <livewire:frontend-footer  />

@endsection
