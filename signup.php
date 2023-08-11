<?php
    include("connection.php");
    if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO signup(name,email,password) VALUES ('$name', '$email','$password')";
    $result=mysqli_query($con,$sql);
    

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
    <title>Sign Up</title>
</head>
<body>
    <div class="auth">
        <div class="auth_in">
            <p class="heading">Create Account</p>
            <form action="" method="post">
                <p class="field">Name</p>
                <input type="text" name="name">
                <p class="field">Email</p>
                <input type="email" name="email">
                <p class="field">Password</p>
                <input type="password" name="password"><br>
                <div class="check">
                    <input type="checkbox"><span class="small">Remember Me</span><br>
                </div>
                <input type="submit" value="Sign Up" name="submit">
                <p class="small">Already have an account? <a href="login.php">Login</a></p>

            </form>
        </div>
    </div>
</body>
</html>
