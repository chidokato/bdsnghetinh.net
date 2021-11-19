<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\video;

class c_video extends Controller
{
    public function getlist()
    {
        $video = video::orderBy('id','desc')->get();
    	return view('admin.video.list',[
            'video'=>$video
        ]);
    }

    public function getadd()
    {
    	return view('admin.video.add');
    }

    public function postadd(Request $Request)
    {
    	$video = new video;
        $video->name = $Request->name;
        $video->video = $Request->video;
        $video->note = $Request->note;
        
        $video->save();

        return redirect('admin/video/list')->with('Alerts','Thành công');

    }

    public function getedit($id)
    {
        $video = video::findOrFail($id)->toArray();
    	return view('admin.video.edit',['video'=>$video]);
    }

    public function postedit(Request $Request,$id)
    {
        $video = video::find($id);
        $video->name = $Request->name;
        $video->video = $Request->video;
        $video->note = $Request->note;
        
        $video->save();

        return redirect('admin/video/list')->with('Alerts','Thành công');
    }

    public function getdelete($id)
    {
        $video = video::find($id);
        $video->delete();

        return redirect('admin/video/list')->with('Alerts','Thành công');
    }
}