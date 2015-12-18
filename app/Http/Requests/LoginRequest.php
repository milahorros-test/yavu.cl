<?php
namespace Milahorros\Http\Requests;
use Milahorros\Http\Requests\Request;
class LoginRequest extends Request
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required'         
        ];
    }
}
