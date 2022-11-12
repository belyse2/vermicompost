<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WormType extends Model
{
   


// field for wormtype table 
    protected $fillable=[
        "name_type",
        "size",
        "life_span"
    ];

   // this   worm type has many bins it contains or it contains in more than on bin 

   // many to many relation 

    public function bin(){
        
        return $this->belongsToMany(Bin::class);
        
    }

    use HasFactory;
}
