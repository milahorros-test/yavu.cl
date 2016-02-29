<div class="col-sm-8">

  <div class="list-group">

    <div class="list-group-item-full-header">
      <h6>NUEVA PUBLICACIÓN</h6>
    </div>

    {!!Form::open(['action'=>'EstadoController@store', 'method'=>'POST'])!!}

    {!!Form::textarea('descripcion',null,['class'=>'form-control-stat','placeholder'=>'¿Qué deseas compartir en yavu?', 'maxlength'=>'500', 'required'=>'required','style'=>'resize:none;', 'rows'=>'10', 'id'=>'status'])!!}

    {!!Form::hidden('user_id', Auth::user()->get()->id, ['id'=>'user_id'])!!}

    <input type="hidden" name="_token" value="{{csrf_token()}}" id="token" />

    <div class="list-group-item">
      {!!link_to('#!', $title="Publicar estado", $attributes = ['id'=>'publicar', 'class'=>'btn btn-success btn-xs'], $secure = null)!!}
      {!!link_to('#!', $title="Limpiar", $attributes = ['id'=>'limpiar', 'class'=>'btn btn-success btn-xs'], $secure = null)!!}                                           
      {!!Form::close()!!}  

      <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
        Publicacion creada correctamente
      </div>    

      <div id="msj-error" class="alert alert-error alert-dismissible" role="alert" style="display:none">
        El texto ingresado contiene caracteres no permitidos que no se guardarán.
      </div> 

    </div> 

  </div> 

  <div id="e">

    <div id="Estados"></div>

    {!!Form::hidden('idUltima', "0", ['id'=>'idUltima'])!!}    

  </div>

  <div>

    <div id="msj-estado" class="alert alert-dismissible list-group-item" role="alert" style="display:none;">
      <img width="30%"  src='/images/iconoCargando.gif'/>
    </div>

    <div id='msj-finPublicaciones' class="alert alert-dismissible list-group-item-warning" role="alert" style="display:none;">
      No hay mas publicaciones.
    </div>

    <a id="CargarEstados" href="#!" class="list-group-item list-group-item-info">
      Cargar estados 
      <span id="EstadosNuevos" class="badge"></span>                  
    </a>  

  </div>

  <br /> 

</div>