<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photographer extends Model
{
    //

    protected $table  = 'photographer';
    protected $fillable = ['id_photographer','nickname','studio_address','limitation_time','descript'];

    
    public function user() {
        return $this->belongsTo('App\User');
    }
}
