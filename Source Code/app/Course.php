<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'course_name', 'category_id', 'course_description', 'course_image', 'course_price', 'course_duration', 'course_instructor', 'course_trailer'
    ];


    public function category(){

        return $this->belongsTo('App\Category');

    }

    public function units(){

        return $this->hasMany('App\Unit');

    }


    public function user(){ 
        return $this->belongsToMany('App\User');
    }

    public function order(){ 
        return $this->belongsToMany('App\Order');
    }







}


