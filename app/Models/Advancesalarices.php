<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advancesalarices extends Model
{
    use HasFactory;
    protected $fillable = [
        'emp_id',
        'email',
        'month',
        'year',
        'status',
        'advanced_salary',
        'advance_salaries',
    ];
}
