<?php
include ("includes/connection.php");
//getting the signup information from the signup form
if(isset($_POST['sign_up'])){
    $name=htmlentities(mysqli_real_escape_string($connection, $_POST['user_name']));
    $pass=htmlentities(mysqli_real_escape_string($connection, $_POST['user_pass']));
    $email=htmlentities(mysqli_real_escape_string($connection, $_POST['user_email']));
    $country=htmlentities(mysqli_real_escape_string($connection, $_POST['user_country']));
    $gender=htmlentities(mysqli_real_escape_string($connection, $_POST['user_gender']));
    $rand=rand(1,2);
    if($name=""){
        echo "<script>alert('name cannot be empty')</script>";
    }
    if(strlen($pass)<8){
        echo "<script>alert('password should be more than character')</script>";

    }
    $check_email= "select * from users where user_email==$email ";
    $run_email_check=mysqli_query($connection,$check_email);
    $check=mysqli_num_rows($run_email_check);
    if($check==1){
        echo "<script>alert('Email already exist, Please use a new email')</script>";
        echo "<script>window.open('signup.php','_self')</script>";

    }
    if ($rand==1){
        $profile_pic="images/profile1";
    }
    else{
        $profile_pic="images/profile2";
    }
    $insert="INSERT INTO users (user_name,user_pass,user_email,user_profile,user_country,user_gender) VALUES('$name','$pass','$email','$profile_pic','$country','$gender')";

    $query=mysqli_query($connection,$insert);
    if ($query){
        echo "<script>alert('congratulations $name, your account has been created successfully')</script>";
        echo "<script>window.open('signin.php','_self')</script>";

    }
    else{
        echo "Registration failed, Please try again";
        echo "<script>window.open('signup.php','_self')</script>";
    }

}
