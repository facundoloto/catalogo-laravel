<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class directors extends Model
{
    public $timestamps = false; //this is for solve a error with timestaps when it hasn't columns update 
    use HasFactory;

    public function director_movie()
    {
        return $this->belongsTo(director_movie::class, 'id_director');
    }

}
