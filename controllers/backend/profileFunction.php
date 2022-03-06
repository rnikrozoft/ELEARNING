<?php session_start(); include '../includes/connectDB.php';

    $sql1 = "SELECT header_major_id FROM majors WHERE header_major_id = '$_POST[update]'";
    $query1 = mysqli_query($conn,$sql1);
    
    if(mysqli_num_rows($query1)==1){

        $sql2 = "UPDATE `teachers` SET `teacher_id`='$_POST[teacher_id]',
                                        `teacher_prefix`='$_POST[teacher_prefix]',
                                        `teacher_fname`='$_POST[teacher_fname]',
                                        `teacher_lname`='$_POST[teacher_lname]',
                                        `teacher_tel`='$_POST[teacher_tel]',
                                        `teacher_password`='$_POST[teacher_password]'
                WHERE teacher_id = '$_POST[update]'";
        $query2 = mysqli_query($conn,$sql2);

        if($query2){
            $name = $_POST['teacher_prefix']."".$_POST['teacher_fname']." ".$_POST['teacher_lname'];

            $sql3 = "UPDATE `majors` SET `header_major_id`='$_POST[teacher_id]',
                                            `header_major`='$name',
                                            `header_major_tel`='$_POST[teacher_tel]'
                    WHERE header_major_id = '$_POST[update]'";
            mysqli_query($conn,$sql3);
    
            session_destroy();
            header("Location:../../views/backend/index.php");
        }else{
            echo "<script>alert('เกิดข้อผิดพลาด : ไม่สามารถแก้ไขข้อมูลได้');</script>";
            echo "<script>window.location.href = '../../views/backend/profile.php';</script>";
        }

        

    }else{
        $sql3 = "UPDATE `teachers` SET `teacher_id`='$_POST[teacher_id]',
                                        `teacher_prefix`='$_POST[teacher_prefix]',
                                        `teacher_fname`='$_POST[teacher_fname]',
                                        `teacher_lname`='$_POST[teacher_lname]',
                                        `teacher_tel`='$_POST[teacher_tel]',
                                        `teacher_password`='$_POST[teacher_password]' 
                WHERE teacher_id = '$_POST[update]'";
        $query3 = mysqli_query($conn,$sql3);

        if($query3){
            session_destroy();
            header("Location:../../views/backend/index.php");
        }else{
            echo "<script>alert('เกิดข้อผิดพลาด : ไม่สามารถแก้ไขข้อมูลได้');</script>";
            echo "<script>window.location.href = '../../views/backend/profile.php';</script>";
        }
    }
    