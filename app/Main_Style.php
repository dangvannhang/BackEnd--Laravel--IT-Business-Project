<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main_Style extends Model
{
    //
    protected $table="main_style";
    protected $primaryKey= "id"; 

    protected $fillable=['name','descr'];

    public function styles_follower() {
        return $this->hasMany('App\Styles_Follower','id_style');
    }
}
