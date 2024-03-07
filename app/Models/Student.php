<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $primaryKey = 'student_id';
    protected $fillable = [
        'name',
        'age',
        'gender',
        'number'
    ];

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class,'student_id');
    }
}
