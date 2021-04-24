<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;
    
    

    protected $primarykey ='id';
    protected $table ='role';

    protected $fillable=[
        'role','descr'
    ];


    public function user_role() {
        return $this->hasMany('App\User_Role');
    } 
}
