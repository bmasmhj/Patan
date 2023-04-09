<?php 
session_start();

if(isset($_SESSION['admin_id'])){
    header('location:index.php');
}
require '../controller/connnect.php'; 

?>
<style>
    /* *{
  margin: 0;
  padding: 0;
} */

.back {
    /* background: #e2e2e2; */
    width: 100%;
    position: absolute;
    top: 0;
    bottom: 0;
  }
  
  .div-center {
    width: 400px;
    height: 400px;
    background-color: #fff;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    margin: auto;
    max-width: 100%;
    max-height: 100%;
    overflow: auto;
    padding: 1em 2em;
    border-bottom: 2px solid #ccc;
    display: table;
  }
  
  div.content {
    display: table-cell;
    vertical-align: middle;
  }

.error {
    color: red;
  }

.flex-container {
  display: flex;
  /* column-gap: 26rem; */
  justify-content: space-between;
  margin: 1rem; 
  padding: 1rem;
  
}

.btn-primary {
  background-color: blue;
  text-align: center;
  text-decoration: none;
  color: #fff;
  font-size: 1.3rem;
  padding: 1rem;
  margin-bottom: 1rem;
}

.main-body {
  display: grid;
  grid-template-columns: auto auto; 
  /* column-gap: 2rem; */
  grid-gap: 50px;
  margin: 0rem 5rem 0rem 5rem;
  /* justify-content: space-around; */
}

.paragraph-one {
  text-align: justify;
}

h3 {
  text-align: center;
}
</style>
<?php

if(isset($_POST['btnlogin'])) {
  $err=[];

  if(isset($_POST['email']) && !empty($_POST['email']) && trim($_POST['email'])) {
    $email = $_POST['email'];
  } 
  else {
    $err['email'] = 'please enter email';
  }

  if(isset($_POST['password']) && !empty($_POST['password']) && trim($_POST['password'])) {
    $password = $_POST['password'];
    $enctypted_password = md5($password);
  } 
  else {
    $err['password'] = 'please enter password';
  }

  if(count($err) == 0) {
    //process to login with database

   $sql = "SELECT * FROM admins WHERE email='$email' AND password = '$enctypted_password' AND status=1";
   //execute query
   $result = $con->query($sql);
  //  print_r($result);

   if($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $_SESSION['admin_id'] = $row['id'];
    $_SESSION['admin_name'] = $row['name'];
    $_SESSION['admin_email'] = $row['email'];

    header('location: index.php');
   }
   else {
    $msg = 'Credential not match.';
   }
  }
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="back">


<div class="div-center">


  <div class="content">


    <h3>Login</h3>
    <hr />
    <form action="" method="post">
      <?php 
        if(isset($msg)) {?>
        <p class='error'><?php echo $msg?></p>
        <?php } ?>
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
        <?php
          if(isset($err['email'])) { ?>
             <span class="error"><?php echo $err['email'] ?></span>
        <?php  } ?>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        <?php
          if(isset($err['password'])) { ?>
             <span class="error"><?php echo $err['password'] ?></span>
        <?php  } ?>
      </div>
      <hr>
      <button type="submit" class="btn btn-primary" name="btnlogin">Login</button>
      <hr />
      <!-- <button type="button" class="btn btn-link">Signup</button>
      <button type="button" class="btn btn-link">Reset Password</button> -->

    </form>

  </div>

</div>
</body>
</html>
