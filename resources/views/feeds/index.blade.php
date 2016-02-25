{!!Html::script('js/jquery.js')!!}
{!!Html::script('js/publicaciones/GestionarPublicacionesFeeds.js')!!}
@extends('layouts.front') 
@section('content')
<div class="jumbotron">
  <div id="contentMiddle">
    <h1>Publicaciones</h1>
    <br />
    <div class="row">
    
    @include('alerts.alertFields')
    @include('alerts.errorsMessage')
    @include('alerts.successMessage')
    @include('alerts.warningMessage') 

    @include('feeds.forms.panelLeft')

    @include('feeds.forms.panelRight')

    </div>

  </div>
</div>
@stop

