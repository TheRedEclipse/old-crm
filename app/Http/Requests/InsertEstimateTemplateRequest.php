<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertEstimateTemplateRequest extends FormRequest
{
    protected function prepareForValidation()
    {
      //  $this->merge(['estimate_template_id' => $this->request->get('estimate_template')]);
    }

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
            'estimate_template_id' => 'required|integer'
        ];
    }
}
