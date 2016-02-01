<div class="form-group has-feedback has-feedback-left">

	{!!Form::label('Nombre:')!!}
	{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre de la empresa', 'required'=>'required'])!!}
</div>
<div class="form-group has-feedback has-feedback-left">
	{!!Form::label('Rut:')!!}
	{!!Form::text('rut',null,['class'=>'form-control','placeholder'=>'Ingrese rut de la empresa','required'=>'required'])!!}			
	<i class="form-control-feedback glyphicon glyphicon-user"></i>
</div>
<div class="form-group has-feedback has-feedback-left">
	{!!Form::label('Email:')!!}
	{!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingrese email de la empresa','required'=>'required'])!!}			
	<i class="form-control-feedback glyphicon glyphicon-user"></i>
</div>
<div class="form-group has-feedback has-feedback-left">
	{!!Form::label('Nombre de usuario:')!!}
	{!!Form::text('login',null,['class'=>'form-control','placeholder'=>'Ingrese un nombre de usuario para la empresa','required'=>'required'])!!}			
	<i class="form-control-feedback glyphicon glyphicon-user"></i>
</div>			
<div class="form-group has-feedback has-feedback-left">
	{!!Form::label('Clave:')!!}
	{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingrese una clave'])!!}			
	<i class="form-control-feedback glyphicon glyphicon-lock"></i>
</div>