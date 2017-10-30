<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homecomponent extends Model
{
    protected $table='homecomponent';
    protected $fillable=['featured_image', 'title', 'url', 'status'];
}
