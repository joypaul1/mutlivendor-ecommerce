<?php

namespace App\Http\Requests\SiteInfo;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'              => 'required|string',
            'title'             => 'nullable|string',
            'address'           => 'required|string',
            'email'             => 'required|email',
            'mobile'            => 'required|string',
            'short_desc'        => 'required|string',
            'logo'              => 'nullable|image|dimensions:min_width=217,min_height=67',
            'ficon'             => 'nullable|image|dimensions:min_width=32,min_height=32',
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => 'Name field can not be empty',
            'email.required'    => 'Email field can not be empty',
            'address.required'  => 'Address field can not be empty',
            'mobile.required'   => 'Mobile field can not be empty',
            'logo.dimensions'   => 'Logo width minimum 217px & height minimum 67px',
        ];
    }
}
