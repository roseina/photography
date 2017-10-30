<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table='banner';
    protected $fillable=['id', 'icon', 'image', 'banner_title', 'banner_detail'];
}
