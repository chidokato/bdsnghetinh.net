<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class icon extends Model
{
    protected $table = "tbl_icon";

    public function category()
    {
    	return $this->hasMany('App\category','icon_id','id');
    }

    public $timestamps = false;
}
