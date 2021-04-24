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
        'username', 'email', 'password','phone'
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


    public function user_role()
    {
        return $this->hasMany('App\Role','id_user');
    }



    public function booking()
    {
        return $this->hasMany('App\Booking',' id_customer');
    }
    
    public function post() {
        return $this->hasMany('App\Post','id_photographer');
    }

    public function customer() {
        return $this->hasOne('App\Customer');
    }

    public function photographer() {
        return $this->hasOne('App\Photographer');
    }
    
}
