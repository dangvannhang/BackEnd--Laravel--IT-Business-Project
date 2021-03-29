<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password','id_role','phone','name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $primarykey ='id';
    protected $table ='user';


    public function role()
    {
        return $this->hasOne('App\Role','id_role');
    }


    public function booking()
    {
        return $this->hasMany('App\Booking',' id_user');
    }

    public function post() {
        return $this->hasMany('App\Post','id_photographer');
    }
    
}
