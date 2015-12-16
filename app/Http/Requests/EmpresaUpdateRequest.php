<?php
namespace Milahorros\Http\Requests;
use Milahorros\Http\Requests\Request;
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
