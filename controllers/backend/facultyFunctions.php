<?php include '../includes/connectDB.php';

    if(isset($_POST['insert'])){

        $sql = "INSERT INTO `majors`(`major_id`, `major_name`) VALUES ('$_POST[major_id]','$_POST[major_name]')";

        try{
            mysqli_query($conn,$sql);
            header("Location:../../views/backend/faculty.php");
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    if(isset($_POST['edit'])){

        $sql1 = "SELECT * FROM `teachers` WHERE teacher_id = '$_POST[header]'";
        $query1 = mysqli_query($conn,$sql1);
        $row  = mysqli_fetch_array($query1);

        $name = $row['teacher_prefix']."".$row['teacher_fname']." ".$row['teacher_lname'];

        $sql = "UPDATE `majors` SET `major_id`='$_POST[major_id]',
                                    `major_name`='$_POST[major_name]',`header_major_id`='$_POST[header]',`header_major`='$name',
                                    `header_major_tel`='$row[teacher_tel]' 
                                    WHERE `major_id`='$_POST[faculty_id2]'";

        mysqli_query($conn,$sql);
        header("Location:../../views/backend/faculty.php");
        
    }

    if(isset($_GET['del'])){

        $sql = "DELETE FROM `majors` WHERE major_id = '$_GET[facultyID]'";

        try{
            mysqli_query($conn,$sql);
            header("Location:../../views/backend/faculty.php");
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
$conn = null;
