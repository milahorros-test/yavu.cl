@extends('layouts.front')
@section('content')
{!!Form::open(['route' => 'log.store', 'method' => 'POST'])!!}
<div class="jumbotron">
  <div id="contentIn">
    @include('alerts.warningMessage')
    @include('alerts.errorsMessage')
    @include('alerts.alertFields')
    <h4>Login</h4>
    <div class="form-group">
      {!!Form::label('Usuario:')!!}
      {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingresa tu email de usuario'])!!}     
    </div>
    <div class="form-group">
      {!!Form::label('Clave:')!!}
      {!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa tu clave'])!!}     
    </div>
    <div class="form-group">
      {!!Form::submit('Acceder',['class'=>'btn btn-primary'])!!}
    </div>
  </div>
</div>
{!!Form::close()!!}
@stop