
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/signup.css">

    <title>Create New Account!</title>
  </head>
  <body>
  <div class="signup-form">
  <form action="" method='post'>
  <div class="form-header">
   <h2>Sign UP Here</h2>
   <p>To Chat With Your Connection</p>
  </div>
  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name='user_name' placeholder="Example:Rohit" autocomplete="off" required>
</div>

<div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name='user_pass' placeholder="Your Password" autocomplete="off" required>
</div>
<div class="form-group">
    <label>Email Addresss</label>
    <input type="email" class="form-control" name='user_email' placeholder="rohit@gmail.com" autocomplete="off" required>
</div>

<div class="form-group">
    <label>Country</label>
   <select class="form-control" name="user_country" required>
    <option disabled="">Select a Country</option>
    <option>India</option>
    <option>USa</option>
    <option>UK</option>
    <option>UK</option>
    <option>cannada</option>
   </select>
</div>

<div class="form-group">
    <label>Gender</label>
   <select class="form-control" name="user_gender" required>
    <option disabled="">Select Gender</option>
    <option>Male</option>
    <option>Female</option>
    <option>Other</option>
   </select>
</div>

<div class="form-group">
    <label class='checkbox-inline'><input type='checkbox' required>I Accept the <a href='#'>Terms of User</a>&amp;,<a href='#'>PRivacy policy</a></label>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign Up Here </button>
    <div class="text-center " style="color:black">Already Have a Account then<a href="signin.php">Login </a></div>
</div>
<?php include('signup_user.php');?>
  </form>
  </div>  



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>

