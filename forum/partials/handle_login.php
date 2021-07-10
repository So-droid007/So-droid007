<?php


 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     include("dbconnect.php");
     
    $loginemail = $_POST['loginemail'];
    $loginpassword = $_POST['loginpassword'];


    $sql = "SELECT * FROM `users` WHERE user_email = '$loginemail'";
    $result = mysqli_query($conn,$sql);
    $numrows = mysqli_num_rows($result);

    if ($numrows==1) {

        $row = mysqli_fetch_assoc($result);

        if (password_verify($loginpassword,$row['user_password'])) {
           
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['sno'] =$row['sno'];
            $_SESSION['useremail'] = $loginemail;
            header("location:/forum/index.php?loginsuccess=true");
        }
                else {
                    header("location:/forum/index.php?loginsuccess=false");
                   }
        
    }

    else {
        header("location:/forum/index.php?loginsuccess=false1");
         }



 }

?>