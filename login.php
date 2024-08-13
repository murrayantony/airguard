<?php
// Include connection and start session
@include 'connection.php';
session_start();

// Initialize $error array
$error = [];

// Process form submission
if(isset($_POST['submit'])){
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']); // Avoid using MD5 for password hashing, consider more secure options

   // Modify your SQL query to use the correct column names
   $select = "SELECT * FROM user_form WHERE email = '$email' AND password = '$pass'";
   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){
         $_SESSION['admin_name'] = $row['name'];
         header('Location: admin.php');
         exit();
      } elseif($row['user_type'] == 'user'){
         $_SESSION['user_name'] = $row['name'];
         header('Location: index1.php');
         exit();
      }
   } else {
      $error[] = 'Incorrect email or password!';
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Form</title>

   <!-- Custom CSS File -->
   <link rel="stylesheet" href="format.css">
</head>
<body>
    
<div class="box">
   <div class="container">
      <header>Login Now</header>
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
            <input type="email" name="email" required placeholder="Enter your email" class="input">
            <i class="bx bx-envelope"></i>
         </div>
         <div class="input-field">
            <input type="password" name="password" required placeholder="Enter your password" class="input">
            <i class="bx bx-lock-alt"></i>
         </div>
         <input type="submit" name="submit" value="Login Now" class="submit">
         <div class="bottom">
            <div class="left">
               <p>Don't have an account? <a href="signup.php">Register Now</a></p>
            </div>
         </div>
      </form>
   </div>
</div>

</body>
</html>
