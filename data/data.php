<?php
  $root = $_SERVER['DOCUMENT_ROOT'];
  require ('myconnection.php');     
  $id = $_GET['id'];
  $results = mysql_query("SELECT content FROM texts WHERE ID='$id'");   
  if( mysql_num_rows($results) > 0 )
  {
   $row = mysql_fetch_array( $results );
   echo $row['content'];
  }
  include "$root/hemelyproject/contact.html";
  require ('closemyconnection.php');  
?>