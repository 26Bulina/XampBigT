<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Echipamente extends Model
{
    protected $fillable = ['cod','identificator'];
    protected $dates = ['created_at','updated_at'];
}
