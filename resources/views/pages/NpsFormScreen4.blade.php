@extends('layout.layout')
@section('content')
    <section class="section-main-form">
        <div class="grid grid-col-4x-8x">
            @include('components.sidebar')
            <div class="form-container">
                <h5 class="form-heading">Please enter your thoughts if you have any additional comments. </h5>
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
