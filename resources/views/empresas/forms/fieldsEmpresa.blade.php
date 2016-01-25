<tr>
	<td colspan="2">Este acceso es solo para administradores</td>
	<td>* <small>(Campos requeridos)</small></td>
</tr>
<tr>
	<td>Nombre</td>
	<td>{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese su nombre','required'=>'required'])!!}</td>
	<td>*</td>
</tr>
<tr>
	<td>Rut</td>
	<td>
		{!!Form::text('rut',null,['class'=>'form-control','placeholder'=>'Ingrese su rut','required'=>'required'])!!}	
		<i class="form-control-feedback glyphicon glyphicon-user"></i>				
	</td>
	<td>*</td>
</tr>
<tr>
	<td>Email</td>
	<td>
		{!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingrese su email','required'=>'required'])!!}			
		<i class="form-control-feedback glyphicon glyphicon-user"></i>			
	</td>
	<td>*</td>
</tr
<tr>
	<td>Nombre de usuario</td>
	<td>
		{!!Form::text('login',null,['class'=>'form-control','placeholder'=>'Ingrese su nombre de usuario','required'=>'required'])!!}			
		<i class="form-control-feedback glyphicon glyphicon-user"></i>			
	</td>
	<td>*</td>
</tr>
<tr>
	<td>Nueva clave</td>
	<td>
		{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingrese una clave'])!!}		
		<i class="form-control-feedback glyphicon glyphicon-lock"></i>			
	</td>
	<td><!--*--></td>
</tr>		