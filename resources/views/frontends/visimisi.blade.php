@extends('layouts.indexLayout')

@section('content')
    @include('partials.nav')
    @include('partials.heropage')
    @if ($visimisi)
        <div class="px-4 flex flex-col space-y-6 max-w-6xl mx-auto py-6 ">
            <div class="prose max-w-none">
                {!! $visimisi->content !!}
            </div>
        </div>
    @endif
    {{-- footer --}}
    <livewire:frontend-footer  />

@endsection
