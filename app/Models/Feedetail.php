<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedetail extends Model
{
    use HasFactory;
    protected $table = 'feedetails';
    protected $fillable = [
        'semester',
        'program',
        'bank',
        'vouchar_no',
        'Due_date',
        'net_amount',
        'Vouchar_file',
    ];
}
