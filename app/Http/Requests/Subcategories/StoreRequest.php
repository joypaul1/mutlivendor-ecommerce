<?php

namespace App\Http\Requests\Subcategories;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'vat'         => 'nullable',
            'category_id' => 'required',
            'commission'  => 'required|numeric',
            'image'         => 'nullable|image|dimensions:min_width=1140,min_height=290',
            'name' => [
                'required',
                'string',
                Rule::unique('sub_categories')
                    ->where(function ($query){
                        return $query
                            ->where('name', $this->name)
                            ->where('category_id', $this->category_id);
                    })
            ],
        ];
    }

    public function messages()
    {
        return [
            'name.required'         => "name is required.",
            'name.string'           => "name must be string.",
            'name.unique'           => "name has already been taken.",
            'category_id.required'  => "Category is required.",
            'category_id.numeric'   => "Invalid category.",
            'Commission .numeric'   => "Invalid Commission.",
            'vat .numeric'          => "Invalid vat.",
            'image.image'           => 'Invalid image',
            'image.dimensions' => 'Invalid image height and width.',
        ];
    }
}
