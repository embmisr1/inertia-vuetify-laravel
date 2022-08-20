<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUsersRequest extends FormRequest
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
            "username"=>"required|string",
            "email"=>"required|nullable|string|email",
            "position_id"=>"required|numeric|exists:App\Models\Position,id",
            "unit_section_id"=>"required|numeric|exists:App\Models\UnitSection,id"
        ];
    }
}
