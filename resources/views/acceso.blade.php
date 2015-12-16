@extends('layouts.front')
@section('content')
{!!Form::open(['route' => 'access.store', 'method' => 'POST'])!!}
<div class="jumbotron">
  <div id="contentIn">
    @include('alerts.errorsMessage')
    @include('alerts.warningMessage')
    @include('alerts.alertFields')
    <h4>Acceso Empresas</h4>
    <div class="form-group">
      {!!Form::label('Usuario:')!!}
      {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingresa tu email de empresa'])!!}     
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