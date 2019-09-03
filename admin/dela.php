<?php
include "db.php";
$id= $_GET['oid'];
$dl=mysqli_query($conn,"DELETE FROM  properties  WHERE id='$id' ");

if ($dl) 
{

   echo '<script>  window.location="view_pro.php"</script>';
} 
else 
{

    echo '<script>  window.location="view.php"</script>';
}






?>