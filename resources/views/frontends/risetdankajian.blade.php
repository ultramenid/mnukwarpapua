
@extends('layouts.indexLayout')

@section('content')
    @include('partials.nav')
    @include('partials.heropage')

    <livewire:frontend-risetdan-kajian />
    {{-- footer --}}
    <livewire:frontend-footer  />

@endsection
