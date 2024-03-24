@extends('layout.layout')
@section('content')
    <section class="section-main-form">
        <div class="grid grid-col-4x-8x">
            {{-- @include('components.sidebar') --}}
            <section class="vh-100 form-steps sticky">
                <div class="steps">
                    <div class="step">
                        <a href="{{ route('main.form.slide1') }}">
                            <h3 class="completed-step">✓</h3>
                        </a>
                        <div class="step-description">
                            <h5>STEP 1</h5>
                            <h4>Overall Feedback</h4>
                            <p>Completed</p>
                        </div>
                    </div>
                    <div class="step">
                        <a href="{{ route('main.form.slide2') }}">
                            <h3 class="completed-step">✓</h3>
                        </a>
                        <div class="step-description">
                            <h5>STEP 2</h5>
                            <h4>Individual Feedback
                            </h4>
                            <p>Completed</p>
                        </div>
                    </div>
                    <div class="step">
                        <a href="{{ route('main.form.slide3') }}">
                            <h3 class="completed-step">✓</h3>
                        </a>
                        <div class="step-description">
                            <h5>STEP 3</h5>
                            <h4>Main Feedback
                                Reason</h4>
                            <p>Completed</p>
                        </div>
                    </div>
                    <div class="step">
                        <a href="{{ route('main.form.slide4') }}">
                            <h3 class="active-step">✓</h3>
                        </a>
                        <div class="step-description">
                            <h5>STEP 4</h5>
                            <h4>Comments
                            </h4>
                            <p class="active-p">In Progress</p>
                        </div>
                    </div>
                </div>

            </section>
            <div class="form-container b-rad">
                <h4 class="form-heading">Please enter your thoughts if you have any additional comments. </h4>
                <div class="text-box">
                    <textarea name="aaa" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="flex">
                    <a href="{{ route('pages.final') }}" class="btn btn-primary">Finish</a>
                </div>
            </div>
        </div>
    </section>
@endsection
