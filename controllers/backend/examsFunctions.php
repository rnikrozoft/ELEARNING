<?php include '../includes/connectDB.php';

    if(isset($_POST['add_exam'])){

        $sql = "INSERT INTO `exams`(`test_id`, `exam_name`, `exam_ans1`, `exam_ans2`, `exam_ans3`, `exam_ans4`, `answer`) VALUES ('$_POST[add_exam]','$_POST[exam_name]','$_POST[exam_ans1]','$_POST[exam_ans2]','$_POST[exam_ans3]','$_POST[exam_ans4]','$_POST[answer]')";

            $query = mysqli_query($conn,$sql);
            header("Location:../../views/backend/show-exam-by-test.php?testID=$_POST[add_exam]&testName=$_POST[examName]");

    }

