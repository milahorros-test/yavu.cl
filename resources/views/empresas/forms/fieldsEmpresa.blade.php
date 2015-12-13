<div class="form-group">
	{!!Form::label('Nombre:')!!}
	{!!Form::text('NOMBRE_EMPRESA',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre de la empresa', 'required'=>'required'])!!}
</div>
<div class="form-group">
	{!!Form::label('Rut:')!!}
	{!!Form::text('RUT_EMPRESA',null,['class'=>'form-control','placeholder'=>'Ingrese rut de la empresa','required'=>'required'])!!}			
</div>
<div class="form-group">
	{!!Form::label('Email:')!!}
	{!!Form::email('EMAIL_EMPRESA',null,['class'=>'form-control','placeholder'=>'Ingrese email de la empresa','required'=>'required'])!!}			
</div>
<div class="form-group">
	{!!Form::label('Nombre de usuario:')!!}
	{!!Form::text('LOGIN_EMPRESA',null,['class'=>'form-control','placeholder'=>'Ingrese un nombre de usuario para la empresa','required'=>'required'])!!}			
</div>			
<div class="form-group">
	{!!Form::label('Clave:')!!}
	{!!Form::password('PASSWORD_EMPRESA',['class'=>'form-control','placeholder'=>'Ingrese una clave','required'=>'required'])!!}			
</div>