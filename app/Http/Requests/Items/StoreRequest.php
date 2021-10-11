<?php

namespace App\Http\Requests\Items;

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
        $rules =  [
            'name'              => 'required|string',
            'category_id'       => 'required|string',
            'sub_category_id'   => 'required|string',
            'child_category_id' => 'nullable|string',
            'brand_id'          => 'nullable|numeric',
            'unit_id'           => 'nullable|numeric',
            'origin_id'         => 'nullable|numeric',

            'v_color_id.*'      => 'nullable|numeric',
            'v_size_id.*'       => 'nullable|numeric',
            'v_sku.*'           => 'nullable|string',
            'v_qty.*'           => 'required|numeric',
            'v_price.*'         => 'required|numeric',
            'v_image.*'         => 'nullable|image',

            'warranty_type'     => 'nullable',
            'warranty_period'   => 'nullable|required_with:warranty_type',
            'warranty_policy'   => 'nullable',

            'highlights'        => 'nullable',
            'description'       => 'nullable|string',

            'feature_image'     => 'required|image',
            'other_images'      => 'nullable|image',
        ];

        switch ($this->method()) {
            case 'POST':
                return $rules ;
                break;
            case 'PUT':
            case 'PATCH':
                return $rules;
        }

    }

    public function messages()
    {
        return [
            'name.required'                 => "Name is required.",
            'category_id.required'          => "Category is required.",
            'sub_category_id.required'      => "Sub Category is required.",
            'brand_id.numeric'              => "Brand is required.",
            'unit_id.numeric'               => "Unit is required.",
            'origin_id.numeric'             => "Origin is required.",
            'warranty_period.required_with' => "Warranty period is required.",
            'description.string'            => 'Description is required',
            'feature_image.required'        => 'Feature image is required',
            'feature_image.image'           => 'Feature image must be a valid image.',
            'other_images.*.image'          => 'Each one must be a valid image.',
            'other_images.*.dimensions'     => 'Each one must meet required dimensions.',
        ];
    }
}
