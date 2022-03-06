<?php session_start(); include '../includes/connectDB.php';

    if(isset($_POST['insert'])){
        $teacher_id = $_SESSION['user'][0];
        $sql = "INSERT INTO `test`(`test_id`, `test_name`, `test_details`, `test_create_at`, `teacher_id`) VALUES ('$_POST[test_id]','$_POST[test_name]','$_POST[test_details]',NOW(),'$teacher_id')";

        mysqli_query($conn,$sql);
        header("Location:../../views/backend/unit-test.php");
    }

    if(isset($_POST['edit'])){
        $teacher_id = $_SESSION['user'][0];
        $sql = "UPDATE `test` SET `test_id`='$_POST[test_id]',`test_name`='$_POST[test_name]',`test_details`='$_POST[test_details]',`test_create_at`= NOW() WHERE test_id = '$_POST[id]'";

        mysqli_query($conn,$sql);
        header("Location:../../views/backend/unit-test.php");
    }

    if(isset($_GET['del'])){
        $sql = "DELETE FROM `test` WHERE test_id = '$_GET[testID]'";

        mysqli_query($conn,$sql);
        header("Location:../../views/backend/unit-test.php");
    }

?>
