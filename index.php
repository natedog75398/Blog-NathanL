<html>
    <head>
<link type='text/css' rel='stylesheet' href='css/bootstrap-theme.css'>
<link type='text/css' rel='stylesheet' href='css/bootstrap.css'>
<link type="text/css" rel="stylesheet" href="controller/index.css">


<link rel='shortcut icon' href='http://www.fatescustomz.com/wp-content/uploads/2014/08/MTGz-Sticker-copy.jpg'>
    </head>


<body>
<div class="container">
<div class="jumbotron">
    <h1>Welcome to MTGz Blog</h1>
    
    <!-- Single button -->
    <a class="btn btn-default" href="login.php" role="button">login</a>
<a class="btn btn-default" href="controller/logout-user.php">logout</a>
<a class="btn btn-default"  href="register.php">register</a>
<a class="btn btn-default"  href="post.php">Post</a>

    
<!--<div class="btn-group">
  <button id="MTGz" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    MTGz<span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a  href="login.php">Login to mtgz blog</a></li>
    <li><a  href="register.php">register for mtgz blog</a></li>
    <li><a  href="controller/logout-user.php">Logout of the mtgz blog</a></li>
  </ul>
</div>-->

<!-- Single button -->
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    Portfolio 3 <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
      <li><a href="portfolio-3-Nathan-Lopez-master/public_html/index.html">About me</a></li>
      <li><a href="portfolio-3-Nathan-Lopez-master/public_html/project.html">Projects</a></li>
      <li><a href="portfolio-3-Nathan-Lopez-master/public_html/tech.html">Tech</a></li>
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