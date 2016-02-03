

<div class="form-group has-feedback has-feedback-left">

				<td>Seleccione empresa:</td>
			<td>
				{!!Form::select('empresa', $empresa)!!}
			</td>
	
</div>
<div class="form-group has-feedback has-feedback-left">

</div>
<div class="form-group has-feedback has-feedback-left">

				<td>Seleccione tipo servicio:</td>
			<td>
				{!!Form::select('tipo_servicio', 
					['Gratis' => 'Gratis',
					'Pagado' => 'Pagado',		
					'otro' => 'otro...'], 
					$selected = null, ['class' => 'form-control']) 
				!!}

			</td>

</div>	
			<td>Seleccione fecha de adquisición servicio:</td>
<div class="container">
    <div class="col-sm-6" style="height:130px;">
        <div class="form-group">
            <div class='input-group date' id='datetimepicker8'>
                <input type='date' class="form-control" />
            </div>
        </div>
    </div>

</div>

