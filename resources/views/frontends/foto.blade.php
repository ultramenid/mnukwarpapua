
@extends('layouts.indexLayout')

@section('content')
    @include('partials.nav')
    @include('partials.heropage')

    <livewire:frontend-foto />
    {{-- footer --}}
    <livewire:frontend-footer  />

@endsection
