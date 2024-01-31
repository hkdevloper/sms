<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = ['SubjectName', 'SubjectCode', 'SubjectDescription'];

    public function class(): BelongsTo
    {
        return $this->belongsTo(ClassModel::class);
    }

    public function results(): HasMany
    {
        return $this->hasMany(Result::class);
    }
}
