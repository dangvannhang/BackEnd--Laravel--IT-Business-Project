<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_Booking extends Model
{
    //

    protected $table="detail_booking";
    protected $fillable = ['id_booking','address','start_time','end_time'];

    public function booking() {
        return $this->belongsTo('App\Booking','id_booking');
    }

}
