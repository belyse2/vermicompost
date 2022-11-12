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
        'village'
    ];
  
    public function Bin(){
        return $this->belongsTo(Bin::class);
    }

    use HasFactory;
}
