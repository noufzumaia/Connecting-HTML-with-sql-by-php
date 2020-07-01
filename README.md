# Connecting-HTML-with-sql-by-php

<?php
$host="127.0.0.1 ";
$user="root";
$password="";
$database= "nouf";

$connect= mysqli_connect('127.0.0.1','root' , '', 'nouf');
if(mysqli_connect_errno()) {
die("cannot connect database".mysqli_connect_errno());
}
else {
 echo 'Database is Connected';
 }
 
?>
<html>
 <head>
  <meta charset="UTF-8">
  <title> </title>
  </head>
  <body>
  <?php
  
  ?>
  </body>
  </html>
  
  <?php
  mysqli_close($connect);
  ?>
