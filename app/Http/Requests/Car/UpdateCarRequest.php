<?php

namespace App\Http\Requests\Car;

use App\Models\Car;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCarRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'brand' => [
                'required',
                'string',
                'min:1',
                'max:100',
            ],
            'model' => [
                'required',
                'string',
                'min:1',
                'max:100',
            ],
            'year' => [
                'required',
                'integer',
                'min:1900',
                'max:' . (date('Y') + 1),
            ],
            'description' => [
                'nullable',
                'string',
                'max:255',
            ],
            'location' => [
                'required',
                'string',
                'max:100',
            ],
            'price_per_day' => [
                'required',
                'decimal:0,2',
            ],
            'status' => [
                'required',
                Rule::in(Car::statuses()),
            ]
        ];
    }
}
