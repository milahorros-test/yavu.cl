@extends('layouts.front')
@section('content')
<div class="jumbotron">
    <form class="form" method="post" action="enviarporMail.php">
      <div id="contentIn">
        <!-- Campo nombre -->
        <div class="form-group">
          <input name="name" type="text" required="" class="form-control" id="name" placeholder="Tu Nombre *" data-validation-required-message="Ingrese su nombre.">
          <p class="help-block text-danger"></p>
        </div>
        <!-- /Campo nombre -->
        <!-- Campo email -->
        <div class="form-group">
          <input name="email" type="email" required="" class="form-control" id="email" placeholder="Tu E-mail *" data-validation-required-message="Ingrese su dirección de e-mail.">
          <p class="help-block text-danger"></p>
        </div>
        <!-- /Campo email -->
        <!-- Campo telefono -->
        <div class="form-group">
          <input name="telefono" type="text" required="" class="form-control" id="telefono" placeholder="Tu n&uacute;mero telef&oacute;nico *" data-validation-required-message="Ingrese su n&uactue;mero telef&oacute;nico.">
          <p class="help-block text-danger"></p>
        </div>  
        <!-- /Campo telefono -->          
        <!-- Campo mensaje -->
        <div class="form-group">
          <textarea name="message" required="" class="form-control" id="message" placeholder="Tu Mensaje *" data-validation-required-message="Ingrese su Mensaje."></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <!-- /Campo mensaje -->
        <!-- Campo url -->
        <div class="form-group">
              <input name="url" type="hidden" required="" class="form-control" id="url" placeholder="" value="" data-validation-required-message="Ingrese su n&uactue;mero telef&oacute;nico.">
              <p class="help-block text-danger"></p>
        </div>         
        <!-- /Campo url -->   
        <!-- Boton submit -->
        <div class="form-group">
          <button class="btn btn-group-justified btn-success" id="submitButton">Enviar consulta</button>
        </div>
        <!-- /Boton submit -->
      </div>
    </form> 
</div>
@stop
