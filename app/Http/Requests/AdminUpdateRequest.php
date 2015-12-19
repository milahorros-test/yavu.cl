<?php
namespace milahorros\Http\Requests;
use milahorros\Http\Requests\Request;
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
