@extends('layout.layout')
@section('content')
    <section class="section-landing-page">
        <div class="grid grid-col-4x-8x">
            <div class="vh-100 content image-container-final">
            </div>
            <div class="form-container">
                <img class="prava-logo" src="{{ asset('assets/images/praava-logo-main.svg') }}" alt="">
                <div class="form-content">
                    <h2 class="form-title mb-1x">Thank you for your valuable feedback!</h2>
                    <p class="form-description">Your participation will help us continually improve our patient experience.
                    </p>
                </div>

            </div>
        </div>
    </section>
@endsection
