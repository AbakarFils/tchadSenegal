<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formalite extends Model
{
    public function Pieces()
    {
        return $this->hasMany('App\Piece');
    }

    public function  MesPieces()
    {
        return $this->belongsToMany('App\Piece');
    }
}
