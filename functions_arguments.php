<?php
    DEFINE("TITLE","Functions &amp; Arguments");    
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
        
     <main class="container">
        <h1><?php echo TITLE; ?></h1>
         
    
         
         <?php
            
            $a = 0;
            function myFirstFunction(){
                do{
                    echo "$a &nbsp;";
                    $a++;
                }while($a <= 100);
                echo "<br>";
            }
         
            myFirstFunction();
            
            function mySecondFunction($a){
                 do{
                    echo "$a &nbsp;";
                    $a++;
                }while($a <= 10);
               echo "<br>"; 
                
            }
         
            mySecondFunction(5);
            
            function addTogether($num1,$num2){
                $total=$num1+$num2;
                echo "$num1 + $num2 = $total";
            }
         
            addTogether(39,128);
         
         ?>
                
    </main>
        
        
        
        
        <!-- Bootstrap js -->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="//code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
        <script src="jquery-ui-1.12.1/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    </body>
    
    
    
</html>