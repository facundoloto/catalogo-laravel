<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actor_movie extends Model
{
    public $timestamps = false; //this is for solve a error with timestaps when it hasn't columns update 
    use HasFactory;

    public function movie()
    {
        return $this->belongsToMany(movie::class, 'id_movie');
    }

    public function actor()
    {
        return $this->belongsToMany(actors::class, 'id_actor');
    }
}
