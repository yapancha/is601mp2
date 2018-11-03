<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $timestamps = false;

    protected $fillable = array('make', 'model', 'year');
}
