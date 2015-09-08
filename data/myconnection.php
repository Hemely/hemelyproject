<?php
  $username = "local";
  $password = "local";
  $hostname = "localhost"; 

  //connection to the database
  $dbhandle = mysql_connect($hostname, $username, $password);

  $selected = mysql_select_db("hempra",$dbhandle) 
    or die("Could not select examples");
?>