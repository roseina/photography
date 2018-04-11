<?php

namespace App;
use App\Gallery;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
	protected $table='gallery';
	protected $fillable=['name','status','html_title','html_description','html_keywords','short_desc','slug','image'];


	public function saveGallery($data)
	{
		return $this->create($data);
	}
	public function getAlldatas()
	{
		return $this->all();
	}
	public function updategallery($data, $id)
	{
		$gallery= Gallery::find($id);
		$gallery->update($data);
		return $gallery;
	}
	public function deletegallery($del)
	{
		
		return $del->delete();
	}
	public function galleryImages()
	{
		return $this->hasMany('App\GalleryImage','gallery_id','id')->where('status','active');
	}
}
