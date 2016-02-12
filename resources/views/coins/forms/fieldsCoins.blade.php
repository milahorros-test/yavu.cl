	<div class="col-sm-8">
		<div class="list-group" >
			<div class="list-group-item">
				<h4>Datos principales</h4>
			</div>
			<div class="list-group-item">			
				<div class="form-group has-feedback has-feedback-left">
					{!!Form::label('Numero de cliente:')!!}
					{!!Form::text('user_id',null,['class'=>'form-control','placeholder'=>'Ingrese el número de cliente'])!!}
				</div>

				<div class="form-group has-feedback has-feedback-left">
					{!!Form::label('Motivo:')!!}
					{!!Form::textarea('motivo',null,['class'=>'form-control','placeholder'=>'Motivo de la carga','rows'=>'5'])!!}
				</div>

				<div class="form-group has-feedback has-feedback-left">
					{!!Form::label('Cantidad:')!!}
					{!!Form::password('cantidad',['class'=>'form-control','placeholder'=>'Cantidad de coins'])!!}			
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="list-group">					
			<div class="list-group-item">			
				<h4>Todos los campos son requeridos</h4>
			</div>
			<div class="list-group-item">
				<div class="form-group has-feedback has-feedback-left">	
					{!!Form::label('Registrar')!!}		
					{!!Form::submit('Registrar', ['class'=>'btn btn-primary btn-success', 'style'=>'width:100%;'])!!}
					{!!Form::close()!!}			
				</div>
			</div>
		</div>	
	</div>
</div>