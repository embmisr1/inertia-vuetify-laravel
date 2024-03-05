<?php

namespace App\Http\Requests\Fleet;

use Illuminate\Foundation\Http\FormRequest;

class TripRequest extends FormRequest
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
            "request_id" => "required",
            "driver_id" => "required",
            // "date_of_trip",
            "trip_ticket_no" => "required",
            // "passengers",
            // "meeting",
        ];
    }
}
