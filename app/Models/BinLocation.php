<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinLocation extends Model
{


    protected $fillable=[
        'country',
        'district',
        'cell',
        'village',
        'bin_id'
    ];

  // this location belong to one bin
  
    public function Bin(){
        return $this->belongsToMany(Bin::class);
    }

    
    use HasFactory;
}
