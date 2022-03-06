<?php 
    try {
        $conn = mysqli_connect('localhost', 'root', '', 'php_elearning') or die('Error: '.mysqli_error($conn));
        mysqli_query($conn, "SET NAMES 'utf8' ");
    } catch (PDOException $e) {
        echo '<center>Connection failed: '.$e->getMessage().'</center>';
    }
?>