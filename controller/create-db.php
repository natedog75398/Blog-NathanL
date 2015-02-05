<?php
     require_once(__DIR__ . "/../model/database.php");

     $connection = new mysqli($host, $username, $password);
     // my connection for mysqli
     
     if($connection->connect_error) {
         die("Error: ".$connection->connect_error );
     }  
   
     
     $exists = $connection->select_db($database);
     
     if(!$exists) {
         $query = $connection->query("CREATE DATABASE $database");
         
         
      if($query) {
          echo "sucessful create database" . $database;
      }
     }
     else {
     echo "Database already exists.";
         
     }
     // query doing well
     $query = $connection->query("CREATE TABLE  posts ("
             ."id int(11) NOT NULL AUTO_INCREMENT,"
             ."title varchar(255)NOT NULL,"
             ."post text NOT NULL,"
             ."PRIMARY KEY (id))");
     
     if($query){
      echo "Succesfully create table: posts";
      
     }
     else {
         echo "<p>$connection->error</p>";
     }
         
     $connection->close();