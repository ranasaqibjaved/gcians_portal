<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    use HasFactory;
    protected $table = 'attendences';
    protected $fillable = [
        'email',
        'subject_title',
        'teacher_name',
        'semester',
        'date',
        'present',
     ]; 
}
