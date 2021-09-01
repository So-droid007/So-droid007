




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="style.css">


    <?php include("_dbconnect.php")?>
    
    
  
  
    



    <title>User-Records</title>

 
   

</head>

<body>
    <h1>Welcome To Employee Portal</h1>

    <div class="container" id="datatable">


        <table id="myTable">
            <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        Sl No.
                    </th>
                    <th>
                        First Name
                    </th>
                    <th>
                        Last Name
                    </th>
                    <th>
                        Email ID
                    </th>
                    <th>
                        Country
                    </th>
                    <th>
                        Action
                    </th>
                </tr>

            </thead>
            <tbody>
        <?php 

        $sql = "SELECT * FROM `user records`";
        $result = mysqli_query($conn,$sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $sno = $row['sno'];
            $name = $row['First Name'];
            $last_name = $row['Last Name'];
            $mail = $row['Mail ID'];
            $country = $row['Country'];

            echo"<tr>
                <td><input type='radio' name='first' class='rdbutton'></td>
                <td>".$sno."</td>
                <td>".$name."</td>
                <td>".$last_name."</td>
                <td>".$mail."</td>
                <td>".$country."</td>
                <td> <button> <a href='editdata.php' class='edbutton' id=" . $row['sno'] .">Edit</a></button> </td>
                
                
                
            </tr>";


         
        }
        
        
        
        
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['snoedit'])) {
                    echo "yes";
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $mail = $_POST['mailid'];
                    $country = $_POST['country'];
                    $sno = $_POST['snoedit'];
    
                    $sql1 = " UPDATE `user records` SET `First Name` = '$fname', `Last Name` = '$lname', `Mail ID` = '$mail', `Country` = '$country' WHERE `user records`.`sno` = $sno ";
                    $result = mysqli_query($conn,$sql1);
                }
               
                
              
            }
                
       
        
    
    
    
    
    
            ?>



            </tbody>
        </table>
    </div>
    <hr>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>

    <script>
        
        radio = document.getElementsByClassName('rdbutton')
        Array.from(radio).forEach((element)=>{
            element.addEventListener("click",(e)=>{
                console.log('radio',);
                tr = e.target.parentNode.parentNode.parentNode.parentNode;
                acion = tr.getElementsByClassName('edbutton')[0]
                console.log(acion)
                snoedit.value = e.target.id;
                // console.log(e.target.id);
               
             
                
                
         
        
            })
        })
        

</script>
  
</body>

</html>