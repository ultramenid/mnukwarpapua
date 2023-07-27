@extends('layouts.indexLayout')


@section('meta')
    @include('partials.metaDetail')
@endsection

@section('content')
@include('partials.nav')

    <div class="max-w-4xl mx-auto px-4 py-6">
        <h1 class="sm:text-4xl text-xl font-semibold text-center mb-6">{{$data->title}}</h1>
        <div class="text-center mb-2 text-sm text-gray-500">
            Tanggal Publish :
            @php
                $date = \Carbon\Carbon::parse($data->publishdate)->locale('id');
                $date->settings(['formatFunction' => 'translatedFormat']);
                echo $date->format('d F Y');
            @endphp
        </div>
        <img src="{{asset('/storage/files/photos/'.$data->img)}}" alt="{{$data->title}}" class="w-full h-101 object-cover object-center">

        <div class="max-w-3xl mx-auto prose mt-12 font-sans">
            {!! $data->content !!}
        </div>

    </div>

    <livewire:frontend-footer />
@endsection
