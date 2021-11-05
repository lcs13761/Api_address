<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table = "cities";
    protected $hidden = ["created_at", "updated_at"];
    protected $fillable = [
        'state',
        'city',
    ];

    public function address(){
        return $this->hasMany(Address::class);
    }
}
