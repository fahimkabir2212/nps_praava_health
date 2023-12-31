@extends('layout.layout')
@section('content')
    <section class="section-landing-page">
        <div class="grid grid-col-4x-8x">
            <div class="vh-100 content">
            </div>
            <div class="form-container">
                <img class="prava-logo" src="{{ asset('assets/images/praava-logo-main.svg') }}" alt="">
                <div class="form-content">
                    <h2 class="form-title mb-1x">Thank you for visiting us!</h2>
                    <p class="form-description">Your feedback is very important to us. Please scan or type in your patient ID
                        or Phone number below to complete a short survey on your experience today.</p>
                </div>
                <form class="initial-form" action="">
                    @csrf
                    <div class="initial-form-input-field">
                        <p>UPI</p>
                        <input type="text" placeholder="search by UPI " value="PHBL0000">
                    </div>
                    <p>⸻ or ⸻</p>
                    <div class="initial-form-input-field">
                        <p>Phone Number</p>
                        <input type="text" placeholder="Search by phone number " value="+880">
                    </div>
                    <a href="{{ route('main.form.slide1') }}" class="btn btn-primary">Start</a>
                </form>

            </div>
        </div>
    </section>
@endsection
