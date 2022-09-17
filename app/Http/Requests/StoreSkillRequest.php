<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSkillRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'image' => ['required', 'image'],
            'name' => ['required', 'min:3'],
        ];
    }

    public function transformed(): array
    {
        return array_merge(
            parent::validated(),
            ['image' => $this->file('image')->store('skills')]
        );
    }
}
