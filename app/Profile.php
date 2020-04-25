<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //to link the user model to the profile model 
    public function user(){
        return $this->belongsTo(User::class);
    }
}
