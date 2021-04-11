<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_Photographer extends Model
{
    //
    protected $table = 'detail_photographer';
    protected $primaryKey = 'id';
    
    protected $fillable=['id_photographer','nickname','short_description','address','limit_time'];

    public function user() {
        return $this->belongsTo('App\User','id_photographer');
    }

}
