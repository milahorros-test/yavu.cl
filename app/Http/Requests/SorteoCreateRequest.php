<?php
namespace yavu\Http\Requests;
use yavu\Http\Requests\Request;
class SorteoCreateRequest extends Request
{
   public function authorize()
   {
      return true;
   }
   public function rules()  
   {
      return [
         'nombre_sorteo' => 'required',
         'descripcion' => 'required',
         'fecha_inicio' => 'required',
         //'password' => 'required'
      ];
   }
}
