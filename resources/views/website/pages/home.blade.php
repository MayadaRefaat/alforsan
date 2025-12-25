@extends('layouts.website')

@section('title', 'Home')

@section('content')
<section class="home-header">
    <div class="overlay"></div>

    <div class="container h-100">
        <div class="row h-100 align-items-center text-center">
            <div class=" text-white">
                <h1 class="mb-3">
                    {{ __('words.home_title') }}
                </h1>

                <p class="mb-4">
                    {{ __('words.home_subtitle') }}
                </p>

                <a href="{{ url('/services') }}" class="btn btn-primary-custom btn-lg">
                    {{ __('words.explore_services') }}
                </a>
            </div>
        </div>
    </div>
</section>

{{-- <img src="{{ asset('images/bg-header-1@3x.webp') }}" alt="Hospital Home" class="img-fluid mb-4"> --}}
<div class="container text-center">
    <h1 class="mb-4 text-primary-custom">Welcome to Alforsan Hospital</h1>
    <p class="lead">
        Trusted healthcare services with compassion and excellence.
    </p>
</div>
@endsection
