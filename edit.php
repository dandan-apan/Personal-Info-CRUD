<?php
require 'connection.php';

if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE id = $id");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Info</title>
</head>
<body>
    <h1>Personal Info</h1>

    <form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <label for="">Enter firstname: </label><br>
    <input type="text" name="first_name" value="<?php echo $_GET['first_name']; ?>"><br><br>
    
    <label for="">Enter middle name: </label><br>
    <input type="text" name="middle_name" value="<?php echo $_GET['middle_name']; ?>"><br><br>

    <label for="">Enter last name: </label><br>
    <input type="text" name="last_name" value="<?php echo $_GET['last_name']; ?>"><br>

    
    <p>Enter gender:</p>
    <input type="radio" id="gender" name="gender" <?php if($_GET['gender'] == 'Male') echo 'checked';?> value="Male">
    <label for="">Male</label>
    <input type="radio" id="gender" name="gender" <?php if($_GET['gender'] == 'Female') echo 'checked';?> value="Female">
    <label for="">Female</label><br><br>

    <label for="">Enter birthday: </label><br>
    <input type="date" name="birthday" value="<?php echo $_GET['birthday']; ?>"><br><br>

    <label for="">Enter age: </label><br>
    <input type="number" name="age" value="<?php echo $_GET['age']; ?>"><br><br>

    

    <label for="">Enter year:</label>
  <select name="year" id="year">
    <option <?php if($_GET['year'] == '1st year'){ echo 'selected';} ?> value="1st year">1st year</option>
    <option <?php if($_GET['year'] == '2nd year'){ echo 'selected';} ?> value="2nd year">2nd year</option>
    <option <?php if($_GET['year'] == '3rd year'){ echo 'selected';} ?> value="3rd year">3rd year</option>
    <option <?php if($_GET['year'] == '4th year'){ echo 'selected';} ?> value="4th year">4th year</option>
  </select>
  <br><br>

    

    <label for="">Enter course:</label>
  <select name="course" id="course">
    <option <?php if($_GET['course'] == 'BSIT'){ echo 'selected';} ?> value="BSIT">BSIT</option>
    <option <?php if($_GET['course'] == 'BSBA'){ echo 'selected';} ?> value="BSBA">BSBA</option>
    <option <?php if($_GET['course'] == 'BSED'){ echo 'selected';} ?> value="BSED">BSED</option>
  </select>
  <br><br>
    
    <button type="submit">Update</button>
    <br>
    <br>
</form>


    <table border="1">
    <thead>
    <tr>
    <th>ID</th>
    <th>FIRST NAME</th>
    <th>MIDDLE NAME</th>
    <th>LAST NAME</th>
    <th>GENDER</th>
    <th>BIRTHDAY</th>
    <th>AGE</th>
    <th>YEAR</th>
    <th>COURSE</th>
    <th>ACTION</th>
    </tr>
    </thead>
    <tbody>
    <?php
    require 'connection.php';
    $sql = "SELECT * FROM per_info";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { ?>
        <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['first_name']; ?></td>
        <td><?php echo $row['middle_name']; ?></td>
        <td><?php echo $row['last_name']; ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['birthday']; ?></td>
        <td><?php echo $row['age']; ?></td>
        <td><?php echo $row['year']; ?></td>
        <td><?php echo $row['course']; ?></td>
        <td>
            <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            <a href="edit.php?id=<?php echo $row['id']; ?>&first_name=<?php echo $row['first_name']; ?>&middle_name=<?php echo $row['middle_name']; ?>&last_name=<?php echo $row['last_name']; ?>&gender=<?php echo $row['gender']; ?>&birthday=<?php echo $row['birthday']; ?>&age=<?php echo $row['age']; ?>&year=<?php echo $row['year']; ?>&course=<?php echo $row['course']; ?>">Edit</a>
        </td>
        </tr>
        <?php
        } // end of while loop...
    } else {
        echo "<tr><td colspan='10' style='text-align: center;'>No results found.</td></tr>";
    }
    ?>
    </tbody>
    <br>
</table>
    <br>
    <a href="logout.php">Log out</a>
    
</body>