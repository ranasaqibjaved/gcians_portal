<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iaf extends Model
{
    use HasFactory;
    protected $table = 'iafs';
    protected $fillable = [
        'email',
        'fname',
        'mobile',
        'date_of_birth',
        'date_of_admission',
        'gender',
        'session',
        'session_type',
     ]; 
}
