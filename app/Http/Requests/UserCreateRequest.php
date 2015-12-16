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
         'rut' => 'required',         
         'email' => 'required|unique:users',
         'login' => 'required',
         'nombre' => 'required',
         'apellido' => 'required',
         'password' => 'required'
      ];
   }
}
