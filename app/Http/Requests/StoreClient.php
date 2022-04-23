<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClient extends FormRequest
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
            'first_name' => 'bail|required|min:2|max:50',
            'last_name' => 'bail|required|min:2|max:50',
            'email' => 'required|unique:App\Models\Client,email',
            'weight'=> 'required',
            'height' => 'required',
            'bmi' => 'required',
            'category' => 'required',
            'gender' => 'required',
            'address' => 'nullable',
            'city'  => 'required',
            'state'        => 'required',
            'pincode'   => 'nullable',
            'phone'   => 'nullable',
            'dob'   => 'nullable',
            'age'   => 'nullable',
            'medical_history'   => 'required',
            'food_cat'   => 'required',
            'no_of_meals'   => 'required|min:1|max:6',
            'major_meal'   => 'required|string',
            'glass_water'   => 'required',
            'tea_coffee'   => 'required',
            'sugar'  => 'required|string',
            'cooking_oil' => 'required|string',
            'digestive_complaints' => 'nullable',
            'eat_out' => 'required',
            'alcohol' => 'required',
            'smoke' => 'required',
            'how_active' => 'required',
            'followed_dietplan' => 'required',
            'followed_dietplan_comment' => 'nullable',
        ];
    }
}
