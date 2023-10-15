<?php include "db.php" 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<!-- Bootstrap Icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>PHP CRUD System</title>
</head>
<body>
<div class="container">
    <h1 class="text-center" >Hello <?php if(isset($_GET['user_id'])){$user_id=$_GET['user_id']; $query="SELECT * FROM users WHERE id={$user_id}"; $view_user=mysqli_query($conn,$query); $row=mysqli_fetch_assoc($view_user); echo $row['name'];} ?></h1>
      <a href="create.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i> Create New User</a>
        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">ID</th>
              <th  scope="col">Username</th>
              <th  scope="col">Email</th>
              <th  scope="col"> Password</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
                <?php
                
                if(isset($_GET['user_id'])){
                  $user_id=$_GET['user_id']; 
                  $query="SELECT * FROM users WHERE id={$user_id}"; 
                  $view_user=mysqli_query($conn,$query);
                  
                  while($row=mysqli_fetch_assoc($view_user)){
                    $id = $row['id'];                
                    $user = $row['name'];        
                    $email = $row['email'];         
                    $pass = $row['password']; 
                    echo "<tr >";
                    echo " <th scope='row' >{$id}</th>";
                    echo " <td > {$user}</td>";
                    echo " <td > {$email}</td>";
                    echo " <td >{$pass} </td>";
                    echo " </tr> ";
                  }
                  }
                ?>
              </tr>  
            </tbody>
        </table>

  </div>
  <div class="container text-center mt-5">
    <a href="index.php" class="btn btn-warning mt-5"> Back </a>
  <div>
</body>
