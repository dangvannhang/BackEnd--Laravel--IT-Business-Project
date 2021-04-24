<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //

    protected $fillable = ['id_user','billing'];
    protected $table = 'customer';

    public function user() {
        return $this->belongsTo('App\User');
    }
    
}
