<?php

session_start();

include("include/connection.php");

if (isset($_POST['sign_in'])) {

    //Grabbing the data
    $email = htmlentities(mysqli_real_escape_string($connect, $_POST['email']));
    $pswd = htmlentities(mysqli_real_escape_string($connect, $_POST['pass']));
    
    $select_query = "SELECT * FROM users WHERE user_email='$email' AND user-pass='$pswd'";

    $query = mysqli_query($con, $select_query);
    $check_user = mysqli_num_rows($query);

    if ($check_user == 1) {
        $_SESSION['user_email'] = $email;

        $update_msg = mysqli_query($connect, "UPDATE users SET log_in = 'Online' WHERE user_email = '$email'");

        $user = $_SESSION['user_email'];
        $get_user = "SELECT * FROM users WHERE user_email='$user'";
        $run_user = mysqli_query($connect, $get_user);
        $row = mysqli_fetch_array($run_user);

        $user_name = $row['user_name'];

        echo "<script>window.open('home.php?user_name=$user_name', '_self')</script>";
    }
    else {
        echo "
            <div>
                <strong>Incorrect email or password</strong>
            </div>
        ";
    }
}

?>