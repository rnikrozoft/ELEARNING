<?php session_start(); include '../includes/connectDB.php';

if(isset($_POST['insert'])){

    $password = "1234";
    if($_POST['insert']=='Y'){
        $sql = "INSERT INTO `students`(`student_id`, `major_id`, `level_id`, `student_prefix`, `student_fname`, `student_lname`, `student_tel`, `password`)  VALUES ('$_POST[student_id]',
                '$_POST[major_id]',
                '$_POST[level_id]',
                '$_POST[student_prefix]',
                '$_POST[student_fname]',
                '$_POST[student_lname]',
                '$_POST[student_tel]',
                '$password')";
    }else{
        $major = $_SESSION['user'][5];
        $sql = "INSERT INTO `students`(`student_id`, `major_id`, `level_id`, `student_prefix`, `student_fname`, `student_lname`, `student_tel`, `password`)  VALUES ('$_POST[student_id]',
                '$major',
                '$_POST[level_id]',
                '$_POST[student_prefix]',
                '$_POST[student_fname]',
                '$_POST[student_lname]',
                '$_POST[student_tel]',
                '$password')";
    }

    $query =  mysqli_query($conn,$sql);
    if($query){
        header("Location:../../views/backend/students.php");
    }else{
        echo "<script>alert('เกิดข้อผิดพลาด : ไม่สามารถเพิ่มข้อมูลได้');</script>";
        echo "<script>window.location.href = '../../views/backend/students.php';</script>";
    }
}

if(isset($_POST['register'])){
    $sql = "INSERT INTO `students`(`student_id`, `major_id`, `level_id`, `student_prefix`, `student_fname`, `student_lname`, `student_tel`, `password`) VALUES ('$_POST[student_id]','$_POST[major_id]','$_POST[level_id]','$_POST[student_prefix]','$_POST[student_fname]','$_POST[student_lname]','$_POST[student_tel]','$_POST[student_password]')";
    $query =  mysqli_query($conn,$sql);

    if($query){
        $sql = "SELECT * FROM students WHERE student_id = '$_POST[student_id]' AND password = '$_POST[student_password]' ";
        $query = mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($query) == 1){
            $data = mysqli_fetch_array($query);
            session_start();
            $_SESSION['student'] = [   $data['student_id'],
                                    $data['student_prefix'],
                                    $data['student_fname'],
                                    $data['student_lname'],
                                    $data['major_id']
                                ];
            header("Location:../../views/frontend/home.php");
        }
    }else{
        echo "<script>alert('เกิดข้อผิดพลาด : ไม่สามารถสมัครข้อมูลได้');</script>";
        echo "<script>window.location.href = '../../views/frontend/register.php';</script>";
    }
}

if(isset($_POST['edit'])){

    $sql = "UPDATE `students` SET `student_id`='$_POST[student_id]',
                                    `major_id`='$_POST[major_id]',
                                    `level_id`='$_POST[level_id]',
                                    `student_prefix`='$_POST[student_prefix]',
                                    `student_fname`='$_POST[student_fname]',
                                    `student_lname`='$_POST[student_lname]',
                                    `student_tel`='$_POST[student_tel]'
            WHERE student_id='$_POST[id]'";

    $query =  mysqli_query($conn,$sql);
    if($query){
        header("Location:../../views/backend/students.php");
    }else{
        echo "<script>alert('เกิดข้อผิดพลาด : ไม่สามารถแก้ไขข้อมูลได้');</script>";
        echo "<script>window.location.href = '../../views/backend/students.php';</script>";
    }
}

if(isset($_POST['update'])){

    $sql = "UPDATE `students` SET `student_id`='$_POST[student_id]',
                                    `student_prefix`='$_POST[student_prefix]',
                                    `student_fname`='$_POST[student_fname]',
                                    `student_lname`='$_POST[student_lname]',
                                    `student_tel`='$_POST[student_tel]',
                                    `password`='$_POST[student_password]'
            WHERE student_id='$_POST[update]'";

    $query =  mysqli_query($conn,$sql);
    if($query){
        session_destroy();
        header("Location:../../views/frontend/index.php");
    }else{
        echo "<script>alert('เกิดข้อผิดพลาด : ไม่สามารถแก้ไขข้อมูลได้');</script>";
        echo "<script>window.location.href = '../../views/frontend/profile.php';</script>";
    }
}

if(isset($_GET['del'])){

    $sql = "DELETE FROM `students` WHERE student_id = '$_GET[studentID]'";
    mysqli_query($conn,$sql);
    header("Location:../../views/backend/students.php");
}
$conn = null;