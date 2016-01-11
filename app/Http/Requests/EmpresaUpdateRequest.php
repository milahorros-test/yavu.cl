<?php
namespace yavu\Http\Requests;
use yavu\Http\Requests\Request;
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
