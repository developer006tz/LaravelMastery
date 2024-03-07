<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'subjects';
    protected $primaryKey = 'subject_id';
    protected $fillable = [
        'subject_name'
    ];


    public function enrollment()
    {
        return $this->hasMany(Enrollment::class,'subject_id','subject_id');
    }
}
