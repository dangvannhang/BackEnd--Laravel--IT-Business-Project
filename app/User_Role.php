<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Role extends Model
{
    //
    protected $fillable = ['id_user','id_role'];
    protected $table = 'user_role';

    public function user() {
        return $this->belongsToMany('App\User','id_user');
    }

    public function  role() {
        return $this->belongsToMany('App\Role','id_role');
    }
}
