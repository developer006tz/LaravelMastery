<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marks extends Model
{
    use HasFactory;

    protected $table = 'marks';
    protected $primaryKey = 'mark_id';
    protected $fillable = [
        'enrollment_id',
        'marks'
    ];
}
