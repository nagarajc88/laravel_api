<?php

namespace App\Http\Controllers\Frontend\Details;
use Illuminate\Http\Request;
use App\Http\Controllers\Frontend\Controller;
use App\Models\Frontend\Products\Product;
class DetailsController extends Controller
{

    //load cart page frontend
    public function manageDetails()
    {
      return view('frontend.details.details');
    }
}