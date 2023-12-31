@extends('layout.layout')
@section('content')
    <section class="section-landing-page">
        <div class="grid grid-col-4x-8x">
            <div class="vh-100 content">
            </div>
            <div class="form-container">
                <div class="form-content">
                    <h2 class="form-title mb-1x">Multiple UPI Found!</h2>
                    <p class="form-description">Please select an UPI from which you want to submit the feedback.</p>
                </div>

                <div class="upi-cards-container">
                    <a href="{{ route('main.form.slide1') }}">
                        <div class="upi-cards">
                            @include('components.patientUpiCard')
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
@endsection
