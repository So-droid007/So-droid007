<?php
// Script to connect to the database
  
  $servername = 'localhost';
  $username = 'root';
  $password = "";
  $database = 'idiscuss';


  $conn = mysqli_connect($servername,$username,$password,$database);
 
// if ($conn) {
//     echo "success";
// }


?>






















<div class="row">
    
    <?php  
    
    $sql = "SELECT * FROM `categories`";
    $result = mysqli_query($conn,$sql);
    

       while ($row = mysqli_fetch_assoc($result)) {
        //    echo $row['category name'];
        //    echo $row['category description'];
        //    echo $row['category id'];
        $cat = $row['category name'];
        echo`<div class="col-md-4">

        <div class="card" style="width: 18rem;">
            <img src="https://source.unsplash.com/1600x900/?nature,water" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>`;



      
       }
    
    
    ?>
    
    </div>