<?php
    DEFINE("TITLE","PHP Arrays")
?>



<!DOCTYPE html>


<html>
    <head>
         <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/css/bootstrap-grid.min.css" rel="stylesheet">
        
        <title><?php echo TITLE; ?></title>
    </head>
    
    <body>
    
        <div class="container">
            <h1><?php echo TITLE;?></h1>
            <?php
            
                // Simple Variables
                $username = "saadnadeem";
                $fullname = "Saad Nadeem";
                $age = 21;
                $gender = "male";
                $city = "Bahwalpur";
            
                
                // Simple Arrays
                $user = array(
                    "saadnadeem",
                    "Saad Nadeem",
                    21,
                    "male",
                    "Bahawalpur"
                );
                
                // Display the values of the array
                echo $user[0]."<br>";
                echo $user[1]."<br>";
                echo $user[2]."<br>";
                echo $user[3]."<br>";
                echo $user[4]."<br>";
            
                // ASSOCIATIVE ARRAYS
            
                $people = array(
                    "username" => "saadnadeem",
                    "fullname" => "Saad Nadeem",
                    "age" => 21,
                    "gender" => "male",
                    "city" => "Bahawalpur",
                );
            
                echo $people["username"]."<br>";
                echo $people["fullname"]."<br>";
                echo $people["age"]."<br>";
                echo $people["gender"]."<br>";
                echo $people["city"]."<br>";
            
            
            
                // MULTI-DIMENSIONAL ARRAY
            
                $employees = array(
                
                    array(
                        "username" => "saadnadeem",
                        "fullname" => "Saad Nadeem",
                        "age" => 21,
                        "gender" => "male",
                        "city" => "Bahawalpur"
                        
                    ),
                    
                    array(
                         "username" => "ammar",
                        "fullname" => "Ammar Ahmad",
                        "age" => 20,
                        "gender" => "male",
                        "city" => "Gujranwala"
                        
                    ),
                );
            
            
                // echo the multi-dimensional array
                echo "<hr><br>";
                echo $employees[0]["age"];

            ?>
            
        </div>
        
        
        
        
        
        <!-- Bootstrap js -->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    </body>
    
    
    
</html>