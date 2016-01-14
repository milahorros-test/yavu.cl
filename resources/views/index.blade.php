@extends('layouts.front')
@section('content')
	<div class="container">
  <div class="panel panel-default">
     <div class="panel-body"><h2>Somos Yavu.cl!</h2> 
     <table class="table">
        <tr>
            <td>
            <a href="Pagina de corfo"><img alt="Imagen corfo" src= "images/default-img.gif" height="310px" width="420px"/></a> 
            </td>
            <td width="90%">
            @include('alerts.alertFields')	
			{!!Form::open(['route'=>'admins.store', 'method'=>'POST'])!!}
			@include('admins.forms.fieldsLanding')
			{!!Form::submit('Registrar', ['class'=>'btn btn-primary btn-success'])!!}
			{!!Form::close()!!}
            </td>
        </tr>
     </table>
     </div>
</div>  
  <div class='row' >
  <div class='col-sm-4'>
    <div class="panel panel-default">
      <img src="//placehold.it/450X300/ededed" class="img-responsive">
      <div class="panel-body">
        <p class='lead'>Card Example</p>
      </div>
    </div>
  </div>

  <div class='col-sm-4'>
    <div class="panel panel-default">
      <img src="//placehold.it/450X300/ededed" class="img-responsive">
      <div class="panel-body">
        <p class='lead'>Card Example</p>
      </div>
    </div>
  </div>

  <div class='col-sm-4'>
    <div class="panel panel-default">
      <img src="//placehold.it/450X300/ededed" class="img-responsive">
      <div class="panel-body">
        <p class='lead'>Card Example</p>
      </div>
    </div>
  </div>
</div>
</div>
@stop

