<?php

     $sever_name="localhost";
     $user_name="root";
     $password="";
     $database="emp_db";
 
     $connection  = new mysqli($sever_name , $user_name , $password , $database);
 
     if ($connection->connect_error) {
         die("Error connecting to server");
     }
     else{
         echo "Connection ok";
     }

?>