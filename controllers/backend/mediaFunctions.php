<?php 

    include '../includes/connectDB.php';

    if(isset($_POST['add_media'])){

        if(!empty( $_FILES["file"]["name"])){
            $test = explode('.', $_FILES["file"]["name"]);
            $ext = end($test);
            $name = rand(100, 999) . '.' . $ext;
            $location = '../../assets/medias/' . $name;

            $type = $_FILES["file"]["type"];
            

            $sql = "INSERT INTO `medias`( `test_id`, `media_name`, `media_path`, `media_type`, `media_create_at`) VALUES ('$_POST[test_id]','$_POST[media_name]','$location','$type',NOW())";

            try{
                mysqli_query($conn,$sql);
                move_uploaded_file($_FILES["file"]["tmp_name"], $location);
                header("Location:../../views/backend/view-unit.php?unitID=$_POST[test_id]");
            }catch(PDOException $e){
                echo "Error";
            }
        }else{
            echo "<script>alert('กรุณาเลือกไฟล์');</script>";
            echo "<script>window.location.href='../../views/backend/view-unit.php?unitID=$_POST[test_id]';</script>";
        }
    
    }

    if(isset($_GET['del'])){

        $id = $_GET['unitID'];
        $sql = "DELETE FROM `medias` WHERE media_id = '$_GET[mediaID]'";
        $query = mysqli_query($conn,$sql);
        header("Location:../../views/backend/view-unit.php?unitID=$id");
    }
    
    $conn = null;