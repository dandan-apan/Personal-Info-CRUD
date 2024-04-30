<?php
require 'connection.php';

if(!empty($_SESSION["id"])){
header("Location: index.php");
}




if (isset($_POST["submit"])){
    $unameemail = $_POST["unameemail"];
    $pword = $_POST["pword"];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE uname = '$unameemail' OR email = '$unameemail'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($pword == $row["pword"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: index.php"); 
        }
        else{
            echo '<script>alert("Wrong Password");</script>';
        }
    }
    else{
        echo '<script>alert("User Not Registered");</script>';
    }
}
    
    


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div id="form">
        <h1>Login Form</h1>

        <form name="form" method="POST">
            <label>Username or Email:</label>
            <input type="text" id="unameemail" name="unameemail" required value="">
            <br>
            <br>
            <label>Password</label>
            <input type="password" id="pword" name="pword" required value="">
            <br>
            <br>

            <button type="submit" name="submit">Login</button> 
            <br>
            <br>
            <p>If you haven't account click register <a href="registration.php">Register</a><p>


</form>
</div>
    
</body>
</html>