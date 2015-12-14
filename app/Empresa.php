<?php
namespace Milahorros;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Empresa extends Model
{
	use SoftDeletes;
    protected $table = "empresas";
    protected $primaryKey = 'ID_EMPRESA';
    protected $fillable = ['RUT_EMPRESA', 'EMAIL_EMPRESA', 'LOGIN_EMPRESA', 'NOMBRE_EMPRESA', 'DIRECCION_EMPRESA', 'CIUDAD_EMPRESA', 'REGION_EMPRESA', 'PAIS_EMPRESA', 'FONO_EMPRESA', 'FONO_2_EMPRESA', 'FECHA_CREACION_EMPRESA', 'NOMBRE_ENCARGADO_EMPRESA', 'PASSWORD_EMPRESA'];
    protected $dates = ['deleted_at'];
    public function setPasswordAttribute($valor){
        if(!empty($valor)){
          $this->attributes['PASSWORD_EMPRESA'] = \Hash::make($valor);
        }
    }
}
