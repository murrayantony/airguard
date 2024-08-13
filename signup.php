<?php

@include 'connection.php';

if ($conn === null) {
    die('Database connection failed');
}

if (isset($_POST['submit'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0) {
      $error[] = 'User already exists!';
   } else {
      if ($pass != $cpass) {
         $error[] = 'Password not matched!';
      } else {
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login.php');
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
   <title>Register Form</title>

   <!-- Custom CSS File -->
   <link rel="stylesheet" href="format.css">
</head>
<body>
   
<div class="box">
   <div class="container">
      <header>Register Now</header>
      <?php
      // Display errors if any
      if(!empty($error)){
         foreach($error as $err){
            echo '<span class="error-msg">'.$err.'</span>';
         }
      }
      ?>
      <form action="" method="post" class="input-field">
         <div class="input-field">
            <input type="text" name="name" required placeholder="Enter your name" class="input">
            <i class="bx bx-user"></i>
         </div>
         <div class="input-field">
            <input type="email" name="email" required placeholder="Enter your email" class="input">
            <i class="bx bx-envelope"></i>
         </div>
         <div class="input-field">
            <input type="password" name="password" required placeholder="Enter your password" class="input">
            <i class="bx bx-lock-alt"></i>
         </div>
         <div class="input-field">
            <input type="password" name="cpassword" required placeholder="Confirm your password" class="input">
            <i class="bx bx-lock-alt"></i>
         </div>
         <select name="user_type" class="input">
            <option value="user">User</option>
            <option value="admin">Admin</option>
         </select>
         <input type="submit" name="submit" value="Register Now" class="submit">
         <div class="bottom">
            <div class="left">
               <p>Already have an account? <a href="login.php">Login Now</a></p>
            </div>
         </div>
      </form>
   </div>
</div>

</body>
</html>