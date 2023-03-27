
@extends('layouts.indexLayout')

@section('content')
    @include('partials.nav')
    @include('partials.heropage')

    <livewire:contact-component />
    {{-- footer --}}
    <livewire:frontend-footer  />

@endsection
