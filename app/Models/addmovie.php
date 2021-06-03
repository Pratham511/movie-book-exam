<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addmovie extends Model
{
    use HasFactory;

    public function getTheatreRelation(){
        return $this->hasMany('App\Models\theatre','addmovie_id','id');
    }
    /*public function getMovieRelation(){
        return $this->hasOne('App\Models\book_movie_ticket','addmovie_id','id');
    }*/

}
