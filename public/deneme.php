<html>
    <head>

    </head>

    <body>
  <?php
  error_reporting(0);
            $large_text=$_POST['large-text'];
            $location=$_POST['location'];
            $owner=$_POST['owner'];
            $price=$_POST['price'];
            $area=$_POST['area'];
            $bed=$_POST['bed'];
            $bath=$_POST['bath'];
            $fiyat = explode(";",$price);
            $alan= explode(";",$area);
            $sorgu="SELECT * FROM property WHERE ";
            $kolonlar=["owner LIKE '%".$owner."%' ","bedrooms=".$bed." ","area > ".$alan[0]." and area < ".$alan[1]." ","bathrooms=".$bath." ","price > ".$fiyat[0]." and price < ".$fiyat[1]." "," adress LIKE '%".$location."%' "];
            $gelenDeger=[$owner,$bed,$area,$bath,$price,$location];
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
          for ($i=0; $i < count($gelenDeger) ; $i++) {
                if ($gelenDeger[$i]!="") {
                  $sorgu.=$kolonlar[$i]." and ";
                }
          }
            echo substr($sorgu,0,-4);
      //  echo  $dizi[0]."----".$dizi[1];
echo "------------------------------------------------------------------------------";
          //  echo $large_text."<br/>".$location."<br/>". $owner."<br/>".$price."<br/>". $area."<br/>". $bed."<br/>".$bath;
    ?>
    </body>
</html>
