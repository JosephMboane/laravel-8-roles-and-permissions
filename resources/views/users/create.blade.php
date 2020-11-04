@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Adicionar Paciente</h2>
        </div>
        <div class="pull-right">
            <i class='fas fa-angle-double-left' style="color: #FEC311">
                <a class="button-go-back-secondary mb-5" href="{{ route('users.index') }}" style="color: #FEC311"> Voltar atrás</a>
            </i>
        </div>
    </div>
</div>


@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif



{!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
<div class="row mt-5">
    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
            {!! Form::text('name', null, array('placeholder' => 'Nome do Paciente','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
            {!! Form::number('contact', null, array('placeholder' => 'Contacto','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
{{--            <strong>Role:</strong>--}}
            {!! Form::select('roles[]', $roles, null, ['class' => 'form-control','placeholder'=>'Funções']) !!}

{{--            {!! Form::select('roles[]', $roles,[], array( 'placeholder'=> 'Funções','class' => 'form-control','multiple',),['disablePlaceholder' => true]) !!}--}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}
@endsection
