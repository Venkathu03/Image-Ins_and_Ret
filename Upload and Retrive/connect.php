<?php

   $dbHost     = "localhost";
   $dbusername = "root";
   $password   = "";
   $dbname     = "highbrow";    

   $con = new mysqli($dbHost, $dbusername, $password, $dbname);

   if($con->connect_error) {
    die("connetion failed : ". $con->connect_error);
   }

?>