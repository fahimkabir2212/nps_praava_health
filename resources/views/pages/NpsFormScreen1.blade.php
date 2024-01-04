@extends('layout.layout')
@section('content')
    <section class="section-main-form">
        <div class="grid grid-col-4x-8x">
            @include('components.sidebar')
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
                ])
                <div class="flex">
                    {{-- <a href="{{ route('pages.final') }}" class="btn btn-primary">Finish</a> --}}
                    <a href="{{ route('main.form.slide2') }}" class="btn btn-green">Next</a>
                </div>
            </div>
        </div>
    </section>
@endsection
