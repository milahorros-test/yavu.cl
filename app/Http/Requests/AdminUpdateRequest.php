<?php
namespace yavu\Http\Requests;
use yavu\Http\Requests\Request;
class AdminUpdateRequest extends Request
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
         'email' => 'required',
         'nombre' => 'required',
         'apellido' => 'required',
        ];
    }
}
