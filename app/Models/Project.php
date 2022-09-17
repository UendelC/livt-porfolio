<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'skill_id',
        'name',
        'image',
        'url',
    ];

    public function skill(): BelongsTo
    {
        return $this->belongsTo(Skill::class);
    }
}
