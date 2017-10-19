<?php

namespace App\Http\Controllers\Frontend\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Frontend\Controller;
use App\Models\Frontend\Home\Banner;
class BannersController extends Controller
{

     //Get banner images
    public function index()
    {
        $banners = Banner::all()->take(3);
         return response()->json($banners);    
    } 
   
}