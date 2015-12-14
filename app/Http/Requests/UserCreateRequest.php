<?php
namespace Milahorros\Http\Requests;
use Milahorros\Http\Requests\Request;
class UserCreateRequest extends Request
{
   public function authorize()
   {
      return true;
   }
   public function rules()
   {
      return [
         'RUT_USUARIO' => 'required',         
         'EMAIL_USUARIO' => 'required|unique:users',
         'LOGIN_USUARIO' => 'required',
         'NOMBRE_USUARIO' => 'required',
         'APELLIDO_USUARIO' => 'required',
         'PASSWORD_USUARIO' => 'required'
      ];
   }
}
