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
    .container{
        min-height: 100vh;
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


    <!-- search results starts from here -->

    <div class="container my-5">
    <h1>Search results for "<?php echo $_GET['search']  ?>"</h1>
    <div class="container1">

    <h3><a href="categories/cdscs.php" class="text-dark">unable to install python</a></h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quisquam blanditiis non quibusdam tempora atque ipsam, praesentium laborum dolores harum ad sequi, doloribus minus facilis, quam accusantium tenetur? Officiis, accusantium.</p>
    <h3><a href="categories/cdscs.php" class="text-dark">unable to install python</a></h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quisquam blanditiis non quibusdam tempora atque ipsam, praesentium laborum dolores harum ad sequi, doloribus minus facilis, quam accusantium tenetur? Officiis, accusantium.</p>
    <h3><a href="categories/cdscs.php" class="text-dark">unable to install python</a></h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quisquam blanditiis non quibusdam tempora atque ipsam, praesentium laborum dolores harum ad sequi, doloribus minus facilis, quam accusantium tenetur? Officiis, accusantium.</p>
    <h3><a href="categories/cdscs.php" class="text-dark">unable to install python</a></h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quisquam blanditiis non quibusdam tempora atque ipsam, praesentium laborum dolores harum ad sequi, doloribus minus facilis, quam accusantium tenetur? Officiis, accusantium.</p>
    <h3><a href="categories/cdscs.php" class="text-dark">unable to install python</a></h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quisquam blanditiis non quibusdam tempora atque ipsam, praesentium laborum dolores harum ad sequi, doloribus minus facilis, quam accusantium tenetur? Officiis, accusantium.</p>
    <h3><a href="categories/cdscs.php" class="text-dark">unable to install python</a></h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quisquam blanditiis non quibusdam tempora atque ipsam, praesentium laborum dolores harum ad sequi, doloribus minus facilis, quam accusantium tenetur? Officiis, accusantium.</p>
    <h3><a href="categories/cdscs.php" class="text-dark">unable to install python</a></h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quisquam blanditiis non quibusdam tempora atque ipsam, praesentium laborum dolores harum ad sequi, doloribus minus facilis, quam accusantium tenetur? Officiis, accusantium.</p>
    <h3><a href="categories/cdscs.php" class="text-dark">unable to install python</a></h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quisquam blanditiis non quibusdam tempora atque ipsam, praesentium laborum dolores harum ad sequi, doloribus minus facilis, quam accusantium tenetur? Officiis, accusantium.</p>
    <h3><a href="categories/cdscs.php" class="text-dark">unable to install python</a></h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quisquam blanditiis non quibusdam tempora atque ipsam, praesentium laborum dolores harum ad sequi, doloribus minus facilis, quam accusantium tenetur? Officiis, accusantium.</p>
    <h3><a href="categories/cdscs.php" class="text-dark">unable to install python</a></h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quisquam blanditiis non quibusdam tempora atque ipsam, praesentium laborum dolores harum ad sequi, doloribus minus facilis, quam accusantium tenetur? Officiis, accusantium.</p>
    <h3><a href="categories/cdscs.php" class="text-dark">unable to install python</a></h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quisquam blanditiis non quibusdam tempora atque ipsam, praesentium laborum dolores harum ad sequi, doloribus minus facilis, quam accusantium tenetur? Officiis, accusantium.</p>
    <h3><a href="categories/cdscs.php" class="text-dark">unable to install python</a></h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quisquam blanditiis non quibusdam tempora atque ipsam, praesentium laborum dolores harum ad sequi, doloribus minus facilis, quam accusantium tenetur? Officiis, accusantium.</p>
    <h3><a href="categories/cdscs.php" class="text-dark">unable to install python</a></h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quisquam blanditiis non quibusdam tempora atque ipsam, praesentium laborum dolores harum ad sequi, doloribus minus facilis, quam accusantium tenetur? Officiis, accusantium.</p>

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