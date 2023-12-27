@extends('layout.layout')
@section('content')
    <section class="section-main-form">
        <div class="grid grid-col-4x-8x">
            <div class="vh-100 form-steps">
                <div class="steps">
                    <div class="step">
                        <a href="{{route('main.form.slide1')}}">
                            <h3>1</h3>
                        </a>
                        <p>STEP</p>
                    </div>
                    <div class="step">
                        <a href="{{route('main.form.slide2')}}">
                            <h3  class="active-step">2</h3>
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
                {{-- <div class="review-form">
                    <p class="question mb-2x">From 1 to 10, how likely are you to recommend Praava Health to friends or
                        family? </p>
                    <div class="rating-container">
                        <div class="rating-item">
                            <input type="radio" id="rating1" name="rating" value="1">
                            <label for="rating1">1</label>
                        </div>
                        <div class="rating-item">
                            <input type="radio" id="rating2" name="rating" value="2">
                            <label for="rating2">2</label>
                        </div>
                        <div class="rating-item">
                            <input type="radio" id="rating3" name="rating" value="3">
                            <label for="rating3">3</label>
                        </div>
                        <div class="rating-item">
                            <input type="radio" id="rating4" name="rating" value="4">
                            <label for="rating4">4</label>
                        </div>
                        <div class="rating-item">
                            <input type="radio" id="rating5" name="rating" value="5">
                            <label for="rating5">5</label>
                        </div>
                        <div class="rating-item">
                            <input type="radio" id="rating6" name="rating" value="6">
                            <label for="rating6">6</label>
                        </div>
                        <div class="rating-item">
                            <input type="radio" id="rating7" name="rating" value="7">
                            <label for="rating7">7</label>
                        </div>
                        <div class="rating-item">
                            <input type="radio" id="rating8" name="rating" value="8">
                            <label for="rating8">8</label>
                        </div>
                        <div class="rating-item">
                            <input type="radio" id="rating9" name="rating" value="9">
                            <label for="rating9">9</label>
                        </div>
                        <div class="rating-item">
                            <input type="radio" id="rating10" name="rating" value="10">
                            <label for="rating10">10</label>
                        </div>
                    </div>
                </div> --}}
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
                            <label class="btn btn-warning button_select" for="item_6">X-ray, ETT, ECHO, and/or USG (Technician)</label>
                        </div>
                        <div class="select">
                            <input type="checkbox" id="item_7">
                            <label class="btn btn-warning button_select" for="item_7">Security Team</label>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <a href="{{route('main.form.slide1')}}" class="btn btn-orange">Prev</a>
                <a href="{{route('main.form.slide2')}}" class="btn btn-green">Next</a>
                </div>
            </div>
        </div>
    </section>
@endsection
