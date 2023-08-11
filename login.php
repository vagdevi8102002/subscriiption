<?php
require_once("connection.php");

if(isset($_POST['submit']))
{
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql="select * from signup where User='".$email."' AND Pass='".$password."'
limit 3";

$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)==1){
  echo "You have successfully logged in";
  exit();
}
else {
  echo "You have entered incorrect password";
  exit();
}
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="auth">
        <div class="auth_in">
            <p class="heading">Login to your account</p>
            <form action="planstable.html" method="post">
                <p class="field">Email</p>
                <input type="email" name="email">
                <p class="field">Password</p>
                <input type="password" name="password"><br>
                <div class="check">
                    <input type="checkbox"><span class="small">Remember Me</span><br>
                </div>
                <input type="submit" value="Sign In" name="submit">
                <p class="small">New to MyApp? <a href="signup.php">Sign Up</a></p>

            </form>
        </div>
    </div>
</body>
</html>
