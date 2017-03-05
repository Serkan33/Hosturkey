@extends('MasterBlade.master')
@section('title','Property')
@section('impor')
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link href="lightGallery-master/dist/css/lightgallery.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
    <script src="js/lightgallery.js"></script>
    <script src="js/lg-fullscreen.js"></script>
    <script src="js/lg-thumbnail.js"></script>
    <script src="js/lg-video.js"></script>
    <script src="js/lg-autoplay.js"></script>
    <script src="js/lg-zoom.js"></script>
    <script src="js/lg-hash.js"></script>
    <script src="js/lg-pager.js"></script>
    <script src="lightGallery-master/lib/jquery.mousewheel.min.js"></script>
@endsection
@section('content')
    <div class="container-fluid " style="background: #fff;width: 100%:border-bottom:solid 1px #153f4c;-webkit-box-shadow: -1px 5px 24px -9px rgba(0,0,0,0.41);
-moz-box-shadow: -1px 5px 24px -9px rgba(0,0,0,0.41);
box-shadow: -1px 5px 24px -9px rgba(0,0,0,0.41);">
    @include('MasterBlade.nav')
     </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#lightgallery').lightGallery();
        });
    </script>
    <?php
         $sayac=0;
    ?>



    <div class="container-fluid" style="padding: 20px;">
        <div class="row ">
            <div class="col-sm-8"  >
                @foreach($pro as $pr)
                <?php $ev_id=$pr->proprty_id ?>




                <div class=" col-padded1" style="background:transparent;padding:0px 15px;border:none">
                    <ul id="lightgallery" class="list-unstyled row">
                        @foreach($images as $img)
                        <li   data-src="/{{$img->image}}" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                            <a href="">
                                <img  @if($sayac==0) class="img-responsive " {{$sayac=1}} @else class="img-responsive hidden"  @endif src="/{{$img->image}}"/>
                            </a>
                        </li>
                       @endforeach
                    </ul>
                    <?php
                      $degisken=$pr->price;

                      if ($degisken%1000!=0)
                          $degisken=$degisken/1000;

                      else
                          $degisken=($degisken/1000).".000";
                      ?>

                  </div>
                  <div class="col-padded1">

                    <div class="col-lg-6 col-md-6 col-xs-6" style="padding-left:0">
                        <strong>{{$degisken}} $</strong>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-6">
                      <div class=" detail-info">For Sale</div>
                    </div>


                    <div class="row">
                        </br>
                        <div class="col-sm-6" >
                            <table class="table table-striped">
                                <tbody>
                                <tr>
                                    <td ><strong>Ownership Type</strong> </td>
                                    <td ><small>{{$pr->owner}}</small></td>
                                </tr>
                                <tr>
                                    <td><strong>Garages</strong> </td>
                                    <td><small> {{$pr->garages}}</small></td>
                                </tr>
                                <tr>
                                    <td><strong>Bedrooms</strong> </td>
                                    <td><small>{{$pr->bedrooms}}</small></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-6" >
                            <table class="table table-striped">
                                <tbody>
                                <tr>
                                    <td><strong>Property Area(m2)</strong> </td>
                                    <td><small>{{$pr->area}} m2 </small></td>
                                </tr>
                                <tr>
                                    <td><strong>Floors</strong> </td>
                                    <td><small>{{$pr->floors}}</small></td>
                                </tr>
                                <tr>
                                    <td><strong>Bathrooms</strong> </td>
                                    <td><small>{{$pr->bathrooms}}</small></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                @endforeach
                <div class="row-edge col-padded1">
                    <h5><strong>Amenities</strong></h5>
                    <div class="btn btn-default">RIVER VIEWS</div>
                    <div class="btn btn-primary">FULL-TIME DOORMAN</div>
                    <button type="button" class="btn btn-success">COMMON ROOF DECK</button>
                    <button type="button" class="btn btn-info">CITY VIEWS</button>
                    <button type="button" class="btn btn-warning">GYM</button>
                    <button type="button" class="btn btn-danger ">SAUNA</button>
                </div>


                <div class="row-edge  col-padded1">
                    <h5><strong>Property Overview</strong></h5>
                    <p>{{$pr->overview}}</p>

                </div>


                <div class="row-edge  col-padded1" style="padding: 0">
                  <div class="property-header" style="border:solid 1px #ddd;padding-left:35px">
                    <h4 class="h4"><strong>Property Location</strong></h5>
                  </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3190.0734892114483!2d31.090015314878002!3d36.912507269070254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c36295bc9499a3%3A0x1b803a39ca379bca!2zU2VyaWsgw5bEn3JldG1lbmV2aQ!5e0!3m2!1str!2str!4v1486403328309" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen></iframe>
                </div>

            </div>
            <div class="col-sm-4" >
                <div class=" col-padded2" id="panel">
                  <center><strong class="text-center">Inquire this Proeprty</strong><br/><center>
                  <center><small>Call us now or send us your information</small></center>
                  <center><a href="tel://+90-532-605-9060" class="btn btn-danger" style="width:80%;"> <span class="glyphicon glyphicon-earphone"></span> +90-532-605-9060</a></center>
                  <br/>
                  <form method="post" action="{{url('contact')}}">
                     {{csrf_field()}}

                     <div class="group">
                        <input class="txtHighLight" type="text" name="name" required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label class="txtLabel"><strong>Name</strong></label>
                      </div>

                    <div class="group">
                      <input class="txtHighLight" type="text" name="email" required>
                      <span class="highlight"></span>
                      <span class="bar"></span>
                      <label class="txtLabel"><strong>Email</strong></label>
                  </div>

                  <div class="group">
                    <input class="txtHighLight" type="text" name="mobil" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label class="txtLabel"><strong>Mobile No</strong></label>
                  </div>

                  <div class="group">
                    <input class="txtHighLight" type="text" name="message" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label class="txtLabel"><strong>Message</strong></label>
                    <input type="hidden" name="ev_id" value="{{$ev_id}}">
                  </div>
       <div class="group">
           <center> <button type="submit" class="btn btn-info">Send <span class="glyphicon glyphicon-send"></span></button></center>
   </form>

</div>
                </div>

                <div class=" col-padded2 row-edge">
                    <strong>Others</strong><br/>

                    <div class="row">
                        <a href="">
                            <div class="col-md-4" >
                                <img class="img-responsive " src="img/thumb-1.jpg"/>
                            </div>
                            <div class="col-md-8" >
                                <strong>Fusce dapibus tell ...</strong>
                                <small>$910,300 . 03 Beds . 02 Baths</small>
                            </div>
                        </a>
                    </div>


                </div>
            </div>
        </div>

    </div>
@endsection
