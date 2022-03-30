<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
       return view('index');
   }

   public function men()
   {
       return view('men');
   }
   public function women()
   {
       return view('women');
   }
   public function about()
   {
       return view('about');
   }
   public function contact()
   {
       return view('contact');
   }
   public function cart()
   {
       return view('cart');
   }
   public function productDetails()
   {
       return view('product-details');
   }
   public function checkOut()
   {
       return view('checkout');
   }
   public function complete()
   {
       return view('order-complete');
   }
}
