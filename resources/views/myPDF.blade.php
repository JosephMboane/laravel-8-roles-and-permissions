@extends('layouts.app')

<h1>{{ $title }}</h1>
<p>{{ $date }}
@section('content')
<p>{{ Auth::user()->name }}</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
{{--            {{ $exam->name }}--}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Details:</strong>
{{--            {{ $exam->detail }}--}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nome do Paciente:</strong>
{{--            {{ $exam->user->name }}--}}
        </div>
    </div>
</div>
<div class="text-center">
    <a href="/download-preview">Download PDF File</a>
    <h2>JCS</h2>
</div>
@endsection
