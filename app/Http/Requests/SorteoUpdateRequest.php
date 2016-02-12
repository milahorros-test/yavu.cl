<?php
namespace yavu\Http\Requests;
use yavu\Http\Requests\Request;
class SorteoUpdateRequest extends Request
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [

         'estado_sorteo' => 'required',
        ];
    }
}
