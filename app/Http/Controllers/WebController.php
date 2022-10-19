<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class WebController extends Controller
{
   public function products()
   {
    $user=auth()->user();
    if(!isset($user)){
      return abort(404);
    }
    $data=Item ::all();
    return view("web.jewellery",compact("data"));
   }

   public function landing()
   {
    return view("web.index");
   }
}
