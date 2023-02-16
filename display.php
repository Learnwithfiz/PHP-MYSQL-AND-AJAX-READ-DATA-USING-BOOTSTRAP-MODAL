<?php
   include './db.php';

   $select = "SELECT * FROM student";
   $ex = mysqli_query($con,$select);
   while($row=mysqli_fetch_array($ex)){?>
    
      <tr>
        <td><?php echo $row['id'];  ?></td>
        <td><?php echo $row['name'];  ?></td>
        <td><?php echo $row['email'];  ?></td>
        <td><?php echo $row['dept'];  ?></td>
      </tr>
     
 <?php  }
?>