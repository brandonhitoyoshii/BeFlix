<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class episode extends Model
{
    public function movie(){
        return $this->belongsTo(Movie::class);
    }
}
