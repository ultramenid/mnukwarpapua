
@extends('layouts.indexLayout')

@section('meta')
    @include('partials.metaIndex')
@endsection

@section('content')
    @include('partials.nav')
    @include('partials.heropage')

    <livewire:contact-component />
    {{-- footer --}}
    <livewire:frontend-footer  />

@endsection
