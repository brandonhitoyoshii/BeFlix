<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    public function genre(){
        return $this->belongsTo(Genre::class);
    }
    public function episodes(){
        return $this->hasMany(Episode::class);
    }
}
