<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\icon;

class c_icon extends Controller
{
    public function getlist()
    {
    	$icon = icon::all();
    	return view('admin.icon.list',['icon'=>$icon]);
    }

    public function postedit(Request $Request,$id)
    {
        $icon = icon::find($id);
        $icon->name = $Request->name;
        $icon->address = $Request->address;
        $icon->email = $Request->email;
        $icon->hotline = $Request->hotline;
        $icon->hotline1 = $Request->hotline1;
        $icon->facebook = $Request->facebook;
        $icon->google_plus = $Request->google_plus;
        $icon->youtube = $Request->youtube;
        $icon->twitter = $Request->twitter;
        $icon->analytics = $Request->analytics;
        $icon->fb_app_id = $Request->fb_app_id;
        $icon->side_bar = $Request->side_bar;
        $icon->code_header = $Request->code_header;
        $icon->code_body = $Request->code_body;
        $icon->title = $Request->title;
        $icon->description = $Request->description;
        $icon->keywords = $Request->keywords;
        $icon->robot = $Request->robot;
        if($Request->img)
        {
            $icon->img = $Request->img;
        }

        $icon->save();

        return redirect('admin/icon/list')->with('Alerts','Thành công');
    }

    public function getdelete($id)
    {
        $icon = iconcan::find($id);
        $icon->delete();
        return redirect('admin/icon/list/'.$pid)->with('Alerts','Thành công');
    }
}
