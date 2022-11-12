<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bin extends Model
{
    use HasFactory;
    protected $fillable=[
        "number",
        "location"
    ];
    public function vermuser(){
        return $this->belongsTo(VermUser::class);
    }

// wormtypes many to many relation
// this bin has may contain more than on wormtype


    public function Wormtype(){
        
        return $this->belongsToMany(Wormtype::class);
    }



    public function Location(){
        return $this->hasOne(Location::class);
    }
}
