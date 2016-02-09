<?php
namespace yavu;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kbwebs\MultiAuth\PasswordResets\CanResetPassword;
use Kbwebs\MultiAuth\PasswordResets\Contracts\CanResetPassword as CanResetPasswordContract;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
class Empresa extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
	use Authenticatable, Authorizable, CanResetPassword, SoftDeletes;
    protected $table = "empresas";
    protected $primaryKey = 'id';
    protected $fillable = ['rut', 'email', 'login', 'nombre', 'direccion', 'ciudad', 'region', 'pais', 'fono', 'fono_2', 'fecha_creacion', 'tipo_servicio','fecha_de_pago','monto_pagado','nombre_encargado', 'password'];
    protected $hidden = ['password', 'remember_token'];
    protected $dates = ['deleted_at'];
    public function setPasswordAttribute($valor){
        if(!empty($valor)){
          $this->attributes['password'] = \Hash::make($valor);
        }
    }

     public function scopeNombre($query, $nombre)
    {   
        if ($nombre != ""){

            $query->where('nombre', 'like' , '%'.$nombre.'%');
        }
        
    }
}

