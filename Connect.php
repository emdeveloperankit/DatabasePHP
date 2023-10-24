<?php
error_reporting(0);

$serverName= "localhost";
$userName ="root";
$password ="";
$dbName = "dataloginform";
$Database = mysqli_connect($serverName,$userName,$password,$dbName);

if($Database)
{
 echo "Connection has done!";
}else{
 echo "connection Failed!".mysqli_connect.error() ;
}
?>

