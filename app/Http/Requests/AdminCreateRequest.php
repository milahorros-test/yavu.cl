<?php
namespace milahorros\Http\Requests;
use milahorros\Http\Requests\Request;
class AdminCreateRequest extends Request
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
         'email' => 'required|unique:admins',
         'nombre' => 'required',
         'apellido' => 'required',
         'password' => 'required'            
        ];
    }
}
