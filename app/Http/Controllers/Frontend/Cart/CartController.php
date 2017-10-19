<?php

namespace App\Http\Controllers\Frontend\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Frontend\Controller;
use App\Models\Frontend\Products\Product;
class CartController extends Controller
{

    //load cart page frontend
    public function manageHome()
    {
      return view('frontend.home.manage-home');
    }
}