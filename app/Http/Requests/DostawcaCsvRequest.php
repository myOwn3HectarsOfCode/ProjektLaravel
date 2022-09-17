<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DostawcaCsvRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //passing on all rules what have set up -
        // (but if we were to set them as false rules -
        // the application wouldn't pass EXACTLY THESE RULES)
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
            'csv' => 'required|file',
        ];
    }
}
