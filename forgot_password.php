
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script  type="text/css" src ="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
    <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <link rel="stylesheet" type="text/css" href="css/signin.css">

    <title>Forgot PAssword!</title>
  </head>
  <body>
  <div class="signin-form">
  <form action="" method='post'>
  <div class="form-header">
   <h2>Forgot Password</h2>
   <p>To my Chat</p>
  </div>
<div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name='email' placeholder="email" autocomplete="on" required>
</div>

<div class="form-group">
    <label>BEst Friend Name </label>
    <input type="text" class="form-control" name='bff' placeholder="Close to YOu.." autocomplete="off" required>
</div>


<div class="form-group">
    <button type="submit" class="btn btn-primary btn-block btn-lg" name="submit">Submit</button>
</div>
  </form>
<div class="text-center small" style="color: bisque;">Ack To sign Int<a href="signin.php">Click Here</a></div>

  </div>  
<?php 
session_start();
include("include/connection.php");
if(isset($_POST['submit'])){
    $email = htmlentities(mysqli_real_escape_string($con,$_POST['email']));
    $recovery_account = htmlentities(mysqli_real_escape_string($con,$_POST['bff']));

    $select_user = "select * from users where user_email='$email' AND forgotten_answer='$recovery_account'";

    $query = mysqli_query($con,$select_user);

    $check_user = mysqli_num_rows($query);

    if($check_user==1){
        $_SESSION['user_email']=$email;
        echo"<script>window.open('create_password.php','_self')</script>";
    }
    else{
        echo"<script>alert('Your email or bff name is incorrect')</script>";
        echo"<script>window.open('forgot_password.php','_self')</script>";

    }


}
?>


    <!-- Optional JavaScript
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->
  </body>
</html>

