<?php include "db.php" ?>
<?php 
if(isset($_GET['user_id'])){
  $user_id=$_GET['user_id'];
}
$query="SELECT * FROM users WHERE id=$user_id";
$view_users=mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($view_users))
{
  $id = $row['id'];
  $user = $row['name'];
  $email = $row['email'];
  $pass = $row['password'];
}

if(isset($_POST['update'])){
  $user = $_POST['user'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];

  $update="UPDATE users SET name = '{$user}' , email = '{$email}' , password = '{$pass}' WHERE id = $user_id";
  $update_user = mysqli_query($conn, $query);
  // echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
}
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
<h1 class="text-center">Update User Details</h1>
  <div class="container ">
    <form action="" method="post">
      <div class="form-group">
        <label for="user" >Username</label>
        <input type="text" name="user" class="form-control" value="<?php echo $user  ?>">
      </div>

      <div class="form-group">
        <label for="email" >Email ID</label>
        <input type="text" name="email"  class="form-control" value="<?php echo $email  ?>">
      </div>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    
      <div class="form-group">
        <label for="pass" >Password</label>
        <input type="password" name="pass"  class="form-control" value="<?php echo $pass  ?>">
      </div>    

      <div class="form-group">
          <input type="submit"  name="update" class="btn btn-primary mt-2" value="update">
      </div>
    </form>  
    <div class="container text-center mt-5">
      <a href="index.php" class="btn btn-warning mt-5"> Back </a>
    <div>  
</body>
