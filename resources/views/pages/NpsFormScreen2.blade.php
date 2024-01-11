@extends('layout.layout')
@section('content')
    <section class="section-main-form">
        <div class="grid grid-col-4x-8x">
            @include('components.sidebar')
            <div class="form-container">
                @include('components.checkboxCard', [
                    'question' => 'Who did you interact with at Praava today? Select all that apply.',
                    'options' => [
                        'Contact Center',
                        "Praava's social media pages",
                        'Nurse',
                        'Reception Team',
                        'Blood / Sample Collectors',
                        'X-ray, ETT, ECHO, and/or USG Technician',
                        'Security Team',
                    ],
                    'componentId' => 1,
                ])
                @include('components.reviewScale', [
                    'question' =>
                        'From 1 to 10, how likely are you to recommend each provider to friends or family?',
                ])
                <div class="flex">
                    <a href="{{ route('main.form.slide1') }}" class="btn btn-orange">Prev</a>
                    <a href="{{ route('main.form.slide3') }}" class="btn btn-green">Next</a>
                </div>
            </div>
        </div>
    </section>
@endsection
