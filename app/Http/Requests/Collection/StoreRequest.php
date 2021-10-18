<?php

namespace App\Http\Requests\Collection;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title'        => 'required|string',
            'cover_photo'  => 'required',
            // 'cover_photo_2'  => 'required',
            // 'cover_photo_3'  => 'required',
            'status'       => 'required',
            'show_in_home'  => 'nullable',
        ];
    }





}
