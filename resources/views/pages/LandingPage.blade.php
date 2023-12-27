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
                    <p class="form-description">Your feedback is very important to us. Please scan your patient ID below to
                        complete a short survey on your experience today.</p>
                </div>
                <form class="initial-form" action="">
                    @csrf
                    <input type="number" placeholder="search Phone number / UPI ">
                    <a href="{{route('main.form.slide1')}}" class="btn btn-primary">Start</a>
                </form>

            </div>
        </div>
    </section>
@endsection
