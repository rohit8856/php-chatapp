<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/css" src="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <link rel="stylesheet" type="text/css" href="css/signin.css">

    <title>New Password!</title>
</head>

<body>
    <div class="signin-form">
        <form action="" method='post'>
            <div class="form-header">
                <h2>New Password!</h2>
                <p>To my Chat</p>
            </div>
            <div class="form-group">
                <label>ENTER Password</label>
                <input type="password" class="form-control" name='pass1' placeholder="Your Password" autocomplete="off"
                    required>
            </div>

            <div class="form-group">
                <label>CONFIRM Password</label>
                <input type="password" class="form-control" name='pass2' placeholder="COnfirm Password"
                    autocomplete="off" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" name="change">Change </button>
            </div>
        </form>

    </div>
    <?php 
session_start();
include("include/connection.php");
if(isset($_POST['change'])){
$user = $_SESSION['user_email'];
$pass1= $_POST['pass1'];
$pass2= $_POST['pass2'];


if($pass1 !==$pass2){
    echo "
    <div class='alert alert-danger'>
    <strong>Confirm Password Again</strong>
    </div>
    ";
}
if($pass1 < 9 AND $pass2 < 9){
    echo "
    <div class='alert alert-danger'>
    <strong>use 9 or more characters </strong>
    </div>
    ";
}

if($pass1 == $pass2){
    $update_pass = mysqli_query($con,"update users set user_pass='$pass1' where user_email='$user'");
    session_destroy();
    echo"<script>alert('Go Ahead And Sign In')</script>";
    echo"<script>window.open('signin.php','_self')</script>";
}
}

?>   
</body>
</html>