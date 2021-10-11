<?php

namespace App\Http\Requests\Banner;

use Illuminate\Foundation\Http\FormRequest;

class BannerUpdateRequest extends FormRequest
{
   public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'image'     => 'required|image|dimensions:min_width=1400,min_height=170',
        ];
    }

    public function messages()
    {
        return [
            'image.image'       => 'Invalid image.',
            'image.dimensions'  => 'Image Must be min_width=1400px,min_height=170px',
        ];
    }
}
