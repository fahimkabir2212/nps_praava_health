@extends('pages.LandingPage')
@section('button')
<a class="btn btn-primary" href="{{$href}}">{{$slot}}</a>
@endsection