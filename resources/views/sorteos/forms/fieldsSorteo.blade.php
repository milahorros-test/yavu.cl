<div class="col-sm-12">
	<div class="list-group" >
		<div class="list-group-item">
			<h4>Datos principales</h4>
		</div>
		<div class="list-group-item">
			<div class="form-group has-feedback has-feedback-left">
				{!!Form::label('Nombre del sorteo:')!!}
				{!!Form::text('nombre_del_sorteo',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del Sorteo'])!!}
			</div>

			<div class="form-group has-feedback has-feedback-left">
				{!!Form::label('Descripción:')!!}
				{!!Form::textarea('descripcion_del_sorteo',null,['class'=>'form-control','maxlength'=>'500','placeholder'=>'Ingrese la descripcion del sorteo'])!!}
      </div>


        <div class="form-group has-feedback has-feedback-left">
          {!!Form::label('Fecha de pago:')!!}
          {!!Form::date('fecha_de_pago',null,['class'=>'form-control','placeholder'=>''])!!}

        </div>



</div>
		</div>
    </div>
        </div>		
<!--</div>-->
