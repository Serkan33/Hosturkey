<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MyControllers extends BaseController
{
    public function anasayfa()
    {
        $propert = DB::table('property')
            ->take('12')
            ->get();
        return view('Pages.anasayfa',['propert' => $propert]);
     // return view('Pages.anasayfa');
    }
    public  function property($id){
        $propert = DB::table('property')
            ->where('proprty_id',$id)
            ->get();


        $images = DB::table('properties_details')
            ->where('property_id',$id)
            ->get();
        return view('Pages.properties',['images' => $images,'pro' => $propert]);

    }
    public  function denemee(Request $reguest){

      $large_text=$reguest->input('large-text');
      $location=$reguest->input('location');
      $owner=$reguest->input('owner');
      $price=$reguest->input('price');
      $area=$reguest->input('area');
      $bed=$reguest->input('bed');
      $bath=$reguest->input('bath');
      $fiyat = explode(";",$price);
      $alan= explode(";",$area);
      $sorgu="";
      $kolonlar=["owner LIKE '%".$owner."%' ","bedrooms=".$bed." ","area > ".$alan[0]." and area < ".$alan[1]." ","bathrooms=".$bath." ","price > ".$fiyat[0]." and price < ".$fiyat[1]." "," adress LIKE '%".$location."%' "];

      if ($fiyat[1]==900000) {
          if ($fiyat[0]==50000) {
            $price="";
          }
      }
      if ($alan[1]==500) {
        if ($alan[0]==50) {
            $area="";
        }
      }
        $gelenDeger=[$owner,$bed,$area,$bath,$price,$location];
    for ($i=0; $i < count($gelenDeger) ; $i++) {
          if ($gelenDeger[$i]!="") {
            $sorgu.=$kolonlar[$i]." and ";
          }
    }
      $sorgu = trim(substr($sorgu,0,-4));
      if ($sorgu!="") {
          $propert = DB::select('select * from property where '.$sorgu);

      }
      else {
        $propert = DB::table('property')
            ->get();
      }

        return view('Pages.search_result',['propert'=>$propert]);
    }



    public function listProperty(){
        $propert = DB::table('property')
            ->get();
        return view('Pages.deneme',['propert' => $propert]);
    }
}
