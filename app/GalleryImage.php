<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
	protected $table='gallery_images';
	protected $fillable=['gallery_id','caption','status','image'];

	public function saveGalleryImages($data)
	{
		return $this->create($data);
	}
	public function updatePhotos($id,$input)
	{
		$photos=GalleryImage::find($id);
		$photos->update($input);
		return $photos;

	}
	public function deletephotos($input)
	{
		return $data->delete($input);
	}
	
	public function gallery()
	{
		return $this->belongsTo('App\Gallery','gallery_id','id');
	}

}
