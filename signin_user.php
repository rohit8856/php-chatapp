<?php
session_start();
include('include/connection.php');

if(isset($_POST['sign_in'])){
    $email  = htmlentities(mysqli_real_escape_string($con,$_POST['sign_email']));
    $pass  = htmlentities(mysqli_real_escape_string($con,$_POST['sign_password']));

$select_user = "select * from users where user_email='$email' AND user_pass='$pass'";
$query = mysqli_query($con,$select_user);
$check_user = mysqli_num_rows($query);

if($check_user == 1){
    $_SESSION['user_email']=$email;
    $update_msg = mysqli_query($con,"update users set log_in='online' where user_email='$email'");
    $user_email = $_SESSION['user_email'];
    $get_user = "Select * from users where user_email='$user_email'";
    $run_user = mysqli_query($con,$get_user);
    $row =mysqli_fetch_array($run_user);
    
    $user_name =$row['user_name'];
    // $user_email =$row['user_email'];
    echo "<script>window.open('homs.php?user_name=$user_name','_self')</script>";
}
else{
    echo'
    <div class="alert alert-danger">
    <strong> Check your email and password.</strong>
    </div>';
}
}
?>