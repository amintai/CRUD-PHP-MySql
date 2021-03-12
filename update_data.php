<?php 
echo $stu_id = $_POST['sid'];
echo $stu_name = $_POST['sname'];
echo $stu_address = $_POST['saddress'];
echo $stu_class = $_POST['sclass'];
echo $stu_phone = $_POST['sphone'];

// 1 create connection
include 'config.php';
// 2 write sql query
$sql = "UPDATE student_crud SET sname = '{$stu_name}' , saddress='{$stu_address}' , sclass='{$stu_class}' , sphone='{$stu_phone}' WHERE sid='{$stu_id}';";
//3 store it in result
$result = mysqli_query($connection,$sql) or die("Query Unseccssful!");

header('Location: http://localhost/CRUD/index.php');


//4 close connection
mysqli_close($connection);
?>