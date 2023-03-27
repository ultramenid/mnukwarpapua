@extends('layouts.backendLayout')

@section('content')
    @include('partials.backendHeader')
    @include('partials.backendNav')

    <livewire:visi-misi-component />
@endsection
