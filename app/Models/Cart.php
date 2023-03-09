<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function cartfood()
    {
        return $this->belongsto(Food::class,'food_id','id');
    }
     public function cartuser()
    {
        return $this->belongsto(User::class,'user_id','id');
    }

}
