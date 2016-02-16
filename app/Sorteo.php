<?php
namespace yavu;
use Illuminate\Database\Eloquent\Model;

class Sorteo extends Model
{
   
      protected $table = 'sorteos';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre_sorteo', 'descripcion', 'fecha_inicio_sorteo', 'estado_sorteo'];

}