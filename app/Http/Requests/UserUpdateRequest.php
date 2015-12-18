<?php
namespace Milahorros\Http\Requests;
use Milahorros\Http\Requests\Request;
class UserUpdateRequest extends Request
{
   public function authorize()
   {
      return true;
   }
   public function rules()
   {
      return [
         'rut' => 'required',         
         'email' => 'required',
         'login' => 'required',
         'nombre' => 'required',
         'apellido' => 'required',
         //'PASSWORD_USUARIO' => 'required'
      ];
   }
}
