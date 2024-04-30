<?php
require 'connection.php';

$sql = "INSERT INTO per_info(first_name, middle_name, last_name, gender, birthday, age, year, course) 
    VALUES ('". $_POST['first_name'] ."', '" . $_POST['middle_name'] . "', '" . $_POST['last_name'] . "', '" . $_POST['gender'] . "', '" . $_POST['birthday'] . "', '" . $_POST['age'] . "', '" . $_POST['year'] . "', '" . $_POST['course'] . "')";

if($conn->query($sql)) {
    header("Location: index.php");
} else {
    echo "<script>alert('Failed to insert the record');</script>";
}


?>