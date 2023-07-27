
@extends('layouts.indexLayout')

@section('meta')
    @include('partials.metaIndex')
@endsection

@section('content')
    @include('partials.nav')
    @include('partials.heropage')

    <livewire:frontend-video />
    {{-- footer --}}
    <livewire:frontend-footer  />

@endsection
