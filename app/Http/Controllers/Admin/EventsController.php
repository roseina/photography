<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Event;
use Image;
use File;
use Input;
use Redirect;

class EventsController extends Controller
{
     public function __construct(Event $event)
    {
        $this->model=$event;
        $this->redirectUrl='admin/event';

    }
    public function index()
    {
        $allDatas=$this->model->all();
    	return view('Admin.Events.index',compact('allDatas'));

    }

    public function create()
    {
    	return view('Admin.Events.create');
    }

    public function store(Request $request)
    {
    	$input=$request->all();
        if(Input::hasFile('event_image'))
        {

            $directory = public_path() . '/uploads/events/images';
            $fileName = uniqid() . '.' . Input::file('event_image')->getClientOriginalExtension();
            $fileNameDir = $directory . '/' . $fileName;
            $image = Image::make(Input::file('event_image'));
            $image->fit(158,224);

            $image->save($fileNameDir, 100);
            $input['event_image'] = $fileName;
        }

        
        if($this->model->create($input))
        {
            return redirect($this->redirectUrl)->withErrors(['alert-success'=>'The event has been successfully added!']);
        }
        else
        {
            return redirect($this->redirectUrl)->withErrors(['alert-danger'=>'Sorry,the event couldnot be added now!']);
        }
    }
    public function edit()
    {
        $id=Input::get('id');
        $data=$this->model->where('id',$id)->first();
        if($data!=null)
        {
            return view('Admin.Events.edit', compact('data'));
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
        if(Input::hasFile('event_image'))
        {
            $path = public_path('uploads/events/images');

            if($data->event_image!=null)
            {
                $path1 = $path . '/' . $data->event_image;

                File::delete($path1);
            }

            $directory = $path;
            $fileName = uniqid() . '.' . Input::file('event_image')->getClientOriginalExtension();
            $fileNameDir = $directory . '/' . $fileName;
            $image = Image::make(Input::file('event_image'));
            $image->fit(158,224);

            $image->save($fileNameDir, 100);
            $editData['event_image'] = $fileName;
        }

        if($data->update($editData))
        {
            return redirect($this->redirectUrl)->withErrors(['alert-success'=>'The event has been successfully updated!']);
        }
        else
        {
            return redirect($this->redirectUrl)->withErrors(['alert-danger'=>'Sorry,the event couldnot be updated!']);
        }
    }

    public function delete()
    {
        $id=Input::get('id');
        $alldatas=$this->model->where('id',$id)->first();
        if($alldatas!=null)
        {

            if(Input::hasFile('event_image'))
            {
                $path = public_path('uploads/events/images');

                if($alldatas->banner_image!=null)
                {
                    $path1 = $path . '/' . $alldatas->event_image;

                    File::delete($path1);
                    $allDatas->event_image="";
                    $alldatas->save();
                }
            }
           
                if($alldatas->delete())
                {
                    return redirect($this->redirectUrl)->withErrors(['alert-success'=>'The event has been successfully deleted!']);
                }
                else
                {
                    return redirect($this->redirectUrl)->withErrors(['alert-danger'=>'Sorry, the event couldnot be deleted!']);
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
            $img=$allDatas->event_image;
            if ($img != '' && file_exists(public_path() . '/uploads/events/images/' . $img))
            {

                $path = public_path() . '/uploads/events/images/' . $img;
                File::delete($path);
                $allDatas->event_image="";
                $allDatas->save();

                return redirect()->back()->withErrors(['alert-success' => 'Image was deleted successfully.']);
            }

            else {

                return redirect()->back()->withErrors(['alert-danger' => 'The Image Could not be deleted']);
            }


        }

}
