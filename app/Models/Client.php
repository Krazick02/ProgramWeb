<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    // data
    protected $fillable = [
        'name',
        'lastname',
        'email',
        'phone_number'
    ];
}
