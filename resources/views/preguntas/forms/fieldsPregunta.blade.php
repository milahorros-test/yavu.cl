<div class="col-sm-8">
	<div class="list-group" >
		<div class="list-group-item">
			<h4>Datos principales</h4>
		</div>
		<div class="list-group-item">			
			<div class="form-group has-feedback has-feedback-left">
				{!!Form::label('Id Encuesta:')!!}
				{!!Form::text('encuesta_id',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre de la encuesta',])!!}
			</div>
			<div class="form-group has-feedback has-feedback-left">
				{!!Form::label('Pregunta:')!!}
				{!!Form::text('pregunta',null,['class'=>'form-control','placeholder'=>'Ingrese el titulo de la encuesta',])!!}
			</div>		

		</div>
	</div>
</div>

<div class="col-sm-4">