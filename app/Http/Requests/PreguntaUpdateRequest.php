<?php
namespace yavu\Http\Requests;
use yavu\Http\Requests\Request;
class PreguntaUpdateRequest extends Request
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'encuesta_id' => 'required',
            'pregunta' => 'required',
        ];
    }
}
