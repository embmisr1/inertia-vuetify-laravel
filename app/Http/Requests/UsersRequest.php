<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
            "username"=>"required|string|unique:users,username,' . request('id')",
            // "email"=>"sometimes|nullable|string|email|unique:users,email,' . request('id')",
            // "password"=>"required|string|min:8",
            // "position_id"=>"required|numeric|exists:App\Models\Position,id",
            // "unit_section_id"=>"sometimes|nullable|required|numeric|exists:App\Models\UnitSection,id",
            // "unit_section_id"=>"sometimes|nullable",
            "selected_roles"=>"required|array"
        ];
    }
}
