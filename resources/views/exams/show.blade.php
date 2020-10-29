@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Mostrar Exame</h2>
            </div>
            <div class="pull-right">
                <i class='fas fa-angle-double-left' style="color: #FEC311">
                    <a class="button-go-back-secondary mb-5" href="{{ route('exams.index') }}" style="color: #FEC311"> Voltar atrás</a>
                </i>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $exam->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $exam->detail }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome do Paciente:</strong>
                {{ $exam->user->name }}
            </div>
        </div>
    </div>
@endsection
