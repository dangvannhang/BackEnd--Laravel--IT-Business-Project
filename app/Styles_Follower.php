<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StylesFollower extends Model
{
    //
    protected $table='styles_follower';
    protected $primaryKey='id';

    protected $fillable=['id_user','follow_style'];

    public function user() {
        return $this->belongsToMany('App\User','id_user');
    }
}
