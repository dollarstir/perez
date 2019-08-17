<?php

include 'db.php';
include 'core.php';

$name= $_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];


echo sendmessage($name,$email,$subject,$message);















?>