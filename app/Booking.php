<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    
    protected $table ='booking';
    protected $primarykey ='id';
    public $timestamps = false;


    protected $fillable=[
        'id_customer','id_photographer','id_combo','id_voucher', 'start_time','end_time', 'price',

    ];



    public function user()
    {
        return $this-> beLongTo('App\User');
    }

    public function combo()
    {
        return $this->hasOne('App\Combo','id_combo');
    }

    public function voucher() {
        return $this->hasOne('App\Voucher','id_voucher');
    }


}






