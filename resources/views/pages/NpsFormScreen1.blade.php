@extends('layout.layout')
@section('content')
    <section class="section-main-form">
        <div class="grid grid-col-4x-8x">
            <div class="vh-100 form-steps">
                <div class="steps">
                    <div class="step">
                        <a href="{{route('main.form.slide1')}}">
                            <h3 class="active-step">1</h3>
                        </a>
                        <p>STEP</p>
                    </div>
                    <div class="step">
                        <a href="{{route('main.form.slide2')}}">
                            <h3>2</h3>
                        </a>
                        <p>STEP</p>
                    </div>
                    <div class="step">
                        <a href="">
                            <h3>3</h3>
                        </a>
                        <p>STEP</p>
                    </div>
                    <div class="step">
                        <a href="">
                            <h3>4</h3>
                        </a>
                        <p>STEP</p>
                    </div>
                </div>
            </div>
            <div class="form-container">
                @include('components.reviewScale')
                <div class="review-form">
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
                </div>
                <div class="flex">
                    <a href="{{route('landing.page')}}" class="btn btn-orange">Prev</a>
                <a href="{{route('main.form.slide2')}}" class="btn btn-green">Next</a>
                </div>
            </div>
        </div>
    </section>
@endsection
