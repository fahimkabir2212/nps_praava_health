@extends('layout.layout')
@section('content')
    <section class="section-main-form">
        <div class="grid grid-col-4x-8x">
            @include('components.sidebar')
            <div class="form-container">
                <h5 class="form-heading">What are the main reason(s) for your response? Select all that apply.</h5>
                @include('components.checkboxCard',[
                    'question'=>'Contact Center',
                    'options'=>['Service knowledge',"Providing correct information",'Attitude & professionalism'],
                ])
                @include('components.checkboxCard',[
                    'question'=>"Interaction with Praava's social media pages",
                    'options'=>['Providing correct information',"Maintained a professional tone in responses",'Responded in a timely manner'],
                ])
                @include('components.checkboxCard',[
                    'question'=>'Doctor/Healthcare provider',
                    'options'=>["Doctor/Healthcare provider's knowledge","Doctor/Healthcare provider's empathy & care",'If the doctor/healthcare provider was on time',"Consultation time/duration","Attitude & professionalism "],
                ])
                <div class="flex">
                    <a href="{{ route('main.form.slide1') }}" class="btn btn-orange">Prev</a>
                    <a href="{{ route('main.form.slide2') }}" class="btn btn-green">Next</a>
                </div>
            </div>
        </div>
    </section>
@endsection
