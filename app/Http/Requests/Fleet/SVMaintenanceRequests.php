<?php

namespace App\Http\Requests\Fleet;

use Illuminate\Foundation\Http\FormRequest;

class SVMaintenanceRequests extends FormRequest
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
            "vehicle_id" => "required|",
            "odo_meter" => "required|",
            "date_of_pr" => "nullable",
            "gross_amount" => "nullable",
            "description" => "required|",
            "supplier" => "required|",
            "date_of_p_o" => "nullable",
            "net_amount" => "nullable",
            "date_repaired" => "nullable",
            "remarks" => "required",
        ];
    }
}
