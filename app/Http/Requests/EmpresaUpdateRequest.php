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
         'RUT_EMPRESA' => 'required',
         'EMAIL_EMPRESA' => 'required',
         'LOGIN_EMPRESA' => 'required',
         'NOMBRE_EMPRESA' => 'required',
         'PASSWORD_EMPRESA' => 'required'
      ];
   }
}
