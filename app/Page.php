<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table='pages';
    protected $fillable=['page_title', 'banner_text', 'short_desc', 'long_desc', 'slug', 'image', 'banner_image', 'status'];
}
