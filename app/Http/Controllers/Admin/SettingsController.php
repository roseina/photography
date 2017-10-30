<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Setting;
use Input;
use Validator;
use Redirect;
use Auth;
use App\Http\Requests\SettingsRequest;


class SettingsController extends Controller
{
	public function __construct(User $user, Setting $setting)
	{
		$this->model=$user;
		$this->setting=$setting;
	}
	public function webSettings()
	{
		$data = $this->getSettingData();
		return view('Admin.settings.settings', compact('data'));
	}

	public function getSettingData()
	{
		if($this->setting->count()>0){
			$data = $this->setting->first();
		}
		else{
			$data = new \stdClass();
			$data->web_title = "";
			$data->web_tag = "";
			$data->email = "";
			$data->address="";
			$data->phone = "";
			$data->phone1="";
			$data->facebook = "";
			$data->twitter = "";
			$data->instagram = "";
		}
		return $data;
	}

	public function savesettings(SettingsRequest $request)
	{
		if($this->setting->count()>0)
		{
			$datas=$this->setting->first();

			try{
				$input=$request->all();
				$datas->update($input);
				return  Redirect::to('admin/settings/web')->withErrors(['alert-success'=>'Successfully Updated']);
			}
			

			catch(Exception $e)
			{
				return Redirect()->back()->withErrors(['alert-danger'=>$e->message]);
			}
		}
		else
		{
			try
			{
				$input=$request->all();

				$this->setting->saveData($input);
				return Redirect::to('admin/settings/web')->withErrors(['alert-success'=>'The data have been successfully saved!']);
			}

			

			catch(Exception $e)
			{
				return Redirect()->back()->withErrors(['alert-danger'=>$e->message]);
			}

		}

	}

	public function userSettings()
	{
		$data=User::all();
		return view('Admin.settings.user-index',compact('data'));
	}
	public function changePassword()
	{
		$user=User::where('id',1)->first();

		return view('Admin.settings.user-pwd',compact('user'));
	}

	public function updatePassword(Request $request)
	{
		$id=Input::get('id');
		$input=$request->all();
		$oldPass=$request->oldpassword;
		$authpass=Auth::user()->password;
		if (password_verify($oldPass,$authpass))
		{

			$rules =[
			'username'=>'required|regex:/^[\pL\s\-]+$/u|max:10',
			'password'=>'required|min:6',
			'confirmPassword'=>'required|same:password'
			];

			$messages = [
			'username.required'=>'Please provide the username!',
			'username.regex'=>'The username shoulnot contain any special character!',
			'password.required'=>'The password field shouldnot be empty!',
			'confirmPassword.required'=>'please fill the confirm Password field!'
			];
			$validate=Validator::make($input, $rules,$messages);

			if($validate->fails())
			{

				return Redirect()->back()->withErrors($validate)->withInput($request->all());
			}

			else
			{
				$input['password']= bcrypt($request->password);

				if($this->model->updatePassword($id,$input))
				{
					return Redirect::to('admin/settings/user')->withErrors(['alert-success'=>'The password is updated successfully!']);
				}
				else
				{
					return Redirect::to('admin/settings/user')->withErrors(['alert-danger'=>'Sorry, the password couldnot be updated now!']);
				}
			}
		}
		else
		{
			return Redirect()->back()->withErrors(['alert-danger'=>'Your Old Password didnot match with the record.Please give the correct password!']);
		}

	}
	public function forgotpassword()
	{
		return view('auth.passwords.forgetPassword');
	}
	public function getPassword(Request $request)
	{
		$data=User::where('id',1)->first();
		$name=$data->name;
		$username=$data->username;
		$email=$data->email;

		if(strcasecmp($name, $request->name) == 0 && $username==$request->username && $email==$request->email)
		{

			return Redirect::route('password.request');
		}

		else
		{
			return Redirect()->back()->withErrors(['alert-danger'=>'The credentials you provide didnot match the record!']);
		}

	}
}
