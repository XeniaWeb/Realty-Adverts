<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreListingRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'beds' => ['required', 'integer', 'min:0', 'max:100'],
            'baths' => ['required', 'integer', 'min:0', 'max:100'],
            'area' => ['required', 'integer', 'min:0', 'max:10000'],
            'city' => ['required', 'string', 'min:2', 'max:255'],
            'code' => ['required', 'string'],
            'street' => ['required', 'string'],
            'street_number' => ['required', 'string'],
            'price' => ['required', 'integer', 'min:1000', 'max:20000000'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
