<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateListingRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'beds' => ['required', 'integer'],
            'baths' => ['required', 'integer'],
            'area' => ['required', 'integer'],
            'city' => ['required'],
            'code' => ['required'],
            'street' => ['required'],
            'street_number' => ['required'],
            'price' => ['required', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
