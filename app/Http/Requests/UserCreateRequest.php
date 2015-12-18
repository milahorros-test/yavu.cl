<?php
namespace milahorros\Http\Requests;
use milahorros\Http\Requests\Request;
class UserCreateRequest extends Request
{
   public function authorize()
   {
      return true;
   }
   public function rules()
   {
      return [
         'rut' => 'required|unique:users',         
         'email' => 'required|unique:users',
         'login' => 'required|unique:users',
         'nombre' => 'required',
         'apellido' => 'required',
         'password' => 'required'
      ];
   }
}
