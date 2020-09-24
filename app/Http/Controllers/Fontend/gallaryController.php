<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\menu;
use App\Model\Slider;
use App\Model\album;
use App\Model\gallary;
use DB;

class gallaryController extends Controller
{
    public function photoGallary()
    {
        $allalbum = album::all();
       // dd('ok');
        return view('Fontend.pages.gallary', compact('allalbum'));
    }

    public function ViewGallary($id)
    {
        $allalbum = album::all();
        $allGallery = DB::table('gallaries')
        ->join('albums', 'gallaries.album_id', '=', 'albums.id')
        ->where('albums.id', '=', $id)
        ->get();
        if (count($allGallery) > 0){
            return view('Fontend.pages.viewGallary', compact('allGallery'));
            
        }else{
            return view('Fontend.pages.gallary', compact('allalbum'));
        }
          

        }

  
    
}
