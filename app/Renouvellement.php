<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Renouvellement extends Model
{
    public function  MesPieces()
    {
        return $this->belongsToMany('App\Piece');
    }
}
