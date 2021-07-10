<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include("dbconnect.php");

    $signupemail = $_POST['signupemail'];
    $signuppassword = $_POST['signuppassword'];
    $signupcpassword = $_POST['signupcpassword'];


    $existssql =  "SELECT * from `users` WHERE user_email = '$signupemail'";
    $result = mysqli_query($conn,$existssql);
    $numrows = mysqli_num_rows($result);
    if ($numrows>0) {

        header("location:/forum/index.php?signupsuccess=false");
    }

    else {
        if ($signuppassword == $signupcpassword) {
            $hash = password_hash($signuppassword,PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`user_email`, `user_password`, `timestamp`) VALUES ('$signupemail', '$hash', current_timestamp());";
            $result = mysqli_query($conn,$sql);
            if ($result) {
                $showalert = true;
                header("location:/forum/index.php?signupsuccess=true");
            }
        }

        else {
            
            header("location:/forum/index.php?signupsuccess=false1");
        }
    }



}

?>



