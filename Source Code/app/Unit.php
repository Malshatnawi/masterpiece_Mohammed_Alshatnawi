<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = ['unit_name' , 'course_id'];



    public function lessons(){

        return $this->hasMany('App\Lesson');

    }


    public function course(){

        return $this->belongsTo('App\Course');

    }






}
