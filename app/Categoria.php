<?php
namespace yavu;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';
    protected $primaryKey = 'id';
    protected $fillable = array('nombre_categoria', 'tipo_categoria');	
}


