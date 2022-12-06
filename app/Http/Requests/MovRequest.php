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
            // "user_id"=>"required|string",
            "name" => "required|string",
            "month" => "required",
            // "address"=>"required",
            "prov" => "required|string",
            "citymun" => "required|string",
            "brgy" => "required|string",
            "longitude" => "sometimes|nullable|string",
            "latitude" => "sometimes|nullable|string",
            "office" => "required|string",
            "type_of_monitoring" => "required",
            "type_of_inspection" => "required",
            "date_of_inspection" => "required|date",
            "type" => "required|string",
            "notice_of_date" => "sometimes|nullable",
            "compliance_date" => "sometimes|nullable",
            "complied" => "sometimes|nullable",
            "remarks" => "sometimes|nullable|string",
            "payment_date" => "sometimes|nullable",
            "files"=>"sometimes|nullable",
            // 'files.*' => [
            //     'sometimes', 'mimes:jpeg,png,jpg,pdf', 'max:10000'
            //     // new VideoAttachmentFileSizeLimit
            // ]
        ];
    }
}
