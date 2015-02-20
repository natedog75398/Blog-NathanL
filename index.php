<link type='text/css' rel='stylesheet' href='css/bootstrap-theme.css'>
<link type='text/css' rel='stylesheet' href='css/bootstrap.css'>

<link rel='shortcut icon' href='http://www.fatescustomz.com/wp-content/uploads/2014/08/MTGz-Sticker-copy.jpg'>



<div class="container">
<div class="jumbotron">
<div class="dropdown">
    
    <h1> Welcome to the mtgz blog</h1>
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
    Dropdown
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="login.php">Login to mtgz blog</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="register.php">register for mtgz blog</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="controller/logout-user.php">Logout of the mtgz blog</a></li>
  </ul>
</div>
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
    

