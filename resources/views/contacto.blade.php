
@extends('layouts.front')
@section('content')
{!!Form::open()!!}
<div class="jumbotron">
  <div id="contentIn">

    @include('alerts.alertFields')
    @include('alerts.errorsMessage')
    @include('alerts.successMessage')
    @include('alerts.warningMessage')
    <div class="panel panel-default">
      <div class="panel-heading"><h4>Formulario de contacto</h4></div>
      <div class="panel-body">
        {!!Form::open()!!}
        <table class="table">
          <tr>
            <td colspan="2">Haznos saber tus dudas, ¡queremos entregarte el mejor servicio!</td>
            <td>* <small>(Campos requeridos)</small></td>
          </tr>
          <tr>
            <td>Nombre</td>
            <td>
              {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa tu nombre', 'required'=>'required'])!!}
            </td>
            <td>*</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>
              {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingresa tu email', 'required'=>'required'])!!}
            </td>
            <td>*</td>
          </tr>
          <tr>
            <td>Teléfono</td>
            <td>
              {!!Form::text('fono',null,['class'=>'form-control','placeholder'=>'Ingresa tu numero de contacto', 'required'=>'required'])!!}         
            </td>
            <td>*</td>
          </tr>
          <tr>
            <td>Mensaje</td>
            <td>
              {!!Form::text('message',null,['class'=>'form-control','placeholder'=>'Ingresa tu mensaje', 'required'=>'required'])!!}                      
            </td>
            <td>*</td>
          </tr>
          <tr>
            <td><!--url--></td>
            <td>
              {!!Form::hidden('url',null,['class'=>'form-control','placeholder'=>'Ingresa tu url', 'required'=>'required'])!!}
            </td>
            <td><!--*--></td>
          </tr>
          <tr>
            <td>¡Contáctate ya!</td>
            <td>
              {!!Form::submit('Enviar consulta',['class'=>'btn btn-primary btn-success'])!!}
            </td>
            <td><!--*--></td>
          </tr>
        </table>
        {!!Form::close()!!}
      </div>
    </div>  
|  </div>
</div>
{!!Form::close()!!}
@stop




