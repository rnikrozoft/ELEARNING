<?php include 'includes/connectDB.php';

    if(isset($_POST['backend_login'])){
        
        $sql = "SELECT * FROM teachers WHERE teacher_id = '$_POST[teacher_id]' AND teacher_password = '$_POST[teacher_password]' ";
        $query = mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($query) == 1){
            $data = mysqli_fetch_array($query);
            session_start();
            $_SESSION['user'] = [   $data['teacher_id'],
                                    $data['teacher_prefix'],
                                    $data['teacher_fname'],
                                    $data['teacher_lname'],
                                    $data['admin_status'],
                                    $data['major_id']
                                    
                                ];
            header("Location:../views/backend/students-score.php");
        }else{
            echo "<script>alert('ไม่สามารถเข้าสู่ระบบได้ กรุณาตรวจสอบข้อมูลให้ถูกต้อง');</script>";
            echo "<script>window.location.href = '../views/backend/index.php';</script>";
        }
    }

    if(isset($_POST['frontend_login'])){
        
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
            header("Location:../views/frontend/home.php");
        }else{
            echo "<script>alert('ไม่สามารถเข้าสู่ระบบได้ กรุณาตรวจสอบข้อมูลให้ถูกต้อง');</script>";
            echo "<script>window.location.href = '../views/frontend/home.php';</script>";
        }
    }

    if(isset($_GET['logout'])){
        session_start();
        session_destroy();
        header("Location:../views/backend/index.php");
    }

    if(isset($_GET['logoutf'])){
        session_start();
        session_destroy();
        header("Location:../views/frontend/index.php");
    }