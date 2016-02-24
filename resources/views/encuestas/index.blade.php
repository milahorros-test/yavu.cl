@extends('layouts.front') 
@section('content')
<div class="jumbotron">
  <div id="contentMiddle">
    @include('alerts.alertFields')
    @include('alerts.errorsMessage')
    @include('alerts.successMessage')
    @include('alerts.warningMessage') 
    <div class="panel panel-default">
      <div class="panel-heading"></div>
      <div class="panel-body">
        <table class="table">
          <thead>
            <th>Nombre</th>
            <th>Título</th>
            <th>Descripcion</th>
            <th>Operaciones</th>
          </thead>
          @foreach($encuestas as $encuesta) 
          <tbody>
            <td>{{$encuesta->nombre}}</td>
            <td>{{$encuesta->titulo}}</td>
            <td>{{$encuesta->descripcion}}</td>            
            <td>{!!link_to_route('encuestas.edit', $title = 'Editar', $parameters = $encuesta->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
          </tbody>
          @endforeach
        </table>  
        </div>
      </div>    
  </div>
</div>


@stop

