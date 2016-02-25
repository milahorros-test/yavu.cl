@extends('layouts.front') 
@section('content')
<div class="jumbotron">
  <div id="contentMiddle">
    @include('alerts.alertFields')
    @include('alerts.errorsMessage')
    @include('alerts.successMessage')
    @include('alerts.warningMessage') 
        <table class="table">
          <thead>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Operaciones</th>
          </thead>
          @foreach($feeds as $feed) 
          <tbody>
            <td>{{$feed->titulo}}</td>
            <td>{{$feed->descripcion}}</td>            
            <td>{!!link_to_route('feeds.edit', $title = 'Editar', $parameters = $feed->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
          </tbody>
          @endforeach
        </table>  
      {!!$feeds->render()!!}
  </div>
</div>
@stop

