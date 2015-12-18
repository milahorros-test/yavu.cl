<?php
namespace milahorros\Http\Requests;
use milahorros\Http\Requests\Request;
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
