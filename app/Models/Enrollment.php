<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $table = 'enrollments';
    protected $primaryKey = 'enrollment_id';
    protected $fillable = [
        'student_id',
        'subject_id'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class,'student_id','enrollment_id');
    }

    public function subject()
    {
        return $this->hasOne(Subject::class,'subject_id');
    }

}
