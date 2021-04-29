<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id' , 'order_value' , 'order_date', 'cart'];


    public function user(){

        return $this->belongsTo('App\User');

    }


    public function course(){ 
        return $this->belongsToMany('App\Course');
    }

}
