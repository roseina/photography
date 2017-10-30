<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
	protected $table= 'settings';
	protected $fillable=[ 'web_title', 'web_tag', 'email', 'phone', 'facebook', 'twitter', 'instagram','phone1','address'];
	
    public function saveData($data)
    {
    	return $this->create($data);
    }
}
