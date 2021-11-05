<?php

namespace App\Http\Requests\Slider;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'position'      => 'required|integer|unique:sliders',
            'image'         => 'required|mimes:jpeg,jpg,png,gif|dimensions:min_width=610,min_height=410',
            'short_desc'    => 'nullable|string',
            'offer_desc'    => 'nullable|string',
            'link'          => 'nullable|string',
            'color'         => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'image.required'    => "Image is required.",
            'position.required' => "position is required.",
            'position.integer'  => 'position must be Number.',
            'position.unique'   => 'This number has already been taken.',
            'image.mimes'       => 'Invalid image.',
            'image.dimensions'  => 'Image min_width=610px,min_height=410px.',
        ];
    }

    public function storeSlider($data)
    {

    }
}
