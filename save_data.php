<?php 
include 'config.php';
  echo $studentName = $_POST['sname'];
  echo $studentAddress = $_POST['saddress'];
  echo $studentClass = $_POST['sclass'];
  echo $studentPhone = $_POST['sphone'];


  //$connection = mysqli_connect("localhost","root","root","amin");
 
  $sql = "INSERT INTO student_crud(sname,saddress,sclass,sphone) VALUES ('$studentName','$studentAddress','{$studentClass}','{$studentPhone}');";
  $result = mysqli_query($connection,$sql) or die("Error");

  header("Location: http://localhost/CRUD/index.php");

  mysqli_close($connection);
?>