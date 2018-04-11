<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Gallery;
use Redirect;
use Input;
use Intervention\Image\Facades\Image;
use App\GalleryImage;
use File;

class galleryController extends Controller
{
	public function __construct(Gallery $gal,GalleryImage $gallery)
	{
		$this->model=$gal;
		$this->gallery= $gallery;
		$this->pathBig = public_path() . '/uploads/gallery/gallery_images';
		$this->photoPath= public_path() . '/uploads/gallery/photos';
		
	}

	public function index()
	{
		$data['allDatas']=$this->model->getAlldatas();
		return view('Admin.gallery.gallery',$data);
	}
	public function newgallery()
	{

		return view('Admin.gallery.newgallery');
	}
	public function savegallery(Request $request)
	{

		$input=$request->all();
		$rules=['name'=>'required|unique:gallery',
		// 'slug' => 'required|unique:gallery|max:20',
		// 'html_title'=>'required',
		// 'short_desc'=>'required',
		// 'status'=>'required'
		];

		$messages=['name.required'=>'please provide the name to the gallery!',
		'name.unique'=>'The gallery name has already been taken',
		'slug.required'=>'please give slug to the gallery!',
		'html_title.required'=>'please fill the Html title field!',
		'short_desc.required'=>'please give the short description to the gallery!',
		'status.required'=>'Please select the status field!'];

		$validate=Validator::make($request->all(),$rules,$messages);

		if($validate->fails())
		{
			return Redirect::back()->withErrors($validate)->withInput($request->all());
		}
		else
		{
			if(Input::hasFile('image'))
			{
				if (is_dir($this->pathBig) != true) {
					\File::makeDirectory($this->pathBig, $mode = 0777, true);
				}
				$fileName = uniqid() . '.' . Input::file('image')->getClientOriginalExtension();
				$fileNameDir = $this->pathBig . '/' . $fileName;
				$image = Image::make(Input::file('image'));
				$image->fit(370,352);

				$image->save($fileNameDir, 100);
				$input['image'] = $fileName;
			}

			if($this->model->create($input))

			{
				return redirect::to('admin/gallery')->withErrors(['alert-success'=>'The gallery has been successfully added']);
			}
			else
			{
				return redirect::to('admin/gallery')->withErrors(['alert-danger'=>'The gallery couldnot be saved now']);
			}
		}
	}
	public function editgallery()
	{
		$data = $this->model->find(Input::get('id'));
		if (empty($data)) {
			return redirect::to('admin/gallery')->withErrors(['alert-danger' => 'Data was not found!']);
		}

		return view('Admin.gallery.editgallery', compact('data'));
	}

	public function updategallery(Request $request)
	{
		$gallery=$this->model->find($request->id);
		$editinput = $request->all();
		$rules=['name'=>'required',
		// 'slug' => 'required|max:2|regex:/^.*(?=.*[a-z]).*$/|unique:gallery,slug,' . $request->get('id'),
		// 'html_title'=>'required',
		// 'short_desc'=>'required',
		// 'status'=>'required'
		];

		$messages=['name.required'=>'please provide the name to the gallery!',
		'slug.required'=>'please give slug to the gallery!',
		'html_title.required'=>'please fill the Html title field!',
		'short_desc.required'=>'please give the short description to the gallery!',
		'status.required'=>'Please select the status filed!'];

		$validate=Validator::make($request->all(),$rules,$messages);
		if($validate->fails())
		{
			return Redirect::back()->withErrors($validate)->withInput($request->all());
		}
		else
		{
			if (null !== $gallery->image && file_exists($this->pathBig . '/' . $gallery->image)) {
					// \File::delete($this->pathMedium.'/'.$gallery->image);
					\File::delete($this->pathBig . '/' . $gallery->image);
				}
				if (is_dir($this->pathBig) != true) {
					\File::makeDirectory($this->pathBig, $mode = 0777, true);
				}

				$image = $request->file('image');

				$filename = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();

				$imgBig = \Image::make($request->file('image'))->fit(370, 350)->save($this->pathBig . '/' . $filename);

				$editinput['image'] = $filename;
			if($gallery->update($editinput))
			{
				return redirect::to('admin/gallery')->withErrors(['alert-success'=>'Data successfully updated!']);
			}
			else{
				return redirect::to('admin/gallery')->withErrors(['alert-danger'=>' Sorry, Data wasnot updated!']);
			}
		}

	}
	public function deletegallery()
	{
		$id=Input::get('id');
		$deldata=$this->model->find($id);
		if($deldata!=null)
		{
			$this->model->deletegallery($deldata);
			return redirect::to('admin/gallery')->withErrors(['alert-success'=>'The data was deleted successfully!']);	
		}
		else
		{
			return redirect::to('admin/gallery')->withErrors(['alert-danger'=>'sorry the data wasnot found!']);
		}

	}
	public function changeStatus()
	{
		$data = $this->model->find(Input::get('id'));
		if ($data != null) 
		{
			if($data->status=='Inactive')
			{
				$data->status='Active';
			}
			else
			{
				$data->status='Inactive';
			}
			$data->save();
			return redirect()->back();
		}
		else
		{
			return redirect::to('admin/gallery')->withErrors(['alert-danger'=>'Sorry the status cannot be changed now']);
		}


	}
	public function photos()
	{
		$galleryId=Input::get('id');
		$gallery=$this->model->find($galleryId);
		$galleryPhotos=$this->gallery->where('gallery_id',$galleryId)->get();
		

		return view('Admin.gallery.photo', compact('galleryId', 'gallery', 'galleryPhotos'));

	}
	public function addPhotos()
	{
		$gallery_id=Input::get('id');
		$galleries=Gallery::pluck('name','id');
		
		return view('Admin.gallery.addPhoto',compact('gallery_id','galleries'));


		
	}
	public function savePhotos(Request $request)
	{
		$input=$request->all();
		
		$rules=[
		'gallery_id'=>'required',
		'image'=>'required',
		'status'=>'required'];
		$messages=
		['gallery_id.required'=>'Please select the gallery name to upload the file!',
		'image.required'=>'Please select an image to upload!',
		// 'image.max'=>'Please select a file upto 2 MB!',
		'status.required'=>'please select the status field!'];
		$validate= Validator::make($input,$rules,$messages );
		if($validate->fails())
		{
			return redirect::back()->withErrors($validate)->withInput($input);
		}
		else
		{
			if(Input::hasFile('image'))
			{
				if (is_dir($this->photoPath) != true) {
					\File::makeDirectory($this->photoPath, $mode = 0777, true);
				}
				$fileName = uniqid() . '.' . Input::file('image')->getClientOriginalExtension();
				$fileNameDir = $this->photoPath . '/' . $fileName;
				$image = Image::make(Input::file('image'));

				$image->save($fileNameDir, 100);
				$input['image'] = $fileName;
			}
			if($this->gallery->saveGalleryImages($input))
			{

				return redirect::to('admin/gallery/galleryphotos?id='. Input::get('gallery_id'))->withErrors(['alert-success'=>'The photo has been successfully added!']);
			}
			else
			{
				return redirect::to('admin/gallery/galleryphotos')->withErrors(['alert-danger'=>'The photo couldnot be added now!']);
			}
		}
	}
	public function toggleStatus()
	{
		$id=Input::get('id');
		$data=$this->gallery->find($id);
		if($data!=null)
		{

			if($data->status=='Active')
			{
				$data->status="Inactive";
			}
			else
			{
				$data->status="Active";

			}
			$data->save();
			return redirect()->back();
		}
		
		else
		{
			return redirect::to('admin/gallery/galleryphotos')->withErrors(['alert-danger'=>'Sorry, the status couldnot be changed now!']);
		}
	}

	public function viewPhotos()
	{
		$galleryId=Input::get('id');
		$gallery=$this->model->find($galleryId);
		$galleryPhotos=$this->gallery->where('gallery_id',$galleryId)->get();
		return view('Admin.gallery.detail',compact('galleryPhotos', 'gallery'));
	}
	public function editPhoto()
	{
		$id=Input::get('id');
		$galleries=Gallery::pluck('name','id');
		$datas=$this->gallery->find($id);
		$gallery_id=$datas->gallery_id;
		if($datas!=null)
		{
		
		return view('Admin.gallery.editphoto', compact('gallery_id','datas','galleries'));	
		}
		else
		{
			return redirect::to('admin/gallery/galleryphotos')->withErrors(['alert-danger'=>'Sorry,the data was not found']);
		}
		
	}
	public function updatePhoto(Request $request)
	{
		 $id = Input::get('id');
        $photos = $this->gallery->find($id);
		$input=$request->all();
		
		$rules=[
		'gallery_id'=>'required',
		'image'=>'sometimes',
		'status'=>'required'];

		$messages=
		['gallery_id.required'=>'Please select the gallery name to upload the file!',
		'image.required'=>'Please select an image to upload!',
		'image.max'=>'Please select a file upto 2 MB!',
		'status.required'=>'please select the status field!'];
		$validate= Validator::make($input,$rules,$messages );
		if($validate->fails())
		{
			return redirect::back()->withErrors($validate)->withInput($input);
		}
		else
		{ if (null !== $photos->image && file_exists($this->photoPath . '/' . $photos->image)) {
				
					\File::delete($this->photoPath . '/' . $photos->image);
				}
				if (is_dir($this->photoPath) != true) {
					\File::makeDirectory($this->photoPath, $mode = 0777, true);
				}

				$image = $request->file('image');

				$filename = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();

				$imgBig = \Image::make($request->file('image'))->save($this->photoPath . '/' . $filename);

				$input['image'] = $filename;
			}
			
			if($this->gallery->updatePhotos($id,$input))
			{

				return redirect::to('admin/gallery/galleryphotos?id='. Input::get('gallery_id'))->withErrors(['alert-success'=>'The photo has been successfully updated!']);
			}
			else
			{
				return redirect::to('admin/gallery/galleryphotos')->withErrors(['alert-danger'=>'The photo couldnot be updated now!']);
			}
			}
		public function delImage()
		{
			$photo_id=Input::get('id');
			$allDatas=$this->gallery->where('id',$photo_id)->first();
			$img=$allDatas->image;
			if ($img != '' && file_exists(public_path() . '/uploads/gallery/images/' . $img))
			{

				$path = public_path() . '/uploads/gallery/images/' . $img;
				File::delete($path);
				$allDatas->image="";
				$allDatas->save();

				return redirect()->back()->withErrors(['alert-success' => 'Image was deleted successfully.']);
			}


			else {

				return redirect()->back()->withErrors(['alert-danger' => 'The Image Could not be deleted']);
			}


		}
public function delPhoto()
{
	$id=Input::get('id');
	$datas=$this->gallery->find($id);
	if($datas!=null)
	{
		if($this->gallery->deletephotos($input))
		{
			$this->delImage();

				return redirect::to('admin/gallery/galleryphotos?id='. Input::get('gallery_id'))->withErrors(['alert-success'=>'The photo has been successfully deleted!']);
		}
		else
		{
			return redirect::to('admin/gallery/galleryphotos?id='. Input::get('gallery_id'))->withErrors(['alert-danger'=>'The photo coulnot be deleted now !']);
		}
	}
	else
		{
			return redirect::to('admin/gallery/galleryphotos?id='. Input::get('gallery_id'))->withErrors(['alert-danger'=>'The photo was not found!']);
		}
}
	
}

