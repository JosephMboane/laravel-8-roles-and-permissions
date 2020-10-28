@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2>Adicionar Exame</h2>
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


    <form action="{{ route('exams.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="col-xs-4 col-sm-4 col-md-12">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Nome do Exame">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <textarea class="form-control" style="height:150px" name="detail" placeholder="Motivos que levam te a fazer o Exame"></textarea>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
{{--                    <select  name="user_id">--}}
{{--                        <option value="">Choose Company</option>--}}
{{--                        @foreach($users as $user)--}}
{{--                            <option value="{{$user->id}}">{{$user->name}}</option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
{{--                    <div class="form-group">--}}
{{--                        {!! Form::select('users[]', $users,[], array('class' => 'form-control','multiple','id'=>'user_id')) !!}--}}
{{--                    </div>--}}
                    <div class="form-group">
                        {!! Form::Label('item', 'Pacientes') !!}

                        {!! Form::select('user_id', $users, null, ['class' => 'form-control','placeholder'=>'Nome do Paciente']) !!}

                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submeter</button>
            </div>
        </div>
    </form>
@endsection
