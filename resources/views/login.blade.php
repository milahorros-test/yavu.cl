@extends('layouts.front')
<?php $message=Session::get('message'); ?>
@section('content')
{!!Form::open()!!}
<div class="jumbotron">
  <div id="contentIn">
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
      {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
    </div>
  </div>
</div>
{!!Form::close()!!}
@stop