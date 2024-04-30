<?php
require 'connection.php';

$sql = "DELETE FROM per_info WHERE id=" . $_GET['id'];

if($conn->query($sql)) {
    header("Location: index.php");
} else {
    echo "<script>alert('Failed to delete the record');</script>";
}


?>