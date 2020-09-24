<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\menu;
use App\Model\Slider;
use App\Model\notice;
use App\Model\branch;
use App\Model\gallary;
use App\Model\newsEvent;

use \GuzzleHttp\Client;
use Illuminate\Support\Facedes\Response;
use Image;

class aboutController extends Controller
{


    public function index()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $allMenus = menu::all();
        $slider = Slider::all();
        $allNotice = notice::all();
        $branch = branch::all();
        $photo= gallary::orderBy('id', 'DESC')->limit(4)->get();
        $event= newsEvent::where('is_big', '=', 1)->get();
        $news= newsEvent::where('is_big', '=', 0)->limit(3)->get();
        return view('Fontend.Layout.home', compact('menus','allMenus','slider', 'allNotice','branch','photo', 'event','news'));
    }

    public function mainPatron()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 1)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.mainPatron', compact('menus','allMenus', 'submenu'));
    }


    public function chairmanspeech()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 1)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.chairmanspeech', compact('menus','allMenus', 'submenu'));
    }

    public function principlespeech()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 1)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.principlespeech', compact('menus','allMenus', 'submenu'));
    }

    public function history()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 1)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.history', compact('menus','allMenus', 'submenu'));
    }

    public function missionVission()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 1)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.missionVission', compact('menus','allMenus', 'submenu'));
    }

    public function governingbody()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 1)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.governingbody', compact('menus','allMenus', 'submenu'));
    }


    public function teacherInformation()

    {

        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 1)->get();
        $allMenus = menu::all();
        $client = new   Client();
        $request = $client->request('POST', 'http://asc.oemsbd.com:2018/Employee/EmployeeInformation', [

            'form_params' => [
            'PageSize' => 0,
            'PageNo'  => 0,
            'Key' => 'ZAQwsxCDErfvBGTyhnMJUik3z2x1c4v5MKO9RTYU85EFGH56kjhgfNKPOI965POkjuiPI'
            ]

        ]);

       $empData = json_decode($request->getBody(), true);
    //    $response = Response::make($EmpImage->encode('jpeg'));
    //    $response->header('Content-Type', 'image/jpeg');
       return view('Fontend.pages.teacherInformation', compact('empData','menus','allMenus', 'submenu'));
    }


    public function youtube()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        // $submenu = menu::where('ParentId', '=', 1)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.youtube', compact('menus','allMenus', 'submenu'));
    }


    //branch Details

    public function branchDetails($id)
    {
        $branchdetail = branch::find($id);
        return view('Fontend.pages.branchDetail', compact('branchdetail'));
    }


    //NewsEvent Details

    public function detailsEvent($id)
    {
        $newsEvent = newsEvent::find($id);
        return view('Fontend.pages.detailsNews', compact('newsEvent'));
    }

}
