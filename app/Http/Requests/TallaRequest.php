<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TallaRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'talla' => 'min:1|max:8|required'
        ];
    }
}
