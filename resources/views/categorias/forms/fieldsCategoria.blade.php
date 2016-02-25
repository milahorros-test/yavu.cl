<div class="col-sm-12">
	<div class="list-group" >
		<div class="list-group-item">
			<h4>Datos principales</h4>
		</div>
		<div class="list-group-item">


        <div class="form-group has-feedback has-feedback-left">
          {!!Form::label('Ingrese el nombre de la categoria:')!!}
          {!!Form::text('nombre_categoria',null,['class'=>'form-control','placeholder'=>''])!!}


        </div> 

         <div class="form-group has-feedback has-feedback-left">
          {!!Form::label('Ingrese tipo de la categoria:')!!}
          {!!Form::text('tipo_categoria',null,['class'=>'form-control','placeholder'=>''])!!}

        </div> 

     <!--   <div class="form-group has-feedback has-feedback-left">
				{!!Form::label('Descripción a publicitar:')!!}
				{!!Form::textarea('comentario_banner',null,['class'=>'form-control','maxlength'=>'500','placeholder'=>'Ingrese la descripcion del sorteo'])!!}
      </div>

        	 <div class="form-group has-feedback has-feedback-left">
            {!!Form::hidden('estado_banner', 'Pendiente')!!} 
          </div>             
       
  		-->

</div>
		</div>
    </div>
        </div>		
