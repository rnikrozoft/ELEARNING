<?php 

    include '../includes/connectDB.php';

    if(isset($_POST['insert'])){

        if(empty($_POST['exam_name']) || empty($_POST['exam_ans1']) || empty($_POST['exam_ans2']) || empty($_POST['exam_ans3']) || empty($_POST['exam_ans4'])){
            echo "<script>alert('กรุณาป้อนข้อมูลให้ครบถ้วน');</script>";
             echo "<script>window.location.href = '../../views/backend/create-exam.php?unitID=$_POST[insert]';</script>";
        }else{
            $sql = "INSERT INTO `exams`(`test_id`, `exam_name`, `exam_ans1`, `exam_ans2`, `exam_ans3`, `exam_ans4`, `answer`) VALUES ('$_POST[insert]','$_POST[exam_name]','$_POST[exam_ans1]','$_POST[exam_ans2]','$_POST[exam_ans3]','$_POST[exam_ans4]','$_POST[answer]')";

            try{
                mysqli_query($conn,$sql);
                header("Location:../../views/backend/view-unit.php?unitID=$_POST[insert]");
            }catch(PDOException $e){
                echo "Error";
            }
        }

        
    
    }

    if(isset($_GET['del'])){

        $sql = "DELETE FROM `exams` WHERE exam_id = '$_GET[examID]'";
        $query = mysqli_query($conn,$sql);
        header("Location:../../views/backend/view-unit.php?unitID=$_GET[unitID]");
    }
    
    $conn = null;