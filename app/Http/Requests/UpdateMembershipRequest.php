<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMembershipRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'membership' => 'required|string|max:255',
            'order_limit' => 'required|integer|min:1',
            'commission' => 'required|numeric|min:0|max:100',
        ];
    }

    public function attributes()
    {
        return [
            'membership' => 'membership level',
            'order_limit' => 'order limit',
            'commission' => 'commission',
        ];
    }
}
