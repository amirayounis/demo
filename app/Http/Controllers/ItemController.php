<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{

public function create()
{
    return view("dashboard.items.addform");
}

public function store(Request $request)
{
  // dd($request->img->getClientOriginalName());
//    store
$request->img->storeAs("public/imgs",$request->img->getClientOriginalName());
$imgname=$request->img->getClientOriginalName() ;
Item::create(['name'=>$request["name"],
   'price'=>$request["price"],
   'img'=>$imgname,'desc'=>$request["desc"]]);
   return redirect("allitems");
}
 public function index()
 {
    $items=Item::all();
   return view("dashboard.items.index",compact("items"));
 }

 public function delete(Item $id)
 {
 //dd($id);
 $id->delete();
 return redirect("allitems");
 }
//  public function delete($id)
//  {
//  $x=Item ::find($id);
//  dd($x);
//  }
 public function edit(Item $id)
 {

  return view("dashboard.items.editform",["data"=>$id]);
 }

 public function update(Item $id,Request $request)
 {
    $request->img->storeAs("public/imgs",$request->img->getClientOriginalName());
    $imgname=$request->img->getClientOriginalName() ;
   $id->update(['name'=>$request["name"],
   'price'=>$request["price"],
   'img'=>$imgname,'desc'=>$request["desc"]]) ;

  return redirect("allitems");
 }

}
