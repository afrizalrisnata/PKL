@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Welcome')

{{-- Content body: main page content --}}

@section('content_body')
    {{-- Display a welcome message based on the user's role --}}

    @if(Auth::user()->level == 'admin')
        <p>Selamat datang, Admin!</p>
    @else
        <p>Selamat datang, User!</p>
    @endif

    <!-- Additional content goes here -->
@stop

{{-- Push extra CSS --}}

@push('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/public/css/style.css"> --}}
@endpush

{{-- Push extra scripts --}}

@push('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@endpush
