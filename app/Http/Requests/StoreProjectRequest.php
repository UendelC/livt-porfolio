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

    public function transformed(): array
    {
        return array_merge(
            parent::validated(),
            ['image' => $this->file('image')->store('projects')]
        );
    }
}
