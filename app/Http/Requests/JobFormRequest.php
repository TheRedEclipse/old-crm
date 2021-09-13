<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobFormRequest extends FormRequest
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
        return  [
            'lead_id' => 'required|integer',
            'request_id' => 'required|array',
            'job_name'      => 'required|string|max:255',
            'type'          => 'required|integer|max:10',
            'status'        => 'required|integer|max:10',
        ];
    }
}
