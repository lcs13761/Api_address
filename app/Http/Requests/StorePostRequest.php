<?php

namespace App\Http\Requests;

use App\Models\City;
use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            "city_id" => ["required","integer", function ($attribute,$value,$fail){
                $check = City::find($value);
                if(!$check){
                    $fail('The ' .$attribute.' is invalid.');
                }
            }],
            "number" => "required|integer",
            "district" => "required|string",
            "street" => "required|string"
        ];
    }
}
