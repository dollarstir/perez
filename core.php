<?php

function sendmessage($name,$email,$subject,$message)
{
    include "db.php";
   
    
    $sendme = mysqli_query($conn,"INSERT INTO messages(sname,semail,msubject,message)  VALUES ('$name','$email','$subject','$message') ");
    if ($sendme) {

        echo ' <div id="sendmessage" style="background-color:green;color:white;">Your message has been sent. Thank you!</div>';
        # code...
    }
    else {
        echo '<div id="sendmessage" style="background-color:red;color:white">Faild to send message please try again</div>';
    }

}

function latestproperties()
{
    include "db.php";

    $getpro=mysqli_query($conn,"SELECT * FROM properties ORDER BY id DESC LIMIT 10");

    while ($rp=mysqli_fetch_array($getpro)) {

        $name=$rp['name'];
        $location=$rp['location'];
        $price =$rp['price'];
        $pcat=$rp['pcat'];
        $area=$rp['area'];
        $bed=$rp['bed'];
        $bath=$rp['bath'];
        $garage=$rp['garage'];
        $pic=$rp['image'];
        $id=$rp['id'];

        echo '
        
    <div class="carousel-item-b">
        <div class="card-box-a card-shadow">
          <div class="img-  box-a">
            <img src="admin/'.$pic.'" alt="" class="img-a img-fluid" style="width:600px;height:400px;">
          </div>
          <div class="card-overlay">
            <div class="card-overlay-a-content">
              <div class="card-header-a">
                <h2 class="card-title-a">
                  <a href="viewpro.php?id='.$id.'" style="font-size:25px;">'.$name.' 
                    <br /> '.$location.'</a>
                </h2>
              </div>
              <div class="card-body-a">
                <div class="price-box d-flex">
                  <span class="price-a">'.$pcat.'| ¢ '.$price.'</span>
                </div>
                <a href="viewpro.php?id=" class="link-a">Click here to view
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
              <div class="card-footer-a">
                <ul class="card-info d-flex justify-content-around">
                  <li>
                    <h4 class="card-info-title" style="color:black;">Area</h4>
                    <span>'.$area.'
                      <sup></sup>
                    </span>
                  </li>
                  <li>
                    <h4 class="card-info-title" style="color:black;">Beds</h4>
                    <span>'.$bed.'</span>
                  </li>
                  <li>
                    <h4 class="card-info-title" style="color:black;">Baths</h4>
                    <span>'.$bath.'</span>
                  </li>
                  <li>
                    <h4 class="card-info-title" style="color:black;">Garages</h4>
                    <span>'.$garage.'</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </div>
        
        ';

        # code...
    }
}



function allproperties()
{
    include "db.php";
    $allp= mysqli_query($conn,"SELECT * FROM properties ORDER BY id DESC");
     while ($ap= mysqli_fetch_array($allp)) {

        $name=$ap['name'];
        $location=$ap['location'];
        $price =$ap['price'];
        $pcat=$ap['pcat'];
        $area=$ap['area'];
        $bed=$ap['bed'];
        $bath=$ap['bath'];
        $garage=$ap['garage'];
        $pic=$ap['image'];
        $id=$ap['id'];



        echo '
        
     <div class="col-md-4">
        <div class="card-box-a card-shadow">
          <div class="img-box-a">
            <img src="admin/'.$pic.'" alt="" class="img-a img-fluid" style="width:600px;height:400px;">
          </div>
          <div class="card-overlay">
            <div class="card-overlay-a-content">
              <div class="card-header-a">
                <h2 class="card-title-a">
                  <a href="viewpro.php?id='.$id.'" style="font-size:25px;">'.$name.'
                    <br /> '.$location.'</a>
                </h2>
              </div>
              <div class="card-body-a">
                <div class="price-box d-flex">
                  <span class="price-a">'.$pcat.'| ¢ '.$price.'</span>
                </div>
                <a href="viewpro.php?id='.$id.'" class="link-a">Click here to view
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
              <div class="card-footer-a">
                <ul class="card-info d-flex justify-content-around">
                  <li>
                    <h4 class="card-info-title" style="color:black;">Area</h4>
                    <span>'.$area.'
                      <sup></sup>
                    </span>
                  </li>
                  <li>
                    <h4 class="card-info-title" style="color:black;">Beds</h4>
                    <span>'.$bed.'</span>
                  </li>
                  <li>
                    <h4 class="card-info-title" style="color:black;">Baths</h4>
                    <span>'.$bath.'</span>
                  </li>
                  <li>
                    <h4 class="card-info-title" style="color:black;">Garages</h4>
                    <span>'.$garage.'</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </div>        
        
        ';
         
     }
}


function carousel()
{
    include "db.php";

    $caro= mysqli_query($conn,"SELECT * FROM  properties ORDER BY id DESC LIMIT 5");

    while ($crow=mysqli_fetch_array($caro)) {

        
        $name=$crow['name'];
        $location=$crow['location'];
        $price =$crow['price'];
        $pcat=$crow['pcat'];
        $area=$crow['area'];
        $bed=$crow['bed'];
        $bath=$crow['bath'];
        $garage=$crow['garage'];
        $pic=$crow['image'];
        $id=$crow['id'];



        echo '
        
<div class="carousel-item-a intro-item bg-image" style="background-image: url(admin/'.$pic.')" style="width:1920px;height:960px;">
    <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">'.$location.'
                      <br> </p>
                    <h1 class="intro-title mb-4" style="font-size:30px;">
                      <span class="color-b"></span> 
                      <br> '.$name.'</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="viewpro.php?id='.$id.'"><span class="price-a">'.$pcat.' | ¢ '.$price.'</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
        ';
    }
}

?>