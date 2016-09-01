<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StaffRequest extends Request
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
        $validator = [
            'full_name' => 'required',
            'degree' => 'required',
            'description' => 'required'
        ];

        if($this->input('type') == 'primary'){
            $validator['email'] = 'required|email';
            $validator['linkedin'] = 'required|active_url';
            $validator['image_upload'] = 'image|mimes:jpeg,png,jpg';
        }
        return $validator;
    }
}
