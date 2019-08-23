<?php
include "db.php";
$id= $_GET['oid'];
$dl=mysqli_query($conn,"DELETE FROM  applicant  WHERE id='$id' ");

if ($dl) 
{

   echo '<script>  window.location="vap.php"</script>';
} 
else 
{

    echo '<script>  window.location="vap.php"</script>';
}






?>