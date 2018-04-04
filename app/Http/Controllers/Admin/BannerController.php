<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banner;
use Input;
use Image;
use File;

class BannerController extends Controller
{
	public function __construct(Banner $banner)

	{
		$this->model= $banner;
		$this->redirectUrl= 'admin/banner';

	}

	public function index()
	{
		$bannerData=$this->model->all();

		return view('Admin.Banner.index', compact('bannerData'));
	}

	public function create()
	{
		return view('Admin.Banner.create');
	}

	public function store(Request $request)
	{
		$input=$request->all();
		if(Input::hasFile('image'))
		{

			$directory = public_path() . '/uploads/banner/images';
			$fileName = uniqid() . '.' . Input::file('image')->getClientOriginalExtension();
			$fileNameDir = $directory . '/' . $fileName;
			$image = Image::make(Input::file('image'));
			$image->fit(158,224);

			$image->save($fileNameDir, 100);
			$input['image'] = $fileName;
		}

		if(Input::hasFile('icon'))
		{

			$directory = public_path() . '/uploads/banner/icons';
			$fileName = uniqid() . '.' . Input::file('icon')->getClientOriginalExtension();
			$fileNameDir = $directory . '/' . $fileName;
			$image = Image::make(Input::file('icon'));
			$image->fit(158,224);

			$image->save($fileNameDir, 100);
			$input['icon'] = $fileName;
		}
		if($this->model->create($input))
		{
			return redirect($this->redirectUrl)->withErrors(['alert-success'=>'The banner has been successfully added!']);
		}
		else
		{
			return redirect($this->redirectUrl)->withErrors(['alert-danger'=>'Sorry,the banner couldnot be added now!']);
		}
	}

	public function edit()
	{
		$id=Input::get('id');
		$data=$this->model->where('id',$id)->first();
		if($data!=null)
		{
			return view('Admin.Banner.edit', compact('data'));
		}
		else
		{
			return redirect($this->redirectUrl)->withErrors(['alert-danger'=>'Sorry, the data wasnot found!']);
		}
	}

	public function update(Request $request)
	{
		$id=Input::get('id');
		$data=$this->model->where('id',$id)->first();
		$editData=$request->all();
		if(Input::hasFile('image'))
		{
			$path = public_path('uploads/banner/images');

			if($data->image!=null)
			{
				$path1 = $path . '/' . $data->image;

				File::delete($path1);
			}

			$directory = $path;
			$fileName = uniqid() . '.' . Input::file('image')->getClientOriginalExtension();
			$fileNameDir = $directory . '/' . $fileName;
			$image = Image::make(Input::file('image'));
			$image->fit(158,224);

			$image->save($fileNameDir, 100);
			$editData['image'] = $fileName;
		}

		if(Input::hasFile('icon'))
		{
			$path = public_path('uploads/banner/icons');

			if($data->icon!=null)
			{
				$path1 = $path . '/' . $data->icon;

				File::delete($path1);
			}

			$directory = $path;
			$fileName = uniqid() . '.' . Input::file('icon')->getClientOriginalExtension();
			$fileNameDir = $directory . '/' . $fileName;
			$image = Image::make(Input::file('icon'));
			$image->fit(158,224);

			$image->save($fileNameDir, 100);
			$editData['icon'] = $fileName;
		}

		if($data->update($editData))
		{
			return redirect($this->redirectUrl)->withErrors(['alert-success'=>'The banner has been successfully updated!']);
		}
		else
		{
			return redirect($this->redirectUrl)->withErrors(['alert-danger'=>'Sorry,the banner couldnot be updated!']);
		}
	}

	public function delete()
	{
		$id=Input::get('id');
		$alldatas=$this->model->where('id',$id)->first();
		if($alldatas!=null)
		{

			if(Input::hasFile('icon'))
			{
				$path = public_path('uploads/banner/icons');

				if($alldatas->icon!=null)
				{
					$path1 = $path . '/' . $alldatas->icon;

					File::delete($path1);
					$allDatas->image="";
					$alldatas->save();
				}
			}
			if(Input::hasFile('image'))
			{
				$path = public_path('uploads/banner/images');

				if($alldatas->image!=null)
				{
					$path1 = $path . '/' . $alldatas->image;

					File::delete($path1);
					$allDatas->icon="";
					$alldatas->save();
				}
			}

				if($alldatas->delete())
				{
					return redirect($this->redirectUrl)->withErrors(['alert-success'=>'The banner has been successfully deleted!']);
				}
				else
				{
					return redirect($this->redirectUrl)->withErrors(['alert-danger'=>'Sorry, the banner couldnot be deleted!']);
				}

			}
			else
			{
				return redirect($this->redirectUrl)->withErrors(['alert-danger'=>'Sorry,data wasnot found!']);
			}
		}

		public function delImage()
		{
			$photo_id=Input::get('id');
			$allDatas=$this->model->where('id',$photo_id)->first();
			$img=$allDatas->image;
			if ($img != '' && file_exists(public_path() . '/uploads/banner/images/' . $img))
			{

				$path = public_path() . '/uploads/banner/images/' . $img;
				File::delete($path);
				$allDatas->image="";
				$allDatas->save();

				return redirect()->back()->withErrors(['alert-success' => 'Image was deleted successfully.']);
			}


			$icon=$allDatas->icon;
			if ($icon != '' && file_exists(public_path() . '/uploads/banner/icons/' . $icon))
			{

				$path = public_path() . '/uploads/banner/icons/' . $icon;
				File::delete($path);
				$allDatas->icon="";
				$allDatas->save();

				return redirect()->back()->withErrors(['alert-success' => 'Icon was deleted successfully.']);
			}


			else {

				return redirect()->back()->withErrors(['alert-danger' => 'The Image Could not be deleted']);
			}


		}
	}
