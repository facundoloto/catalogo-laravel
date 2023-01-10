<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actors extends Model
{
    public $timestamps = false; //this is for solve a error with timestaps when it hasn't columns update 
    use HasFactory;

    public function actor_movie()
    {
        return $this->belongsToMany(actor_movie::class, 'id_actor');
    }
}
