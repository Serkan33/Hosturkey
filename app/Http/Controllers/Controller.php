<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
/*
    public function postContact(Request $req){
     $data=array(
          'name'=>$req->input('name'),
            'mobil'=>$req->input('mobil'),
         'email'=>$req->input('email'),
         'subject'=>$req->input('subject'),
         'bodymessage'=>$req->input('message'),
         'ev_id'=>$req->input('ev_id')
     );
     Mail::send('emails.contact',$data,function ($message) use ($data){
             $message->from('info@hosturkey.com');
             $message->to('info@hosturkey.com');
             $message->subject('Hosturkey Ev Posta');
     });

     return redirect()->back();
      echo "<script>alert('Mesajiniz Gonderilmistir')</script>";

 }*/
}
