{!!Html::script('js/jquery.js')!!}
{!!Html::script('js/ajax/BuscarSorteo.js')!!}
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
                          <h4>{{$sorteo->nombre_sorteo}}</h4>
                      </div>
                      <td>{{$sorteo->descripcion}}</td>
                <td>{{$sorteo->estado_sorteo}}</td>
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