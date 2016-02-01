<div class="form-group has-feedback has-feedback-left col-sm-6">
	{!!Form::label('Nombre:')!!}		
	{!!Form::text('nombre',null,['class'=>'form-control input-lg','placeholder'=>'Ingrese su nombre','required'=>'required'])!!}
</div>		
<div class="form-group has-feedback has-feedback-left col-sm-6">
	{!!Form::label('Apellido:')!!}
	{!!Form::text('apellido',null,['class'=>'form-control input-lg','placeholder'=>'Ingrese su apellido','required'=>'required'])!!}
</div>
<div class="form-group has-feedback has-feedback-left col-sm-6">
	{!!Form::label('Email:')!!}
	{!!Form::email('email',null,['class'=>'form-control input-lg','placeholder'=>'Ingrese su email','required'=>'required'])!!}			
</div>
<div class="form-group has-feedback has-feedback-left col-sm-6">
	{!!Form::label('Clave:')!!}
	{!!Form::password('password',['class'=>'form-control input-lg','placeholder'=>'Ingrese una clave'])!!}
</div>
<div class="form-group has-feedback has-feedback-left col-sm-6">
	{!!Form::label('Ciudad:')!!}
	{!!Form::select('ciudad', 
		['Tarapacá' => 'Tarapacá',
		'Parinacota' => 'Parinacota',
		'Arica' => 'Arica',
		'Antofagasta' => 'Antofagasta',
		'Atacama' => 'Atacama',
		'La Serena' => 'La Serena', 
		'Coquimbo' => 'Coquimbo', 
		'Valparaiso' => 'Valparaiso',
		'Aconcagua' => 'Aconcagua',
		'Región Metropolitana' => 'Región Metropolitana',
		'O Higgins' => 'O Higgins',
		'Curicó' => 'Curicó',
		'Talca' => 'Talca',
		'Linares' => 'Linares',
		'Maule' => 'Maule',
		'Ñuble' => 'Ñuble',
		'Concepción' => 'Concepción',
		'Arauco' => 'Arauco',
		'Biobío' => 'Biobío',	
		'Malleco' => 'Malleco',
		'Cautín' => 'Cautín',
		'Araucanía' => 'Araucanía',
		'Los Ríos' => 'Los Ríos',
		'Valdivia' => 'Valdivia',
		'Osorno' => 'Osorno',
		'Los Lagos' => 'Los Lagos',
		'Llanquihue' => 'Llanquihue',	
		'Chiloé' => 'Chiloé',	
		'Aysen' => 'Aysen',	
		'Magallanes' => 'Magallanes',	
		'otra' => 'otras...'], 
		$selected = null, ['class' => 'form-control input-lg']) 
	!!}					
</div>

