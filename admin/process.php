<?php

include 'db.php';
include 'core.php';

if (isset($_GET['dollar'])) {

    

    if ($_GET['dollar']=="property") {


        $name=$_POST['name'];
        $location=$_POST['location'];
        $price=$_POST['price'];
        $ptype=$_POST['ptype'];
        $pcat = $_POST['pcat'];
        $area=$_POST['area'];
        $bed=$_POST['bed'];
        $bath=$_POST['bath'];
        $garage=$_POST['garage'];
        $description= $_POST['description'];
        

        if (empty($name)) {

            echo' <div id="mess" style="background-color:red;"><p>Please Enter Property name</p></div>';
        }
        elseif (empty($location)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter location of property</p></div>';
        }
        elseif (empty($ptype)) {
            echo' <div id="mess" style="background-color:red;"><p>Select property type</p></div>';
        }
        elseif (empty($pcat)) {
            echo' <div id="mess" style="background-color:red;"><p>Select Category</p></div>';
            # code...
        }
       
        else {
           echo adproperty($name,$location,$price,$ptype,$pcat,$area,$bed,$bath,$garage,$description); 
        }

        # code...
    }






    
   
















    # code...
}




?>