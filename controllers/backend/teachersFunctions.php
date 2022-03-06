<?php session_start(); include '../includes/connectDB.php';

if(isset($_POST['insert'])){
    
    if($_SESSION['user'][4]=='Y'){
        $password = 123;
        $sql = "INSERT INTO `teachers`(`teacher_id`, `major_id`, `teacher_prefix`, `teacher_fname`, `teacher_lname`, `teacher_tel`, `teacher_password`) 
        VALUES ('$_POST[teacher_id]','$_POST[major_id]','$_POST[teacher_prefix]','$_POST[teacher_fname]','$_POST[teacher_lname]','$_POST[teacher_tel]','$password')";

        $query = mysqli_query($conn,$sql);

        if($query){
            if(isset($_POST['header_faculty'])){

                $name = $_POST['teacher_prefix']."".$_POST['teacher_fname']." ".$_POST['teacher_lname'];
                $sql3 = "UPDATE `majors` SET `header_major_id`='$_POST[teacher_id]',
                `header_major`='$name',`header_major_tel`='$_POST[teacher_tel]' WHERE major_id = '$_POST[major_id]'";

                mysqli_query($conn,$sql3);
            }
            header("Location:../../views/backend/teachers.php");
        }else{
            echo "<script>alert('เกิดข้อผิดพลาด : ไม่สามารถเพิ่มข้อมูลได้');</script>";
            echo "<script>window.location.href = '../../views/backend/teachers.php';</script>";
        }
    }else{
        $password = 123;
        $major = $_SESSION['user'][5];
        $sql = "INSERT INTO `teachers`(`teacher_id`, `major_id`, `teacher_prefix`, `teacher_fname`, `teacher_lname`, `teacher_tel`, `teacher_password`) 
        VALUES ('$_POST[teacher_id]','$major','$_POST[teacher_prefix]','$_POST[teacher_fname]','$_POST[teacher_lname]','$_POST[teacher_tel]','$password')";

        $query = mysqli_query($conn,$sql);

        if($query){
            header("Location:../../views/backend/teachers.php");
        }else{
            echo "<script>alert('เกิดข้อผิดพลาด : ไม่สามารถเพิ่มข้อมูลได้');</script>";
            echo "<script>window.location.href = '../../views/backend/teachers.php';</script>";
        }
    }
    
         
}

if(isset($_POST['edit'])){
    
    if($_SESSION['user'][4]=='Y'){
        $sql = "UPDATE `teachers` SET `teacher_id`='$_POST[teacher_id]',
                                        `major_id`='$_POST[major_id]',`teacher_prefix`='$_POST[teacher_prefix]',`teacher_fname`='$_POST[teacher_fname]',`teacher_lname`='$_POST[teacher_lname]',`teacher_tel`='$_POST[teacher_tel]' 
            WHERE `teacher_id`='$_POST[id]'";

        $query = mysqli_query($conn,$sql);

        if($query){
            header("Location:../../views/backend/teachers.php");
        }else{
            echo "<script>alert('เกิดข้อผิดพลาด : ไม่สามารถแก้ไขข้อมูลได้');</script>";
            echo "<script>window.location.href = '../../views/backend/teachers.php';</script>";
        }
    }else{
        $sql = "UPDATE `teachers` SET `teacher_id`='$_POST[teacher_id]',
                                        `teacher_prefix`='$_POST[teacher_prefix]',`teacher_fname`='$_POST[teacher_fname]',`teacher_lname`='$_POST[teacher_lname]',`teacher_tel`='$_POST[teacher_tel]' 
        WHERE `teacher_id`='$_POST[id]'";

        $query = mysqli_query($conn,$sql);

        if($query){
            header("Location:../../views/backend/teachers.php");
        }else{
            echo "<script>alert('เกิดข้อผิดพลาด : ไม่สามารถแก้ไขข้อมูลได้');</script>";
            echo "<script>window.location.href = '../../views/backend/teachers.php';</script>";
        }
    }
}

if(isset($_GET['del'])){

    $sql = "DELETE FROM `teachers` WHERE teacher_id = '$_GET[teacherID]'";
    mysqli_query($conn,$sql);
    header("Location:../../views/backend/teachers.php");
}

$conn = null;