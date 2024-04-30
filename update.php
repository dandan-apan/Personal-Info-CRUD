<?php
require 'connection.php';

$sql = "UPDATE per_info SET first_name='". $_POST['first_name'] ."', middle_name='" . $_POST['middle_name'] . "', last_name='" . $_POST['last_name'] . "', gender='" . $_POST['gender'] . "', birthday='" . $_POST['birthday'] . "', age='" . $_POST['age'] . "', year='" . $_POST['year'] . "', course='" . $_POST['course'] . "' WHERE id=" . $_POST['id'];

if($conn->query($sql)) {
    header("Location: index.php");
} else {
    echo "<script>alert('Failed to update the record');</script>";
}

