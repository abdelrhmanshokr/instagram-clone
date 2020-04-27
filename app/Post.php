<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //to link this model to the user model
    public function user(){
        return $this->belongsTo(User::class);
    }
}
