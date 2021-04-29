<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = ['lesson_name' , 'unit_id' , 'lesson_duration' , 'lesson_content'];


    public function unit(){

        return $this->belongsTo('App\Unit');

    }


}
