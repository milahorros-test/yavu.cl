<div class="form-group has-feedback has-feedback-left">
	{!!Form::label('Nombre:')!!}
	{!!Form::text('NOMBRE_USUARIO',null,['class'=>'form-control','placeholder'=>'Ingrese su nombre','required'=>'required'])!!}
</div>
<div class="form-group has-feedback has-feedback-left">
	{!!Form::label('Apellido:')!!}
	{!!Form::text('APELLIDO_USUARIO',null,['class'=>'form-control','placeholder'=>'Ingrese su apellido','required'=>'required'])!!}
</div>		
<div class="form-group has-feedback has-feedback-left">
	{!!Form::label('Rut:')!!}
	{!!Form::text('RUT_USUARIO',null,['class'=>'form-control','placeholder'=>'Ingrese su rut','required'=>'required'])!!}	
	<i class="form-control-feedback glyphicon glyphicon-user"></i>		
</div>
<div class="form-group has-feedback has-feedback-left">
	{!!Form::label('Email:')!!}
	{!!Form::email('EMAIL_USUARIO',null,['class'=>'form-control','placeholder'=>'Ingrese su email','required'=>'required'])!!}			
	<i class="form-control-feedback glyphicon glyphicon-user"></i>
</div>
<div class="form-group has-feedback has-feedback-left">
	{!!Form::label('Nombre de usuario:')!!}
	{!!Form::text('LOGIN_USUARIO',null,['class'=>'form-control','placeholder'=>'Ingrese su nombre de usuario','required'=>'required'])!!}			
	<i class="form-control-feedback glyphicon glyphicon-user"></i>
</div>				
<div class="form-group has-feedback has-feedback-left">
	{!!Form::label('Clave:')!!}
	{!!Form::password('PASSWORD_USUARIO',['class'=>'form-control','placeholder'=>'Ingrese una clave','required'=>'required'])!!}		
	<i class="form-control-feedback glyphicon glyphicon-lock"></i>
</div>