@extends('layouts.indexLayout')

@section('meta')
    @include('partials.metaIndex')
@endsection

@section('content')
    @include('partials.nav')
    @include('partials.heropage')
    @if ($staff)
        <div class="px-4 flex flex-col space-y-6 max-w-6xl mx-auto py-12 ">
            <div class="grid grid-flow-row sm:grid-cols-2 grid-cols-1 gap-x-14 w-full gap-y-14">
                @foreach ($staff as $item)
                    <div class="flex space-x-6 items-center w-full">
                        <div class="w-4/12">
                            <img src="{{asset('storage/files/photos/'.$item->foto)}}" alt="" class="rounded-full w-40 sm:h-40 h-32 object-center object-cover">
                        </div>
                        <div class="flex flex-col space-y-2 w-7/12">
                            <div class="flex space-x-1 items-center">
                                <h1 class="text-xl font-semibold">{{$item->nama}},</h1>
                                <h2 class="text-base font-normal">{{$item->posisi}}</h2>
                            </div>
                            <p class="text-sm">
                                {{$item->deskripsi}}
                            </p>
                        </div>
                    </div>


                @endforeach
            </div>
        </div>
    @endif
    {{-- footer --}}
    <livewire:frontend-footer  />

@endsection
