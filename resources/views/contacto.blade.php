
@extends('layouts.front')
@section('content')
@include('alerts.alertFields')
@include('alerts.errorsMessage')
@include('alerts.successMessage')
@include('alerts.warningMessage')

{!!Form::open()!!}
<div class="jumbotron">
  <div id="contentIn">
    <h1>Contacto</h1>
    <div class="panel panel-default">
   
      <div class="panel-body">
             <td colspan="2">Haznos saber tus dudas, ¡Queremos entregarte el mejor servicio!</td>
             
        {!!Form::open()!!}
        <table class="table">
          <tr>
            <td>Nombre</td>
            <td>
              {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa tu nombre', 'required'=>'required'])!!}
            </td>
          </tr>
          <tr>
            <td>Email</td>
            <td>
              {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingresa tu email', 'required'=>'required'])!!}
            </td>

          </tr>
          <tr>
            <td>Teléfono</td>
            <td>
              {!!Form::text('fono',null,['class'=>'form-control','placeholder'=>'Ingresa tu numero de contacto', 'required'=>'required'])!!}         
            </td>

          </tr>
          <tr>
            <td>Mensaje</td>
            <td>
              {!!Form::textarea('message',null,['class'=>'form-control','placeholder'=>'Ingresa tu mensaje', 'required'=>'required','rows'=>'3'])!!}                      
            </td>

          </tr>
          <tr>
            <td><!--url--></td>
            <td>
              {!!Form::hidden('url',null,['class'=>'form-control','placeholder'=>'Ingresa tu url', 'required'=>'required'])!!}
            </td>
            <td><!--*--></td>
          </tr>
          <tr>
            <td>¡Ingresa el catpcha y contáctate ya!</td>
            <td>
              {!! Form::open(array('url' => '/send_info')) !!}
           <p>{!! Captcha::img(); !!}</p>
          <p>{!! Form::text('captcha') !!}</p>
          <p>{!!Form::submit('Enviar consulta',['class'=>'btn btn-primary btn-success'])!!}</p>
    {!! Form::close() !!}
              
            </td>
            <td><!--*--></td>
          </tr>
        </table>

        {!!Form::close()!!}
      </div>
    </div>  
  </div>
</div>
{!!Form::close()!!}

@stop




