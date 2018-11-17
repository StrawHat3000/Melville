<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use Session;

class SettingsController extends Controller
{

  public function __construct()
  {
    $this->middleware('admin');
  }


    public function index()
    {
      return view('admin.settings.settings')->with('settings', Setting::first());
    }

    public function update()
    {

       $this->validate(request(), [
          'address' => 'required|string',
          'contact_email' => 'required|email',
           'contact_number' => 'required|digits:11',
       ]);


       $settings = Setting::first();



       $settings->address = request()->address;

       $settings->contact_email = request()->contact_email;

       $settings->contact_number = request()->contact_number;

       $settings->save();

       Session::flash('success', 'Settings updated.');

       return redirect()->back();

    }
}
