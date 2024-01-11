@extends('layout.layout')
@section('content')
    <section class="section-main-form">
        <div class="grid grid-col-4x-8x">
            @include('components.sidebar')
            <div class="form-container">
                <h5 class="form-heading">What are the main reason(s) for your response? Select all that apply.</h5>
                @include('components.checkboxCard', [
                    'question' => 'Contact Center',
                    'options' => [
                        'Service knowledge',
                        'Providing correct information',
                        'Attitude & professionalism',
                    ],
                    'componentId' => 1,
                ])
                @include('components.checkboxCard', [
                    'question' => "Interaction with Praava's social media pages",
                    'options' => [
                        'Providing correct information',
                        'Maintained a professional tone',
                        'Responded in a timely manner',
                    ],
                    'componentId' => 2,
                ])
                @include('components.checkboxCard', [
                    'question' => 'Doctor/Healthcare provider',
                    'options' => [
                        "Doctor/Healthcare provider's knowledge",
                        "Healthcare provider's Empathy & care",
                        'Doctor/healthcare provider was on time',
                        'Consultation time',
                        'Attitude & professionalism ',
                    ],
                    'componentId' => 3,
                ])
                @include('components.checkboxCard', [
                    'question' => 'Nurse',
                    'options' => [
                        'Comfort in vital measurement ',
                        'Discomfort in vital measurement',
                        'Vital measurement time/duration',
                        'Attitude & professionalism',
                        'Long wait time before vital measurement',
                        'Short wait time before vital measurement',
                    ],
                    'componentId' => 4,
                ])
                @include('components.checkboxCard', [
                    'question' => 'Reception Team (Front Desk)',
                    'options' => [
                        'Greeting at the door',
                        'Guidance throughout the facility',
                        'Attitude & professionalism',
                        'Long wait time',
                        'Short wait time',
                    ],
                    'componentId' => 5,
                ])
                @include('components.checkboxCard', [
                    'question' => 'Blood / Sample Collection (Phlebotomist)',
                    'options' => [
                        'Comfort in blood collection process',
                        'Discomfort in blood collection process',
                        'Comfort during other sample collection',
                        'Discomfort during other sample collection',
                        'Time taken to draw blood',
                        'Attitude & professionalism',
                        'Long wait time',
                        'Short wait time',
                    ],
                    'componentId' => 6,
                ])
                @include('components.checkboxCard', [
                    'question' => 'X-ray, ETT, ECHO, USG (Technician)',
                    'options' => [
                        'Comfortable process',
                        'Discomfort in process',
                        'Process time/duration ',
                        'Service environment ',
                        'Attitude & professionalism',
                        'Long wait time',
                        'Short wait time',
                    ],
                    'componentId' => 7,
                ])
                @include('components.checkboxCard', [
                    'question' => 'Security Team',
                    'options' => [
                        'Assistance with vehicle and parking',
                        'Greeting at the entrance',
                        'Attitude & professionalism',
                    ],
                    'componentId' => 8,
                ])
                <div class="flex">
                    <a href="{{ route('main.form.slide2') }}" class="btn btn-orange">Prev</a>
                    <a href="{{ route('main.form.slide4') }}" class="btn btn-green">Next</a>
                </div>
            </div>
        </div>
    </section>
@endsection
