<?php
include("partials/dbconnect.php");
session_start();
echo'  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
  <a class="navbar-brand" href="index.php">iDiscuss</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>



      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      Dropdown
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
      
      $sql = "SELECT `category name`,`category id` FROM `categories`";
      $result = mysqli_query($conn,$sql);
      while ($row = mysqli_fetch_assoc($result)) {
        echo '<li><a class="dropdown-item" href="/forum/threadlist.php?catid=' . $row['category id'] . '">' . $row['category name'] . '</a></li>';
      }

 echo ' 
          
           
            
          </ul>
        </li>';



     echo ' <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>
    <div class="d-flex" >';

    if (isset ($_SESSION['loggedin'])  && $_SESSION['loggedin'] == true) {
      echo '<form class="d-flex" action = "search.php" method ="GET">
      <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success" type="submit">Search</button>
      <a class ="text-light my-2 mx-2">'  . $_SESSION['useremail'] . '</a></form>
    <a href ="partials/logout.php" class="btn btn-outline-success mx-2">Logout</a>';
    }





    else {
      echo '<form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form>
      <button class="btn btn-outline-success mx-2"  data-bs-toggle="modal" data-bs-target="#loginmodal">Login</button>
      <button class="btn btn-outline-success"  data-bs-toggle="modal" data-bs-target="#signupmodal">SignUp</button>
      
      </div>
    ';
    }
    
 echo ' </div>
</div>
</nav>';

include("signupmodal.php");
include("loginmodal.php");


?>



