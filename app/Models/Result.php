<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Result extends Model
{
    use HasFactory;
    protected $table = 'results';
    protected $primaryKey = 'id';
    protected $fillable = ['marks'];

    protected $casts = [
        'marks' => 'integer',
        'grade' => 'string',
        'remarks' => 'string',
        'exam_type' => 'string',
        'exam_year' => 'integer',
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    public function class(): BelongsTo
    {
        return $this->belongsTo(ClassModel::class);
    }
}
