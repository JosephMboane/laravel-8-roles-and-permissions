@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left text-center">
                <h2>Editar Exame</h2>
            </div>
            <div class="pull-right">
                <i class='fas fa-angle-double-left' style="color: #FEC311">
                    <a class="button-go-back-secondary mb-5" href="{{ route('exams.index') }}" style="color: #FEC311"> Voltar atrás</a>
                </i>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('exams.update',$exam->id) }}" method="POST">
        @csrf
        @method('PUT')


        <div class="row"><div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" value="{{ $exam->name }}" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Detail:</strong>
                        <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $exam->detail }}</textarea>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Estado:</strong>
                        <input type="text" name="status" value="{{ $exam->status }}" class="form-control" placeholder="Estado">
                    </div>
                </div>
{{--                <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                    <div class="form-group">--}}
{{--                        {!! Form::Label('item', 'Pacientes') !!}--}}

{{--                        {!! Form::select('user_id', $users, null, ['class' => 'form-control','placeholder'=>'Nome do Paciente']) !!}--}}

{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </div>
        </div>


    </form>

@endsection
