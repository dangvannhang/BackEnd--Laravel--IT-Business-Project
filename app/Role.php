<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;
    
    
    protected $fillable=[
        'role','descr'
    ];

    protected $primarykey ='id';
    protected $table ='role';


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
