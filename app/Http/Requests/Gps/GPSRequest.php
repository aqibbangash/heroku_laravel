<?php

namespace OBS\Http\Requests\Gps;

use OBS\Http\Requests\Request;

class GPSRequest extends Request
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
        $rules = [
            'selected_id' => 'required|integer',
            'type' => 'required|integer',
        ];
        return $rules;
    }
}
