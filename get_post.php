<?php
    DEFINE("TITLE","GET &amp; POST");    
    if(isset($_POST["post_submit"])){
        function validateFormData($formData){
            $formData = trim(stripslashes(htmlspecialchars($formData)));
            return $formData;
        }
        
        if(!$_POST["post_name"]){
            $nameError = "Please Enter your name <br>";
        }else{
            $name = validateFormData($_POST["post_name"]);
        }
        
        if(!$_POST["post_email"]){
            $emailError = "Please Enter your email <br>";
        }else{
            $email = validateFormData($_POST["post_email"]);
        }
    }
    
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
         
         <h4>Submitted via $_GET</h4>
         <form action="form_get.php" method="get">
            <input type="text" placeholder="Name" name="name">
            <input type="text" placeholder="Email" name="email">
            <input type="submit" name="form_submit">
         </form>
         
         <hr>
         <h4>Submitted via $_POST</h4>
         <form action="form_post.php" method="post">
            <input type="text" placeholder="Name" name="post_name">
            <input type="text" placeholder="Email" name="post_email">
            <input type="submit" name="post_submit">
         </form>
         
         <h4>Submitted to current page</h4>
         <p class="text-danger">* Required Field</p>
         <form action="<?php echo htmlspecialchars($_SEVER["PHP_SELF"]); ?>" method="post">
            <small class="text-danger">* <?php echo $nameError; ?></small>
            <input type="text" placeholder="Name" name="post_name">
            <small class="text-danger">* <?php echo $emailError; ?></small>
            <input type="text" placeholder="Email" name="post_email">
            <input type="submit" name="post_submit">
         </form>
         
         <hr>
         
         <?php
            if(isset($_POST["post_submit"])){
                echo "<h4>Your Info</h4>";
                echo "$name <br>";
                echo "$email <br>";
            }
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