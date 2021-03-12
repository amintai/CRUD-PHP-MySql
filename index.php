<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>

    <?php
    // creates connection with database parameters : url , id , pass , databasename
    include 'config.php';
    //$connection = mysqli_connect("localhost","root","root","amin");
    // sql query
    $sql = "SELECT * FROM student_crud JOIN student_class ON student_crud.sclass = student_class.cid;";
    // mysql_query will send mysql query and store the result as anarray
    $result = mysqli_query($connection , $sql) or die("Error in Query!"); 

    if(mysqli_num_rows($result) > 0) {

    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php 
                // mysqli_fetch_assoc will create an associative array i.e with key value pair
                  while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row['sid'] ?></td>
                <td><?php echo $row['sname'] ?></td>
                <td><?php echo $row['saddress'] ?></td>
                <td><?php echo $row['cname'] ?></td>
                <td><?php echo $row['sphone'] ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['sid'];?>'>Edit</a>
                    <a href='delete_inline.php?id=<?php echo $row['sid'];?>'>Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php } else { echo  
        "<h2>No Records Found!</h2>";
    } 
        // its good to practice close connnection before 
        mysqli_close($connection);
    ?>
</div>
</div>
</body>
</html>
