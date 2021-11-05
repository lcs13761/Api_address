<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $table = "addresses";
    protected $fillable = ["city_id","street","district", "number"];



    public function city(){
        return $this->belongsTo(City::class);
    }


}
