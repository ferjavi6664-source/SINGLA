@extends('layouts.app')

@section('content')

<div class="d-flex">

    {{-- Sidebar --}}
    @include('partials.sidebar')

    {{-- Contenido dinámico --}}
    <div class="flex-fill p-4" id="contenido">
        @yield('content')
    </div>

</div>

@endsection