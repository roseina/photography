<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Page;
use Image;
use File;
use Input;

class PagesController extends Controller
{

    public function __construct(Page $page)
    {
        $this->model=$page;
        $this->redirectUrl='admin/pages';

    }
    public function index()
    {
        $allDatas=$this->model->all();
        return view('Admin.Pages.index', compact('allDatas'));

    }

    public function create()
    {
    	return view('Admin.Pages.create');
    }

    public function store(Request $request)
    {
    	$input=$request->all();
        if(Input::hasFile('image'))
        {

            $directory = public_path() . '/uploads/pages/images';
            $fileName = uniqid() . '.' . Input::file('image')->getClientOriginalExtension();
            $fileNameDir = $directory . '/' . $fileName;
            $image = Image::make(Input::file('image'));
            $image->fit(158,224);

            $image->save($fileNameDir, 100);
            $input['image'] = $fileName;
        }

        if(Input::hasFile('banner_image'))
        {

            $directory = public_path() . '/uploads/pages/banner';
            $fileName = uniqid() . '.' . Input::file('banner_image')->getClientOriginalExtension();
            $fileNameDir = $directory . '/' . $fileName;
            $image = Image::make(Input::file('banner_image'));
            $image->fit(158,224);

            $image->save($fileNameDir, 100);
            $input['banner_image'] = $fileName;
        }
        if($this->model->create($input))
        {
            return redirect($this->redirectUrl)->withErrors(['alert-success'=>'The page has been successfully added!']);
        }
        else
        {
            return redirect($this->redirectUrl)->withErrors(['alert-danger'=>'Sorry,the page couldnot be added now!']);
        }
    }
    public function edit()
    {
        $id=Input::get('id');
        $data=$this->model->where('id',$id)->first();
        if($data!=null)
        {
            return view('Admin.Pages.edit', compact('data'));
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
        $path = public_path('/uploads/pages/images');

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

    

    if(Input::hasFile('banner_image'))
    {
        $path = public_path('/uploads/pages/banner');

        if($data->banner_image!=null)
        {
            $path1 = $path . '/' . $data->banner_image;

            File::delete($path1);
        }

        $directory = $path;
        $fileName = uniqid() . '.' . Input::file('banner_image')->getClientOriginalExtension();
        $fileNameDir = $directory . '/' . $fileName;
        $image = Image::make(Input::file('banner_image'));
        $image->fit(158,224);

        $image->save($fileNameDir, 100);
        $editData['banner_image'] = $fileName;
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

        if(Input::hasFile('banner_image'))
        {
            $path = public_path('uploads/pages/banner');

            if($alldatas->banner_image!=null)
            {
                $path1 = $path . '/' . $alldatas->banner_image;

                File::delete($path1);
                $allDatas->banner_image="";
                $alldatas->save();
            }
        }
        if(Input::hasFile('image'))
        {
            $path = public_path('uploads/pages/images');

            if($alldatas->image!=null)
            {
                $path1 = $path . '/' . $alldatas->image;

                File::delete($path1);
                $allDatas->image="";
                $alldatas->save();
            }
        }

        if($alldatas->delete())
        {
            return redirect($this->redirectUrl)->withErrors(['alert-success'=>'The page has been successfully deleted!']);
        }
        else
        {
            return redirect($this->redirectUrl)->withErrors(['alert-danger'=>'Sorry, the page couldnot be deleted!']);
        }

    }
    else
    {
        return redirect($this->redirectUrl)->withErrors(['alert-danger'=>'Sorry,data wasnot found!']);
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

public function delImage()
{
    $photo_id=Input::get('id');
    $allDatas=$this->model->where('id',$photo_id)->first();
    $img=$allDatas->image;
    if ($img != '' && file_exists(public_path() . '/uploads/pages/images/' . $img))
    {

        $path = public_path() . '/uploads/pages/images/' . $img;
        File::delete($path);
        $allDatas->image="";
        $allDatas->save();

        return redirect()->back()->withErrors(['alert-success' => 'Image was deleted successfully.']);
    }


    $banner_image=$allDatas->banner_image;
    if ($banner_image != '' && file_exists(public_path() . '/uploads/pages/banner/' . $banner_image))
    {

        $path = public_path() . '/uploads/pages/banner/' . $banner_image;
        File::delete($path);
        $allDatas->banner_image="";
        $allDatas->save();

        return redirect()->back()->withErrors(['alert-success' => 'Banner image was deleted successfully.']);
    }


    else {

        return redirect()->back()->withErrors(['alert-danger' => 'The Image Could not be deleted']);
    }


}



}

