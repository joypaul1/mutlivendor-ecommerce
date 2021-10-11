<?php

namespace App\Http\Requests\Categories;

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
            'name'          => 'required|string|unique:categories,name,' . $this->category->id,
            'position'      => 'nullable|numeric|unique:categories,position,' . $this->category->id,
            'show_on_top'   => 'nullable',
            'image'         => 'nullable|image|dimensions:min_width=1140,min_height=290',
        ];
    }

    public function messages()
    {
        return [
            'name.required'    => "name is required.",
            'position.numeric' => "numeric must be numeric.",
            'name.string'      => 'name must be string',
            'image.image'      => 'Invalid image',
            'image.dimensions' => 'Invalid image height and width.',
        ];
    }
}
