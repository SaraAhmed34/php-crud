<?php include "db.php" ?>
<?php 
     if(isset($_GET['delete']))
     {
         $userid= $_GET['delete'];

         // SQL query to delete data from user table where id = $userid
         $query = "DELETE FROM users WHERE id = {$userid}"; 
         $delete_query= mysqli_query($conn, $query);
         header("Location: index.php");
     }
              ?>
