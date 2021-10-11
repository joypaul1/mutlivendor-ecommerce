<?php

namespace App\Http\Requests\ChildCategories;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
{
    public function rules()
    {
        return [
            'subcategory_id' => 'required|numeric',
            'category_id'    => 'required|numeric',
            'name' => [
                'required',
                'string',
                Rule::unique('child_categories')
                    ->where(function ($query){
                        return $query
                            ->where('name', $this->name)
                            ->where('category_id', $this->category_id)
                            ->where('subcategory_id', $this->subcategory_id);
                    })
            ],
            'image'         => 'nullable|image|dimensions:min_width=1140,min_height=290',
        ];
    }

    public function messages()
    {
        return [
            'name.required'             => "Name is required.",
            'name.string'               => "Name must be string.",
            'name.unique'               => "Name has already been taken.",
            'category_id.required'      => "Category is required.",
            'subcategory_id.required'   => "SubCategory is required.",
            'subcategory_id.numeric'    => "Invalid SubCategory.",
            'category_id.numeric'       => "Invalid Category.",
            'image.image'               => 'Invalid image',
            'image.dimensions' => 'Invalid image height and width.',
        ];
    }
}
