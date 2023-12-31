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
                        'Quality of care',
                        'Location',
                        'Wait time',
                        'Availability of services and specialties',
                        'Availability of medications in the pharmacy',
                        'Ghorelab & Home services',
                    ],
                ])
                {{-- <div class="review-form">
                    <p class="question mb-2x">What are the main reasons for your response? Select all that apply.</p>
                    <div class="main-response-reason">
                        <div class="select">
                            <input type="checkbox" id="item_1">
                            <label class="btn btn-warning button_select" for="item_1">Price</label>
                        </div>
                        
                        <div class="select">
                            <input type="checkbox" id="item_2">
                            <label class="btn btn-warning button_select" for="item_2">Location</label>
                        </div>
                        
                        <div class="select">
                            <input type="checkbox" id="item_3">
                            <label class="btn btn-warning button_select" for="item_3">Quality of care</label>
                        </div>
                        
                        <div class="select">
                            <input type="checkbox" id="item_4">
                            <label class="btn btn-warning button_select" for="item_4">Wait time</label>
                        </div>
                        <div class="select">
                            <input type="checkbox" id="item_5">
                            <label class="btn btn-warning button_select" for="item_5">Availability of services and specialties</label>
                        </div>
                        <div class="select">
                            <input type="checkbox" id="item_6">
                            <label class="btn btn-warning button_select" for="item_6">Availability of medications in the pharmacy </label>
                        </div>
                        <div class="select">
                            <input type="checkbox" id="item_7">
                            <label class="btn btn-warning button_select" for="item_7">Ghorelab & Home services</label>
                        </div>
                    </div>
                </div> --}}
                <div class="flex">
                    <a href="{{ route('pages.final') }}" class="btn btn-primary">Finish</a>
                    <a href="{{ route('main.form.slide2') }}" class="btn btn-green">Next</a>
                </div>
            </div>
        </div>
    </section>
@endsection
