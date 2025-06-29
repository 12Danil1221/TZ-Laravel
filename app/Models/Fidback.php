<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fidback extends Model
{
    use HasFactory;

    protected $fillable=[
        'email',
        'name',
        'message',
    ];
}