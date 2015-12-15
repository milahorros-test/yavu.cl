<?php
namespace Milahorros;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword, SoftDeletes;
    protected $table = 'users';
    protected $primaryKey = 'ID_USUARIO';
    //LUEGO QUE ESTÉ DEFINIDO EL FORMULARIO QUE LA EMPRESA DEBERÁ COMPLETAR, DEBEMOS ESPECIFICAR LOS CAMPOS EN EL FILLABLE QUE EL USUARIO PUEDE REGISTRAR PARA MANTENER EL CONTROL DE LOS ELEMENTOS QUE SE ESTAN INGRESANDO
    protected $fillable = ['RUT_USUARIO', 'EMAIL_USUARIO', 'LOGIN_USUARIO', 'NOMBRE_USUARIO', 'APELLIDO_USUARIO', 'DIRECCION_USUARIO', 'CIUDAD_USUARIO', 'REGION_USUARIO', 'PAIS_USUARIO', 'FONO_USUARIO', 'FONO_2_USUARIO', 'SEXO_USUARIO', 'FECHA_NACIMIENTO_USUARIO', 'PASSWORD_USUARIO'];
    //protected $hidden = ['PASSWORD_USUARIO', 'remember_token'];
    protected $dates = ['deleted_at'];
    public function setPasswordAttribute($valor){
        if(!empty($valor)){
          $this->attributes['PASSWORD_USUARIO'] = \Hash::make($valor);
        }
    }
}
