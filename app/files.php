<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class files extends Model
{
    //
    public function User(){

        return $this->belongsTo(User::class);
    }
     public function fileinfo(){

        return $this->hasOne(fileinfo::class);
    }
}
