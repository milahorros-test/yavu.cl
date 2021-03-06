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
use Carbon\Carbon;
class User extends Model implements AuthenticatableContract,
																		AuthorizableContract,
																		CanResetPasswordContract
{
		use Authenticatable, Authorizable, CanResetPassword, SoftDeletes;
		protected $table = 'users';
		protected $primaryKey = 'id';
		protected $fillable = ['rut', 'email', 'login', 'nombre', 'apellido', 'direccion', 'ciudad', 'region', 'pais', 'fono', 'fono_2', 'sexo', 'fecha_nacimiento', 'password', 'estado', 'tipo_usuario','referido', 'imagen_perfil', 'imagen_portada'];
		protected $hidden = ['password', 'remember_token'];
		protected $dates = ['deleted_at'];
		public function setPasswordAttribute($valor){
				if(!empty($valor)){
					$this->attributes['password'] = \Hash::make($valor);
				}
		}
		public function setImagenPerfilAttribute($imagen_perfil)
		{
				$this->attributes['imagen_perfil'] = Carbon::now()->second.$imagen_perfil->getClientOriginalName();

				$name = Carbon::now()->second.$imagen_perfil->getClientOriginalName();

				\Storage::disk('local')->put($name, \File::get($imagen_perfil));
		}
		public function setImagenPortadaAttribute($imagen_portada)
		{
				$this->attributes['imagen_portada'] = Carbon::now()->second.$imagen_portada->getClientOriginalName();

				$name = Carbon::now()->second.$imagen_portada->getClientOriginalName();
				
				\Storage::disk('local')->put($name, \File::get($imagen_portada));
		}    
}
