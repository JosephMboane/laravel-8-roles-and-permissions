
@extends('layouts.app')


@section('content')



    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <p>{{ Auth::user()->name }}</p>
            <p>{{ Auth::user()->contact }}</p>
            <p>{{ Auth::user()->email }}</p>
            <p>{{ Auth::user()->exams}}</p>
        </div>
        <div class="col-md-4"></div>
    </div>
@endsection
