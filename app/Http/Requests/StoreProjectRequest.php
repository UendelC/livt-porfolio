<?php

namespace App\Http\Requests;

use App\Models\Skill;
use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'image' => ['required', 'image'],
            'name' => ['required', 'min:3'],
            'skill_id' => ['required', 'exists:'.Skill::class.',id'],
            'url' => ['url'],
        ];
    }

    public function passedValidation(): void
    {
        $this->merge(
            [
                'image' => $this->file('image')->store('projects'),
            ]
        );
    }
}
