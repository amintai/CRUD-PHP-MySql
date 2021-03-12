<?php 
    echo $stu_id = $_GET['id'];
    include 'config.php';

    $sql = "DELETE FROM student_crud WHERE sid = {$stu_id} ";

 $result = mysqli_query($connection,$sql) or die("Error While Executing Query!");

    header('Location: http://localhost/CRUD/index.php');

    mysqli_close($connection);
?>