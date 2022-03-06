<?php session_start();
   include '../includes/connectDB.php';

    for($i=1;$i<$_POST['count']+1;$i++){
        $answer1[$i] = $_POST['answer'.$i];
    }

    $sql = "SELECT answer FROM `exams` WHERE test_id = '$_POST[unitID]'";
    $query = mysqli_query($conn,$sql);

    $j = 1;
    $sum = 0;
    while($answer2 = mysqli_fetch_array($query)){
        if($answer1[$j]==$answer2['answer']){
            $sum=$sum+1;
        }
        $j++;
    }
    
    $studentID = $_SESSION['student'][0];
    $sql_score = "INSERT INTO `score`(`student_id`, `test_id`, `point`, `date`) VALUES ('$studentID','$_POST[unitID]','$sum',NOW())";
    mysqli_query($conn,$sql_score);

    header("Location:../../views/frontend/view-unit.php?unitID=$_POST[unitID]");
    

    