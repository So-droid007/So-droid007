<!-- Modal -->
<div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="loginmodalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginmodalLabel">Login to iDiscuss</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action = "/forum/partials/handle_login.php" method ='POST'>
                    <div class="mb-3">
                        <label for="loginemail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="loginemail" name="loginemail" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="loginpassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="loginpassword" name="loginpassword">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>











<?php

// if($_SERVER["REQUEST_METHOD"] == "POST"){
//     include("dbconnect.php");
//     // if ($result) {
//     //     echo "true";
//     // }
//     $loginemail = $_POST['loginemail'];
//     $loginpassword = $_POST['loginpassword'];

//     $sql =  "SELECT * from `users` WHERE user_email = '$email'";
//     $result = mysqli_query($conn, $sql);
//     $numRows = mysqli_num_rows($result);

//     if ($numRows==1) {
//         $row = mysqli_fetch_assoc($result);
//         if (password_verify($loginpassword,$row['user_password'])) {
//             session_start();
//             $_SESSION['loggedin'];
//             $_SESSION['sno'] = $row['sno'];
//             $_SESSION['username'] = $loginemail;
//             header("location:/forum/index.php?loginsuccess=true");
//         }
//         else {
//             header("location:/forum/index.php?loginsuccess=false");
//         }
//     }
//     else {
//         header("location:/forum/index.php?loginsuccess=false");
//     }
   


// }
    

?>