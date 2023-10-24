<!DOCTYPE html>
<html>

<head>
 <link rel="stylesheet" href="animated.css">
 
 <title>animated form file by me</title>
</head>

<body>

 <?php include ("Connect.php");?>
<?php include ("ConnectData.php");?>
 <div class="box">
  <form action="#" method="GET">
   <h2>Sign in</h2>
   <div class="inputBox">
    <input type="text" required="required" name="username">
    <span>Username</span>
    <i></i>
   </div>
   <div class="inputBox">
    <input type="password" required="required" name="password">
    <span>Password</span>
    <i></i>
   </div>
   <div class="links">
    <a href="#">Forget Password</a>
    <a href="#">Signup</a>
   </div>
   <input type="submit" value="login" name="signup">
  </form>
 </div>
</body>

</html>