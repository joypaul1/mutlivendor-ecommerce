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
            'position' => 'required|integer|unique:sliders',
            'image'     => 'required|image|dimensions:min_width=1920,min_height=500',
        ];
    }

    public function messages()
    {
        return [
            'image.required'    => "Image is required.",
            'position.required' => "position is required.",
            'position.integer'  => 'position must be Number.',
            'position.unique'   => 'This number has already been taken.',
            'image.image'       => 'Invalid image.',
            'image.dimensions'  => 'Image min_width=1920px,min_height=500px.',
        ];
    }
}
