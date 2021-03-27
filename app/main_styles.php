<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main_Styles extends Model
{
    //
    protected $table="main_styles";
    protected $primaryKey= "id"; 

    protected $fillable=['name','descr'];
}
