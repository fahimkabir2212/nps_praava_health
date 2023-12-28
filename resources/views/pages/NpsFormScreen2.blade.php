@extends('layout.layout')
@section('content')
    <section class="section-main-form">
        <div class="grid grid-col-4x-8x">
            <div class="vh-100 form-steps sticky">
                <div class="steps">
                    <div class="step">
                        <a href="{{ route('main.form.slide1') }}">
                            <h3>1</h3>
                        </a>
                        <p>STEP</p>
                    </div>
                    <div class="step">
                        <a href="{{ route('main.form.slide2') }}">
                            <h3 class="active-step">2</h3>
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

                <div class="review-form">
                    <p class="question mb-2x">Who did you interact with at Praava today? Select all that apply.</p>
                    <div class="main-response-reason">
                        <div class="select">
                            <input type="checkbox" id="item_1">
                            <label class="btn btn-warning button_select" for="item_1">Contact Center</label>
                        </div>

                        <div class="select">
                            <input type="checkbox" id="item_2">
                            <label class="btn btn-warning button_select" for="item_2">Praava's social media pages</label>
                        </div>

                        <div class="select">
                            <input type="checkbox" id="item_3">
                            <label class="btn btn-warning button_select" for="item_3">Nurse</label>
                        </div>

                        <div class="select">
                            <input type="checkbox" id="item_4">
                            <label class="btn btn-warning button_select" for="item_4">Reception Team</label>
                        </div>
                        <div class="select">
                            <input type="checkbox" id="item_5">
                            <label class="btn btn-warning button_select" for="item_5">Blood / Sample Collectors</label>
                        </div>
                        <div class="select">
                            <input type="checkbox" id="item_6">
                            <label class="btn btn-warning button_select" for="item_6">X-ray, ETT, ECHO, and/or USG
                                (Technician)</label>
                        </div>
                        <div class="select">
                            <input type="checkbox" id="item_7">
                            <label class="btn btn-warning button_select" for="item_7">Security Team</label>
                        </div>
                    </div>
                </div>
                <div id="item-1" class="w-100" style="display: none">
                    @include('components.reviewScale')
                </div>
                <div id="item-2" class="w-100" style="display: none">
                    @include('components.reviewScale')
                </div>
                <div id="item-3" class="w-100" style="display: none">
                    @include('components.reviewScale')
                </div>
                <div id="item-4" class="w-100" style="display: none">
                    @include('components.reviewScale')
                </div>
                <div id="item-5" class="w-100" style="display: none">
                    @include('components.reviewScale')
                </div>
                <div id="item-6" class="w-100" style="display: none">
                    @include('components.reviewScale')
                </div>
                <div id="item-7" class="w-100" style="display: none">
                    @include('components.reviewScale')
                </div>
                <div class="flex">
                    <a href="{{ route('main.form.slide1') }}" class="btn btn-orange">Prev</a>
                    <a href="{{ route('main.form.slide2') }}" class="btn btn-green">Next</a>
                </div>
            </div>
        </div>
    </section>
@endsection
