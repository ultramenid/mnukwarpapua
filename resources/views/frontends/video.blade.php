
@extends('layouts.indexLayout')

@section('content')
    @include('partials.nav')
    @include('partials.heropage')

    <livewire:frontend-video />
    {{-- footer --}}
    <livewire:frontend-footer  />

@endsection
