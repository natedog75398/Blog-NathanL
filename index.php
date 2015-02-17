<link type='text/css' rel='stylesheet' href='css/bootstrap-theme.css'>
    <link type='text/css' rel='stylesheet' href='css/bootstrap.css'>
    <link type='text/css' rel='stylesheet' href='css/index.css'>

  <div class="container"> 
    <div class="jumbotron">
        
  <h1>welcome to MTGz blog</h1>
  
  <p><a class="btn btn-primary btn-md" href="login.php" role="button">Login</a></p>
  
  <p><a class="btn btn-primary btn-md" href="register.php" role="button">Register</a></p>
  
  <p><a class="btn btn-primary btn-md" href="controller/logout-user.php" role="button">Logout</a></p>
  
   </div>
        </div>

<?php
   
    require_once (__DIR__ . "/controller/login-verify.php");

    require_once (__DIR__ . "/view/header.php");

    if(authenticateUser()){
         require_once(__DIR__ . "/view/navigation.php");
    }

    require_once (__DIR__ . "/controller/create-db.php");

    require_once (__DIR__ . "/view/footer.php");

    require_once (__DIR__ . "/controller/read-posts.php");
?>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
       <script src="js/bootstrap.min.js"></script>
    
© 2015 Microsoft Terms Privacy & cookies Developers English (United States)
