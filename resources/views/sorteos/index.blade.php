{!!Html::script('js/jquery.js')!!}
{!!Html::script('js/ajax/BuscarSorteo.js')!!}
{!!Html::script('js/ajax/ParticiparSorteo.js')!!}
@extends('layouts.front') 

@section('content')
<div class="jumbotron">
  <div id="contentMiddle">
    @include('alerts.alertFields')
    @include('alerts.errorsMessage')
    @include('alerts.successMessage')
    @include('alerts.warningMessage')
    <h2>Panel de administración</h2>    
    <div class="panel panel-default">
      <div class="panel-heading"><h4>Mantenedor de Sorteos</h4></div>
      <div class="panel-body">
        <div class="form-group">

          @if(Auth::admin()->check())

         {!!Form::text('nombre',null,['class' => 'form-control', 'placeholder' => 'Nombre de sorteo','id'=>'nombre_sorteo'])!!}

        @elseif(Auth::user()->check() || !Auth::user()->check())

         {!!Form::text('nombre',null,['class' => 'form-control', 'placeholder' => 'Nombre de sorteo','id'=>'sorteothumb'])!!}

         @endif

        </div>
        @if(Auth::admin()->check())
          <table class="table table-hover" id="SorteoList">

            <thead>
              <th>Nombre</th>
              <th>Descripcion</th>
              <th>Estado Sorteo</th>
            </thead>

            @foreach($sorteos as $sorteo) 
              <tbody>
                <td>{{$sorteo->nombre_sorteo}}</td>
                <td>{{$sorteo->descripcion}}</td>
                <td>{{$sorteo->estado_sorteo}}</td>

                <td>{!!link_to_route('sorteos.edit', $title = 'Editar', $parameters = $sorteo->id, $attributes = ['class'=>'btn btn-primary'])!!}
                </td>
              </tbody>
            @endforeach
          </table>  
          {!!$sorteos->render()!!}
            
        @elseif(Auth::user()->check() || !Auth::user()->check())

          <div id="SorteoListThumb">

          @foreach($sorteos as $sorteo) 
            
            <div class="col-md-4">
              <div class="thumbnail">
                <img src="{!!URL::to('images/empresa.png')!!}" alt="">
                  <div class="caption">
                    <td><h5>Nombre Sorteo</h5></td>
                    <td>{{$sorteo->nombre_sorteo}}</td>
                  </div>
                    <td><h5>Descripción</h5></td>
                    <td>{{$sorteo->descripcion}}</td>
                  @if(Auth::user()->check())
                    <td><h5>Estado</h5></td>
                    <td>{{$sorteo->estado_sorteo}}</td>
                    <br>
                    <td><a id="participar" href="{!! URL::to('#!') !!}" class="btn btn-primary" data-toggle="modal" data-target="#myModal" role="button">Participar!</a></td>
  
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                          </div>
                          <div class="modal-body">
                            ...
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  @else 
                    <td><a href="{!! URL::to('usuarios/create') !!}" class="btn btn-primary" role="button">Participar!</a></td>
                  @endif
              </div>
            </div>
          @endforeach
          </div>

          {!!$sorteos->render()!!}
        
        @endif

      </div>
    </div>
  </div>
</div>

@stop