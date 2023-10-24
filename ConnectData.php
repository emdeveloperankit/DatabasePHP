<?php

if(isset($_GET['signup']))
{
 $FirstName=$_GET['username'];
 $PassWord=$_GET['password'];

 $query= "INSERT INTO dataloginform values('$FirstName','$PassWord');

$formData=msqli_query($Database,$query)";
// or die("");
if($formData){
 //echo "Data Inserted into Database";
}else{
 echo "Data Insertion failed";
}
}
//echo "Your connection  is done ok!"
?>
