<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    //
    protected $table='voucher';

    protected $primarykey='id';

    protected $fillable=['code','descr','count','denomination','start_time','end_time'];

    public function booking() {
        return $this->belongstoMany('App\Booking');
    }
    public function photographer() {
        return $this->belongsTo('App\Photographer');
    }
}
