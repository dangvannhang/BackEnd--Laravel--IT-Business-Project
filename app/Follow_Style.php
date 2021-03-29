<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow_Style extends Model
{
    //
    protected $table='follow_style';
    protected $primaryKey='id';

    protected $fillable=['id_user','follow_style'];

    public function user() {
        return $this->belongsToMany('App\User','id_user');
    }
}
