@extends('layouts.website')

@section('title', 'Services')

@section('content')
<div class="container">
    <h2 class="text-center text-primary-custom mb-4">Our Services</h2>

    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <h5>General Consultation</h5>
                    <p>Professional medical consultations for all patients.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <h5>Home Care</h5>
                    <p>High-quality medical care at home.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <h5>Laboratory Services</h5>
                    <p>Accurate and fast lab testing.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
