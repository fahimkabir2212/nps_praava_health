@extends('layout.layout')
@section('content')
    <section class="section-main-form">
        <div class="grid grid-col-4x-8x">
            {{-- @include('components.sidebar') --}}
            <section class="vh-100 form-steps sticky">
                <div class="steps">
                    <div class="step">
                        <a href="{{ route('main.form.slide1') }}">
                            <h3 class="active-step">✓</h3>
                        </a>
                        <a href="{{ route('main.form.slide1') }}" class="step-description">
                            <h5>STEP 1</h5>
                            <h4>Overall Feedback</h4>
                            <p class="active-p">In Progress</p>
                        </a>
                    </div>
                    <div class="step">
                        <a href="{{ route('main.form.slide2') }}">
                            <h3 class="next-step">✓</h3>
                        </a>
                        <a href="{{ route('main.form.slide2') }}" class="step-description">
                            <h5>STEP 2</h5>
                            <h4>Individual Feedback
                            </h4>
                            <p class="next-p">Pending</p>
                        </a>
                    </div>
                    <div class="step">
                        <a href="{{ route('main.form.slide3') }}">
                            <h3 class="next-step">✓</h3>
                        </a>
                        <a href="{{ route('main.form.slide3') }}" class="step-description">
                            <h5>STEP 3</h5>
                            <h4>Main Feedback
                                Reason</h4>
                            <p class="next-p">Pending</p>
                        </a>
                    </div>
                    <div class="step">
                        <a href="{{ route('main.form.slide4') }}">
                            <h3 class="next-step">✓</h3>
                        </a>
                        <a href="{{ route('main.form.slide4') }}" class="step-description">
                            <h5>STEP 4</h5>
                            <h4>Comments
                            </h4>
                            <p class="next-p">Pending</p>
                        </a>
                    </div>
                </div>

            </section>

            <div class="form-container">
                @include('components.reviewScale', [
                    'question' =>
                        'From 1 to 10, how likely are you to recommend Praava Health to friends or family?',
                ])

                @include('components.checkboxCard', [
                    'question' => 'What are the main reasons for your response? Select all that apply.',
                    'options' => [
                        'Price',
                        'Location',
                        'Environment',
                        'Quality of care',
                        'Wait time',
                        'Availability of services and specialties',
                        'Availability of medications in the pharmacy',
                        'Ghorelab & Home services',
                    ],
                    'componentId' => 1,
                ])
                <div class="flex">
                    {{-- <a href="{{ route('pages.final') }}" class="btn btn-primary">Finish</a> --}}
                    <a href="{{ route('main.form.slide2') }}" class="btn btn-primary">Next<span
                            class="next-span">></span></a>
                </div>
            </div>
        </div>
    </section>
@endsection
