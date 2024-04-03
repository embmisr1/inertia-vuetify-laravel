<?php

namespace App\Http\Requests\Fleet;

use Illuminate\Foundation\Http\FormRequest;

class RequestVehicle extends FormRequest
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
            "id"=>"nullable",

            "name" => "required",
            "purpose" => "required",
            "destination" => "required",
            "name_of_firms" => "nullable",
            "places" => "nullable",
            "departure" => "required",
            "arrival" => "required",
            "requestedBy" => "nullable",
            // "approvedBy" => "nullable",
            "status" => "nullable",
        ];
    }
}
