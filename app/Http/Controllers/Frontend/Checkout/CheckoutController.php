<?php

namespace App\Http\Controllers\Frontend\Checkout;
use Illuminate\Http\Request;
use App\Http\Controllers\Frontend\Controller;
use App\Models\Frontend\Products\Product;
class CheckoutController extends Controller
{

    //load cart page frontend
    public function manageCheckout()
    {
      return view('frontend.checkout.checkout');
    }
}