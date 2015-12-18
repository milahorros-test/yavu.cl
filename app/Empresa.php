<?php
namespace Milahorros;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kbwebs\MultiAuth\PasswordResets\CanResetPassword;
use Kbwebs\MultiAuth\PasswordResets\Contracts\CanResetPassword as CanResetPasswordContract;
class Empresa extends Model
{
	use SoftDeletes;
    protected $table = "empresas";
    protected $primaryKey = 'id';
    protected $fillable = ['rut', 'email', 'login', 'nombre', 'direccion', 'ciudad', 'region', 'pais', 'fono', 'fono_2', 'fecha_creacion', 'nombre_encargado', 'password'];
    protected $dates = ['deleted_at'];
    public function setPasswordAttribute($valor){
        if(!empty($valor)){
          $this->attributes['password'] = \Hash::make($valor);
        }
    }
}
