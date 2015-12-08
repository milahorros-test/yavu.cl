@extends('layouts.front')
@section('content')
{!!Form::open()!!}
<div class="jumbotron">
  <div id="contentIn">
    <h4>Formulario de contacto</h4>  
    <div class="form-group">
      {!!Form::label('Nombre:')!!}
      {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa tu nombre'])!!}             
    </div>
    <div class="form-group">
      {!!Form::label('Email:')!!}
      {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingresa tu email'])!!}           
    </div>
    <div class="form-group">
      {!!Form::label('Telefono:')!!}
      {!!Form::text('fono',null,['class'=>'form-control','placeholder'=>'Ingresa tu numero de contacto'])!!}           
    </div>
    <div class="form-group">
      {!!Form::label('Mensaje:')!!}
      {!!Form::text('message',null,['class'=>'form-control','placeholder'=>'Ingresa tu mensaje'])!!}           
    </div>
    <div class="form-group">
      {!!Form::hidden('url',null,['class'=>'form-control','placeholder'=>'Ingresa tu url'])!!}           
    </div>
    <div class="form-group">
      {!!Form::submit('Enviar consulta',['class'=>'btn btn-primary btn-success'])!!}     
    </div>
  </div>
</div>
{!!Form::close()!!}
@stop
