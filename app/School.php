<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class School extends Model
{


    protected $fillable = ['name', 'website', 'email', 'logo'];
}
