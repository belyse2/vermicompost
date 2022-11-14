<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VermUser extends Model
{
    use HasFactory;
    protected $fillable=[
        "Fname",
        "Lname",
        "location",
        "Gender",
        "Email",
        "role_type"
    ];
    public function bin(){
        return $this->hasMany(Bin::class);
    }
}
