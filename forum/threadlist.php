<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>iDiscuss-coding forum</title>
    <style>
    #ques {
        min-height: 433px;
    }
    </style>
    <?php include("partials/dbconnect.php")?>
</head>

<body>
    <?php include("partials/header.php")?>

    <?php  
      $id = $_GET['catid'];
      $sql = "SELECT * FROM `categories` WHERE `category id`=$id";
      $result = mysqli_query($conn,$sql);

      


      while ($row = mysqli_fetch_assoc($result)) {
       //    echo $row['category name'];
       $catname = $row['category name'];
       $catdesc = $row['category description'];
       

      }
    ?>


    <?php
    $showalert = false;
    if ($_SERVER['REQUEST_METHOD']=='POST') {
      $th_title = $_POST['title'];
      $sno = $_POST['sno'];
      $th_description = $_POST['desc'];
      $sql = "INSERT INTO `threads` ( `thread title`, `thread description`, `thread cat id`, `thread user id`, `datetime`) VALUES ( '$th_title', '$th_description', '$id', ' $sno', current_timestamp())";
      $result = mysqli_query($conn,$sql);
      $showalert = true;
    }

    if ($showalert) {
       echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
       <strong>Success!</strong> Your thread has been inserted.
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>';   
      
      }


?>


    <!-- jambotron starts here -->


    <div class="container ">
        <div class="container-fluid  p-5 bg-light">
            <h1 class="display-4"> welcome to
                <?php echo $catname; ?>
            </h1>
            <p class="lead ">
                <?php echo $catdesc; ?>
            </p>
            <hr class="my-4 ">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
                <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>

    </div>


<?php  
   if (isset ($_SESSION['loggedin'])  && $_SESSION['loggedin'] == true) {
       echo '<div class="container">

        <h2 class="my-4">Start a discussion</h2>
        <form action="' . $_SERVER["REQUEST_URI"] . '" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Problem title</label>
                <input type="text" class="form-control" id="title" aria-describedby="titlehelp" name="title">
                <div class="form-text">keep your problem title as crisp and short as possible.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Elaborate your concern</label>
                <input type="hidden" name="sno" value="'. $_SESSION["sno"] . '">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="desc" name="desc"
                        style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Comments</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>';
}

else {
    
    echo 
   ' <div class="container">
   <h2 class="my-4">Start a discussion</h2>
    <p class="lead">
    You are not loggedin!!please login to be able to start a discussion.
</p></div>';
}
    ?>





    <!-- browse questions section -->

    <div class="container  my-4" id="ques" >

        <h2 class="my-4">Browse Questions</h2>





        <?php  
      $id = $_GET['catid'];
      $sql = "SELECT * FROM `threads` WHERE `thread cat id`=$id";
      $result = mysqli_query($conn,$sql);


      
      $noresult = true;

      while ($row = mysqli_fetch_assoc($result)) {
       //    echo $row['category name'];
       $noresult = false;
      $id = $row['thread id'];
      $title = $row['thread title'];
      $desc = $row['thread description'];

      $title = str_replace("<", "&lt;", "$title");
      $title = str_replace(">", "&gt;", "$title");

     

      $desc = str_replace("<", "&lt;", "$desc");
      $desc = str_replace(">", "&gt;", "$desc");


      $thread_user_id =$row['thread user id'];
      $sql2 = "SELECT user_email FROM `users` Where sno=$thread_user_id";
      $result2 = mysqli_query($conn,$sql2);
      $row2 = mysqli_fetch_assoc($result2);
     
      echo '    
     
      <div class="d-flex">
     
      <img src="img/userdefault.png" alt=".." class= "me-3 rounded-circle" style="width: 60px; height: 60px;"/>
      
      
      <div class="my-2">
      Asked By :' . $row2['user_email'] . '
      <h5><a class ="text-dark" href="thread.php?threadid=' . $id . '">
       ' . $title . '</a>
      </h5>
      ' . $desc . '
     </div>
       </div>';
       

       }

    //    echo var_dump($noresult);

      if ($noresult) {
        echo'
        <div class="container-fluid  p-5 bg-light">
            <p class="display-4">No threads found!! </p>
            <p class="lead ">
                <?php echo $catdesc; ?>
        </p>
        <hr class="my-4 ">
        <p>Be the first person to start a discussion.</p>

       </div>

       </div>';
      }

      ?>
 </div>
 


    <!-- footer -->
    <?php include("partials/footer.php")?>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

</body>

</html>