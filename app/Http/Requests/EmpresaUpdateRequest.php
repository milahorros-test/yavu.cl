<?php
namespace milahorros\Http\Requests;
use milahorros\Http\Requests\Request;
class EmpresaUpdateRequest extends Request
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
      ];
   }
}
