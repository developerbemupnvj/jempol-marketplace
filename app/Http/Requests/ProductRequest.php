<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|max:255|string',
            'price' => 'required|numeric',
            'product_category_id' => 'required',
            'description' => 'required|string',
            'image' => 'file|mimes:jpg,jpeg,gif,png|max:2048',
            'link_shopee' => 'nullable|string',
            'link_tokopedia' => 'nullable|string',
            'link_bukalapak' => 'nullable|string',
            'link_lazada' => 'nullable|string',
            'link_instagram' => 'nullable|string',
        ];
    }
}
