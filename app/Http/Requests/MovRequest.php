<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovRequest extends FormRequest
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
            "name" => "required",
            "month" => "required",
            // "address"=>"required",
            "prov" => "required",
            "citymun" => "required",
            "brgy" => "required",
            "longitude" => "sometimes|nullable|string",
            "latitude" => "sometimes|nullable|string",
            "office" => "required",
            "type_of_monitoring" => "required",
            "type_of_inspection" => "required",
            "date_of_inspection" => "required",
            "type" => "required",
            "notice_of_date" => "sometimes|nullable",
            "compliance_date" => "sometimes|nullable",
            "complied" => "sometimes|nullable|boolean",
            "remarks" => "sometimes|nullable|string",
            "payment_date" => "sometimes|nullable",
        ];
    }
}
