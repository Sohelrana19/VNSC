<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Illuminate\Support\Str;
use App\Model\album;
use DB;

class albumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function albumView()
    {
        $data['allData'] = album::all();
        return view('Backend.album', $data);
    }

    public function albumStore(Request $request)
    {

        $data = new album();

        $data->albumName =$request->albumName;
        //$data->description =$request->description;
        // $data->created_by = Auth::user()->id;

        if ($request->file('albumImage')) {
            $image = $request->file('albumImage');
            $image_name= Str::random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/upload/album/';
            $image_url=$upload_path.$image_full_name;
            $image->move($upload_path,$image_full_name);
            $data['albumImage']=$image_url;
        }

        $data->save();

        return redirect()->route('album.view');


    }
        public function albumedit($id)
    {
        $editData= album::find($id);

        return view('Backend.editAlbum', compact('editData'));
    }

    public function albumupdate( Request $request, $id)
    {
    	$data = album::find($id);

        $data->albumName =$request->albumName;

    	if ($request->file('albumImage')) {
            $image = $request->file('albumImage');
            @unlink(public_path('public/upload/album/'.$data->image));
            $image_name= Str::random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/upload/album/';
            $image_url=$upload_path.$image_full_name;
            $image->move($upload_path,$image_full_name);
            $data['albumImage']=$image_url;
        }

        $user=$data->save();
    	if ($user) {
                $notification=array(
                'messege'=>'Employee Update Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->route('album.view')->with($notification);
            }else{
              return Redirect()->back();
             }
    }

    public function albumdelet($id)
    {
        $user= album::find($id);

        $user->delete();
        return redirect()->route('album.view')->with('success', 'Data Delete Successfully');

    }
}
