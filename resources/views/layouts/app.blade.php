@extends('layouts.base')

@section('body')
    @include('components.navigation')
    @include('components.heroImage')
    @include('components.featurePage')
    @include('components.featurePage2')
    @include('components.geminiPage')
    
    {{-- <div class="py-6">
        @yield('content')
    </div> --}}
    
    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
