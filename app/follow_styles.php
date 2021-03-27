<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow_Styles extends Model
{
    //
    protected $table='follow_styles';
    protected $primaryKey='id';

    protected $fillable=['id_user','follow_styles'];

    public function users() {
        return $this->belongsToMany('App\User','id_user');
    }
}
