
@extends('layouts.indexLayout')

@section('content')
    @include('partials.nav')
    @include('partials.heropage')

    <livewire:frontend-livelyhood />
    {{-- footer --}}
    <livewire:frontend-footer  />

@endsection
