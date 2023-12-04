<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFrequencyRequest extends FormRequest
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
            'activity_fk' => ['required'],
            'participant_fk' => ['required'],
        ];
    }

    protected function prepareForValidation() {
        $this->merge([
            'activity_fk' => $this->activityFk,
            'participant_fk' => $this->participantFk,
        ]);
    }
}
