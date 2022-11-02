<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bincondition extends Model
{
    use HasFactory;
    protected $fillable=[
        "temperature",
        "humidity",
        "acidity",
        "watercondition"

    ];
}
