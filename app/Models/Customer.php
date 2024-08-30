<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'email',
        'phone',
        'address',
        'photo',
        'shopname',
        'accound_holder',
        'city',
        'account_number',
        'bank_name',
        'bank_branch',
    ];
}
