<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vrijbrief extends Model
{
    protected $primaryKey = 'VrijID'; 

    public function user(){
        return $this->belongsTo('App\User');
    }
}
