<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DigitalLiberary extends Model
{
    use HasFactory;

    protected $table = 'digital_liberaries';
    protected $fillable = [
        'name',
        'description',
        'extention',
        'file_path',
    ];
}
