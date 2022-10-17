<?php

namespace App\Http\Requests\Backend\Community;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => "required|string|unique:communities,name,{$this->community}|max:255|bail",
            'description' => 'nullable|string|bail',
        ];
    }
}
