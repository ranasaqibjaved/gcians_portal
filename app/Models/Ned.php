<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ned extends Model
{
    use HasFactory;
    protected $table = 'neds';
    protected $fillable = [
        'name',
        'email',
        'fname',
        'mobile',
        'date_of_birth',    
        'date_of_admission',
        'gender',
        'opinion',
     ]; 


}
