<?php
include '../../controllers/includes/connectDB.php';

    $id = $_POST['id_major'];
    $sql = "SELECT * FROM teachers WHERE major_id = '$id' ORDER BY teacher_id ASC";

    $query = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($query)){

        echo "<option value=\"".$row['teacher_id']."\">".$row['teacher_fname']." ".$row['teacher_lname']."</option>";

    }

    
