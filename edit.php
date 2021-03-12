<?php include_once 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>

    <?php

    // creates connection with database parameters : url , id , pass , databasename
    include 'config.php';    // sql query
    $stu_id = $_GET['id'];
    $sql = "SELECT * FROM student_crud WHERE sid = {$stu_id}";
    // mysql_query will send mysql query and store the result as anarray
    $result = mysqli_query($connection , $sql) or die("Error in Query!"); 

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
 ?>


    <form class="post-form" action="update_data.php" method="post">
      <div class="form-group">
          <label>Name</label>   
          <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>"/>
          <input type="text" name="sname" value="<?php echo $row['sname'];?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $row['saddress'];?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>
          <?php 
    
            $sql1 = "SELECT * FROM student_class";
            $result1 = mysqli_query($connection,$sql1) or die("Error While Perfoming Query!");
            
            if(mysqli_num_rows($result1) > 0) {
                echo '<select name="sclass">';

                while($row1 = mysqli_fetch_assoc($result1)) {
                    if($row['sclass'] == $row1['cid']){
                        $select = "selected";
                    }else {
                        $select = "";
                    }
                    echo "<option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";
                }
                echo "</select>";
            }
          ?>
          </select>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $row['sphone'];?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>

    <?php 
        } // end of while
    } // end of if

?>
</div>
</div>
</body>
</html>
