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

include("partials/handle_signup.php");
include("partials/handle_login.php");

if (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true") {
  echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Signup successful
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
elseif (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "false") {
  echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> Username already exists
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
else {
  if (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "false1") {
    echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> Password do Not match
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
}



if (isset($_GET['loginsuccess']) && $_GET['loginsuccess'] == "true") {
  echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You are logged in
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
elseif (isset($_GET['loginsuccess']) && $_GET['loginsuccess'] == "false") {
  echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> Invalid credentials
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
elseif (isset($_GET['loginsuccess']) && $_GET['loginsuccess'] == "false1") {
  echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> Invalid credentials
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}






 ?>


    <!-- slider starts from here -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/2400x800/?programming,coding" class="d-block w-100"
                    alt="https://source.unsplash.com/1600x900/?programming,coding">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/2400x800/?programming,microsoft" class="d-block w-100"
                    alt="https://source.unsplash.com/1600x900/?programming,coding">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/2400x800/?programming,developing" class="d-block w-100"
                    alt="https://source.unsplash.com/1600x900/?programming,coding">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- categories container starts hear -->

    <div class="container" id="ques">

        <h2 class="text-center my-3 ">iDiscuss - Browse categories</h2>
        <div class="row">



            <?php 
       $sql = "SELECT * FROM `categories`";
       $result = mysqli_query($conn,$sql);


       while ($row = mysqli_fetch_assoc($result)) {
        //    echo $row['category name'];
        $cat = $row['category name'];
        $desc = $row['category description'];
        $id = $row['category id'];


        echo '<div class="col-md-4 my-2">

        <div class="card" style="width: 18rem;">
            <img src="https://source.unsplash.com/1600x900/?' . $cat . ',coding" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><a href="threadlist.php?catid=' . $id . '">' . $cat . '</a></h5>
                <p class="card-text">' . substr($desc,0,80) .'....</p>
                <a href="threadlist.php?catid=' . $id . '" class="btn btn-primary">View Threads</a>
            </div>
        </div>
     </div>';
       }
        ?>



        </div>
    </div>





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