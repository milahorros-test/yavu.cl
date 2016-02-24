<?php
namespace yavu;
use Illuminate\Database\Eloquent\Model;
class Banner extends Model
{
    protected $table = "banners";
    protected $fillable = array('banner_empresa','enlace_empresa','imagen_empresa', 'comentario_banner');	
}
