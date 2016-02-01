@extends('layouts.front')
@section('content')
{!!Form::open(['route' => 'log.store', 'method' => 'POST'])!!}
<div class="jumbotron">
  <div id="contentMini">
    @include('alerts.warningMessage')
    @include('alerts.errorsMessage')
    @include('alerts.alertFields')
    <div class="panel panel-default">
      <div class="panel-heading">Login</div>
        <div class="panel-body">
          <div class="form-group has-feedback has-feedback-left col-md-12">
            {!!Form::label('Usuario:')!!}
            {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingresa tu email de usuario'])!!}     
          </div>
          <div class="form-group has-feedback has-feedback-left col-md-12">
            {!!Form::label('Clave:')!!}
            {!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa tu clave'])!!}     
          </div>
          <div class="form-group has-feedback has-feedback-left col-md-12">
            {!!Form::submit('Acceder',['class'=>'btn btn-default col-md-12'])!!}
          </div>
        </div>
    </div>
  </div>
</div>
{!!Form::close()!!}
@stop