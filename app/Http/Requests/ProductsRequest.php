<?php

namespace Portfolio\Http\Requests;

use Portfolio\Http\Requests\Request;

class ProductsRequest extends Request
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
            //
            'name'=>'required',
            'description'=>'required',
            'prince'=>'required',
            'featured'=>'required',
            'recommend'=>'required'
        ];
    }
}
