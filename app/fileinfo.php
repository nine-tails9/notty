<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\fileinfo;
class fileinfo extends Model
{
    //
 	public function files(){

        return $this->hasOne(files::class);
    }
}
