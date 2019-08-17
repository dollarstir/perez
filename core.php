<?php

function sendmessage($name,$email,$subject,$message)
{
    include "db.php";
   
    
    $sendme = mysqli_query($conn,"INSERT INTO messages(sname,semail,msubject,message)  VALUES ($name,$email,$subject,$message) ");
    if ($sendme) {

        echo ' <div id="sendmessage" style="background-color:green;color:white;">Your message has been sent. Thank you!</div>';
        # code...
    }
    else {
        echo '<div id="sendmessage" style="background-color:red;color:white">Faild to send message please try again</div>';
    }

}

?>