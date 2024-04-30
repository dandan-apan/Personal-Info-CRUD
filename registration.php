<?php
require 'connection.php';



if(!empty($_SESSION["id"])){
    header("Location: index.php");
}


if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $pword = $_POST["pword"];
    $cpword = $_POST["cpword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM user WHERE uname = '$uname' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
        echo '<script> alert("Username or Email Has Already Taken"); </script>';
    }

    else{
        if($pword == $cpword){
            
            $query = "INSERT INTO user VALUES('','$name','$uname','$email','$pword','$cpword')";
            mysqli_query($conn,$query);
            echo '<script>alert("Registration Successful");</script>';
            
            }
        }

        

        
    }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
<a href="login.php"><- Back</a>
    <h2>Registration</h2>
    <form class="" action="" method="post" autocomplete="off">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required value="">
        <br>
        <br>
        <label for="uname">Username:</label>
        <input type="text" id="uname" name="uname" required value="">
        <br>
        <br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required value="">
        <br>
        <br>
        <label for="pword">Password:</label>
        <input type="password" id="pword" name="pword" required value="">
        <br>
        <br>
        <label for="cpword">Confirm Password:</label>
        <input type="password" id="cpword" name="cpword" required value="">
        <br>
        <br>
        <input type="submit" id="btn" value="Register" name="submit"/> 
    </form>
    
</body>
</html>