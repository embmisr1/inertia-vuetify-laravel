<?php

namespace App\Http\Requests\Events;

use Illuminate\Foundation\Http\FormRequest;

class EventsRequests extends FormRequest
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
            // "user_id", // creator of the event
            "title" => "required|min:3",
            "description" => "sometimes|required|string|nullable",
            "location" => "sometimes|string|nullable",
            "eventDateTime" => "sometimes|required|date",
            "isOnline" => "required|boolean",
            "isF2f" => "required|boolean",
            "isHybrid" => "required|boolean",
            "requestForMIS" => "required|string",
            "departureDateTime" => "sometimes|required|date",
            "remarks" => "sometimes|required|string",
            "status" => "required|string",
        ];
    }
}
