<?php

  if($_POST){

    $name    = strip_tags($_POST['name']);
    $email   = strip_tags($_POST['email']);
    $mobil   = strip_tags($_POST['mobil']);
    $message = strip_tags($_POST['message']);
    $id      =  $_POST['ev_id'];
    $icerik  = 'İsim: ' .$name. '<br/>E-Mail: ' .$email. '<br/>Mesaj:'. $message. '<br/>Mobil: ' .$mobil.'<br/><a href="property='.$id.'">İlgilendiğim Ev</a>';

     $subject="Konu";

    if(mail("tasserkan93@gmail.com",$subject,$icerik)){
      echo "<script> alert('Mesajiniz Gonderilmistir');</script>";
    }
}


 ?>
