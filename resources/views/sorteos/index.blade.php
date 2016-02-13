 @extends('layouts.frontadm') 
@section('content')
<div class="jumbotron">
  <div id="contentIn">
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
            <th>Descripcion</th>
            <th>Fecha</th>
            <th>Estado</th>
          </thead>
          @foreach($sorteos as $sorteo) 
          <tbody>
            <td>{{$sorteo->nombre_sorteo}}</td>
            <td>{{$sorteo->descripcion}}</td>
            <td>{{$sorteo->fecha_inicio_sorteo}}</td>            
            <td>{{$sorteo->estado_sorteo}}</td>
            <td>{!!link_to_route('sorteos.edit', $title = 'Editar', $parameters = $sorteo->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
          </tbody>
          @endforeach
        </table>  

      </div>
      </div>    
  </div>
</div>


@stop

