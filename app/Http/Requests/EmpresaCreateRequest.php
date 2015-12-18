<?php
namespace milahorros\Http\Requests;
use milahorros\Http\Requests\Request;
class EmpresaCreateRequest extends Request
{
   public function authorize()
   {
      return true;
   }
   public function rules()  
   {
      return [
         'rut' => 'required',
         'email' => 'required|unique:empresas',
         'login' => 'required',
         'nombre' => 'required',
         'password' => 'required'
      ];
   }
}
