<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreParticipantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'email' => ['required'],
            'role' => ['required', Rule::in(['monitor', 'listener', 'speaker'])],
        ];
    }

    protected function prepareForValidation() {
        $this->merge([
            'has_disability' => $this->hasDisability,
            'assistance_needed' => $this->assistanceNeeded,
        ]);
    }
}
