<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;


class customer extends Authenticatable
{
    use HasFactory;

    /*public function getCustomerRelation(){
        return $this->hasMany('App\Models\book_movie_ticket','customer_id','id');
    }*/

    /*public function groupRelation(){
        return $this->hasManyThrough('App\Models\addmovie','App\Models\book_movie_ticket','id','id');
    }*/

}
