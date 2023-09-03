<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreScoreRequest extends FormRequest
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
            'classroom_id' => 'required',
            'scoring_floor' => 'required|integer|min:0|max:5',
            'scoring_table' => 'required|integer|min:0|max:5',
            'scoring_equipment' => 'required|integer|min:0|max:5',
            'scoring_date' => 'required|date_format:Y-m-d',
        ];
    }
}
