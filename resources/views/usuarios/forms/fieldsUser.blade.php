<div class="form-group">
	{!!Form::label('Nombre:')!!}
	{!!Form::text('NOMBRE_USUARIO',null,['class'=>'form-control','placeholder'=>'Ingrese su nombre','required'=>'required'])!!}
</div>
<div class="form-group">
	{!!Form::label('Apellido:')!!}
	{!!Form::text('APELLIDO_USUARIO',null,['class'=>'form-control','placeholder'=>'Ingrese su apellido','required'=>'required'])!!}
</div>		
<div class="form-group">
	{!!Form::label('Rut:')!!}
	{!!Form::text('RUT_USUARIO',null,['class'=>'form-control','placeholder'=>'Ingrese su rut','required'=>'required'])!!}			
</div>
<div class="form-group">
	{!!Form::label('Email:')!!}
	{!!Form::email('EMAIL_USUARIO',null,['class'=>'form-control','placeholder'=>'Ingrese su email','required'=>'required'])!!}			
</div>
<div class="form-group">
	{!!Form::label('Nombre de usuario:')!!}
	{!!Form::text('LOGIN_USUARIO',null,['class'=>'form-control','placeholder'=>'Ingrese su nombre de usuario','required'=>'required'])!!}			
</div>				
<div class="form-group">
	{!!Form::label('Clave:')!!}
	{!!Form::password('PASSWORD_USUARIO',['class'=>'form-control','placeholder'=>'Ingrese una clave'])!!}			
</div>