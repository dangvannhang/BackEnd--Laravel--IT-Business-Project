<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photography_Follower extends Model
{
    //

    protected $table = 'photography_follower';
    protected $fillable = ['id_customer','id_photographer'];


}
