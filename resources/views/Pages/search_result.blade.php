@extends('MasterBlade.master')

@section('title',"Search Result")
@section('impor')

<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style-list.css">
<link rel="stylesheet" href="css/jslider.css" type="text/css">
<link rel="stylesheet" href="css/jslider.blue.css" type="text/css">
<link rel="stylesheet" href="css/jslider.plastic.css" type="text/css">
<link rel="stylesheet" href="css/jslider.round.css" type="text/css">
<link rel="stylesheet" href="css/jslider.round.plastic.css" type="text/css">
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="js/jshashtable-2.1_src.js"></script>
<script type="text/javascript" src="js/jquery.numberformatter-1.2.3.js"></script>
<script type="text/javascript" src="js/tmpl.js"></script>
<script type="text/javascript" src="js/jquery.dependClass-0.1.js"></script>
<script type="text/javascript" src="js/draggable-0.1.js"></script>
<script type="text/javascript" src="js/jquery.slider.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  $('.grid-gorunum').fadeOut();
    $(".grid-btn").click(function(){
        $('.list-gorunum').fadeOut();
      $('.grid-gorunum').fadeIn();
    });
    $(".list-btn").click(function(){
        $('.grid-gorunum').fadeOut();
      $('.list-gorunum').fadeIn();
    });
});
</script>
@endsection

@section('content')
<div class="container-fluid " style="background: #fff;width: 100%:border-bottom:solid 1px #153f4c;-webkit-box-shadow: -1px 5px 24px -9px rgba(0,0,0,0.41);
-moz-box-shadow: -1px 5px 24px -9px rgba(0,0,0,0.41);
box-shadow: -1px 5px 24px -9px rgba(0,0,0,0.41);">
@include('MasterBlade.nav')
 </div>



<div style="background:#f8fdff;border:solid 1px #ddd;margin:10px 0">

  <div class="container search_box1" style="margin-top:0;padding-top:0;">
    <form  role="form" method="POST" action="{{ url('search') }}">
                   {{ csrf_field() }}
    <div class="container search_box ">
   <div class="input-group">
     <div class="input-group-btn search-panel">
           <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="min-height: 50px">
               <span id="search_concept">Filter by</span> <span class="caret"></span>
           </button>
           <ul class="dropdown-menu" role="menu">
               <li><a href="">For Sale</a></li>
               <li><a href="">For Rent</a></li>
           </ul>
       </div>
       <input type="hidden" name="search_param" value="all" id="search_param">
       <input type="text" class="form-control fo " id="formGroupExampleInput" style="min-height: 50px" placeholder="Enter any Neighorhood, Feature, Zip Code" name="large-text" >
       <span class="input-group-btn hidden-xs">
           <button class="btn btn-default" type="submit" style="min-height: 50px"><span class="glyphicon glyphicon-search" ></span></button>
       </span>

   </div>

   <div class="search__advanced " id="search_advanced">

       <div class="row">

           <div class="col-md-6 ">
               <div class="form-group form-group--float form-group--active">
                   <h4 class="h4"><small>Location</small></h4>
                   <input type="text" class="txtHighLight" placeholder="Enter Location" name="location" >
                   <span class="highlight"></span>
                   <span class="bar"></span>
                   <i class="form-group__bar"></i>
               </div>
           </div>
           <div class="col-md-6 ">

               <h4 class="h4"><small>Ownership Type</small></h4>

                   <select class="cs-select cs-skin-underline" name="owner">
                       <option value="">Select Ownership Type </option>
                       <option value="Single Family Home">Single Family Home</option>
                       <option value="Condo">Condo</option>
                       <option value="Townhome">Townhome</option>
                       <option value="Apartment Comunity">Apartment Comunity</option>

                   </select>
               <script src="js/classie.js"></script>
               <script src="js/selectFx.js"></script>
               <script>
                   (function() {
                       [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
                           new SelectFx(el);
                       } );
                   })();
               </script>

           </div>
       </div>
       <div class="row">
           <div class="col-md-6 ">
               <h4 class="h4"><small>Range Price</small></h4>
               <div class="layout-slider">
                   <input id="Slider2" type="slider" name="price" value="50000;900000" />
               </div>
               <script type="text/javascript" charset="utf-8">
                   jQuery("#Slider2").slider({ from: 50000, to: 900000,  step: 1, dimension: '&nbsp; $', skin: "round_plastic" });
               </script>
           </div>
           <div class="col-md-6 ">
               <h4 class="h4"><small>Area Size</small></h4>
               <div class="layout-slider">
                   <input id="Slider3" type="slider" name="area" value="50;500" />
               </div>
               <script type="text/javascript" charset="utf-8">
                   jQuery("#Slider3").slider({ from: 50, to: 500, limits: false, step: 1, dimension: '&nbsp;m<small>2</small>', skin: "round_plastic" });
               </script>

           </div>
       </div>
       <div class="row">
           <div class="col-md-6 ">
               <h4 class="h4"><small>Bedroom</small></h4>
                   <div class="form-group">


                       <div class="input-group">
                           <div class="btn-group radio-group">
                               <label class="btn btn-primary not-active">1 <input type="radio" value="1" name="bed"></label>
                               <label class="btn btn-primary not-active">2 <input type="radio" value="2" name="bed"></label>
                                   <label class="btn btn-primary not-active">3 <input type="radio" value="3" name="bed"></label>
                                   <label class="btn btn-primary not-active">4+ <input type="radio" value="4" name="bed"></label>
                           </div>
                       </div>
                       </div>
           </div>
           <div class="col-md-6 ">
               <h4 class="h4"><small>Bathroom</small></h4>

                   <div class="form-group">


                       <div class="input-group">
                           <div class="btn-group radio-group">
                               <label class="btn btn-primary not-active">1 <input type="radio" value="1" name="bath"></label>
                               <label class="btn btn-primary not-active">2 <input type="radio" value="2" name="bath"></label>
                               <label class="btn btn-primary not-active">3 <input type="radio" value="3" name="bath"></label>
                               <label class="btn btn-primary not-active">4+ <input type="radio" value="4" name="bath"></label>
                           </div>
                       </div>
                   </div>


           </div>
       </div>
       <div class="row">
           <div class="col-md-6">

               <button type="submit" class="btn btn-primary">
                   <span class="glyphicon glyphicon-search"></span> Search
               </button>

               <button type="button" class="btn btn-danger" id="cancel">
                   <span class="glyphicon glyphicon-remove"></span> Cancel
               </button>
           </div>
       </div>
           </form>
   </div>

  </div>
  </div>
</div>





<?php if (count($propert)>0) { ?>

<div class="container-fluid list-gorunum" >
 <div class="row arama">

 <div class="container ">
      @foreach($propert as $p)
      <a href="property={{$p->proprty_id}}">
          <div class="row link">

            <div class="col-md-3" >
              <span  class="thumbnail">
                <img src="{{$p->image}}" alt="">
              </span>
            </div>
            <div class="col-md-6 col-xs-6">
              <h4 style="">{{$p->subtitle}}</h4>
            </div>
            <div class="col-md-2 col-xs-6">
              <?php

                  $degisken=$p->price;

                         if ($degisken%1000!=0)
                             $degisken=$degisken/1000;

                          else
                              $degisken=($degisken/1000).".000";

              ?>
              <h4><strong style="">{{$degisken}} $</strong></h4>
            </div>
              <div class="col-md-9">
                <h3 class="h4" >{{$p->adress}}</h3>
              </div>
            <div class="col-md-2 col-xs-5" >
              <span class="fa fa-bed"  > {{$p->bedrooms}}</span>
            </div>
            <div class="col-md-2 col-xs-5" >
              <span class="fa fa-car"  > {{$p->bathrooms}}</span>
            </div>
            <div class="col-md-2 col-xs-5" >
              <span class="fa fa-home"  >{{$p->area}} m2</span>
            </div>
            <div class="col-md-2 col-xs-6"  >
              <?php
                 $date = new DateTime($p->property_date);?>

             <span class="fa fa-calendar" > <?php   echo $date->format('d.m.Y ');
               ?> </span>
            </div>
            <div class="col-md-1 col-xs-1" >
             <span class="fa fa-heart hidden-xs " style=""></span>
            </div>
          </div>
          </a>

   @endforeach
     <div class="w3-center">
       <ul class="pagination ">
         <li><a href="#">1</a></li>
         <li><a href="#">2</a></li>
         <li><a href="#">3</a></li>
         <li><a href="#">4</a></li>
         <li><a href="#">5</a></li>
       </ul>
     </div>
 </div>

 </div>

</div>


<div class="container-fluid grid-gorunum">
       <div class="row text-center">
           <h2 class="h2">Properties</h2>
       </div>
       <div class="container property-container">
               <div class="row">
                    @foreach($propert as $p)
                       <div class="col-sm-4 col-md-3 ">
                           <div class="thumbnail golge">
                               <a href="property={{$p->proprty_id}}">
                                   <img class="img-responsive " src={{$p->image}} >
                                   <div class="col-md-12">
                                       <div class="fiyat"> 325,47 $</div>
                                   </div>
                               </a>
                               <div class="caption">
                                   <h1 class="h4"> Adres </h1>
                                   <h4 class="h5"> Sub Title </h4>

                               </div>
                               <ul class="list-inline" style="margin: 0">
                                   <li> <i class="fa fa-bed" aria-hidden="true"> 01 </i></li>
                                   <li><i class="fa fa-bath" aria-hidden="true"> 02 </i></li>
                                   <li> <i class="fa fa-car" aria-hidden="true"> 03 </i></li>

                                   <li style="float: right">
                                       <i class="fa fa-heart" aria-hidden="true" style="cursor: pointer;" ></i>
                                   </li>
                               </ul>
                           </div>
                       </div>
                          @endforeach

               </div>
           </div>
   </div>
   <?php }
      else {
        echo ' <div class="container">
                <div class="alert alert-danger text-center" style="font-size:25px;padding:30px;margin:30px 0  " role="alert">
  <strong>No matches found  !!!</strong>
</div></div>';
      }
   ?>
   @endsection
