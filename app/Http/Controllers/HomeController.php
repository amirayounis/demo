<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index($id)
   {
    echo "in Home controller $id";
   }
   public function info(Request $request){

    dd($_REQUEST,
        $request->input("name"),
    $request->all(),
    $request->path(),
    $request->url(),
$request["name"]);
echo "in laravel first time";

}

public function show($name)
{
$data=["name"=>"omar","email"=>"oo.com","id"=>1];


 return view("index",compact("name","data"));
//return view("index",["name"=>$name]);
}
public function landing()
{

 return view("web.index");
}

}
