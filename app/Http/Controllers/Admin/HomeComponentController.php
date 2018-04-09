<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Homecomponent;
use Image;
use Input;
use File;

class HomeComponentController extends Controller
{
	public function __construct(Homecomponent $home)
	{
		$this->model=$home;
		$this->redirectUrl='admin/homecomponent';
		$this->pathBig = public_path() . '/uploads/homecomponent/images';
	}

	public function index()
	{
		$allDatas=$this->model->all();
		return view('Admin.HomeComponent.index',compact('allDatas'));
	}

	public function create()
	{
		return view('Admin.HomeComponent.create');
	}

	public function store(Request $request)
	{
		$input=$request->all();
		dd($input);
		if(Input::hasFile('featured_image'))
			{
				if (is_dir($this->pathBig) != true) {
					\File::makeDirectory($this->pathBig, $mode = 0777, true);
				}
				$fileName = uniqid() . '.' . Input::file('featured_image')->getClientOriginalExtension();
				$fileNameDir = $this->pathBig . '/' . $fileName;
				$image = Image::make(Input::file('featured_image'));
				$image->fit(1920,750);

				$image->save($fileNameDir, 100);
				$input['featured_image'] = $fileName;
			}

			if($this->model->create($input))
			{
				return redirect($this->redirectUrl)->withErrors(['alert-success'=>'The component  has been successfully added!']);
			}
			else
			{
				return redirect($this->redirectUrl)->withErrors(['alert-danger'=>'Sorry,the component couldnot be added now!']);
			}
		}

		public function edit()
		{
			$id=Input::get('id');
			$data=$this->model->where('id',$id)->first();
			if($data!=null)
			{
				return view('Admin.HomeComponent.edit', compact('data'));
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
									return redirect($this->redirectUrl)->withErrors(['alert-success'=>'The component has been successfully deleted!']);
								}
								else
								{
									return redirect($this->redirectUrl)->withErrors(['alert-danger'=>'Sorry, the component couldnot be deleted!']);
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
							$img=$allDatas->featured_image;
							if ($img != '' && file_exists(public_path() . '/uploads/homecomponent/images/' . $img))
							{

								$path = public_path() . '/uploads/homecomponent/images/' . $img;
								File::delete($path);
								$allDatas->featured_image="";
								$allDatas->save();

								return redirect()->back()->withErrors(['alert-success' => 'Image was deleted successfully!']);
							}

							else
							{
								return redirect()->back()->withErrors(['alert-danger' => 'Sorry, the image couldnot be deleted!']);
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
								return redirect($this->redirectUrl)->withErrors(['alert-danger'=>'Sorry the status cannot be changed now']);
							}




						}


					}
