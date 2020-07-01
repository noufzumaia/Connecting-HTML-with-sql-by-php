<!DOCTYPE html> 
<html>

 <head>
    <meta charset = "utf-8">
	<meta name = "descripiton" content = " First project is interface of Robot controller ">
   
   <title> First Project Robot Controller </title>
	
	<style>
	    div
		 { 
	height:700px;
	width:1380px;
	background-image: url('robot-pix.jpg');
	background-repeat:no-repeat;
	background-attachment:fexd;
    background-size: 100% 100%;
	}
		
		h1
		 {
		 color:black; 
		 text-align:center;
		 }
		
	   p
    	{
	  color: black; 
	  text-align: center;
		}
		
		h1
		{
		font-family:"Courier New", Courier, monospace;
		font-size:300% ; 
		font-weight: bold;
		line-height: 20px;
		}
		
		p
		{
		font-family:"Courier New", Courier, monospace;
		font-size:150%;
		font-weight: normal;
		line-height: 20px;
		}
		
		
		button 
		{
		font-family:"Courier New", Courier, monospace;
		font-color:white;
		font-size:35px;
		border-radius:20px;
		margin:20px;
		}
		
		#bou1
		{
		position:relative;
		top:70px;
		left:190px;
		}
		
		#bou2
		{
		position:relative;
		top:125px;
		left:0px;
		background-color:red;
		}
		
		#bou3
		{
		position:relative;
		top:180px;
		left:-190px;
		}
		
		#bou4
		{
		display:block;
		position:relative;
		top:40px;
		left:70px;
		}
		
		#bou5
		{
		position:relative;
		top:-40px;
		left:375px;
		}
	</style>
	
 </head>

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
   
  <body>
  <form  action="Runpage.php" method="post">
  <div> <div>
   <br>
   <h1> ROBOT CONTROLLER </h1>
   <p> First project with <a href = "hhttps://www.s-m.com.sa/" target = "_blank"> <b>'أساليب الذكية' </b>  </a> </p>
  
	<button id="bou1">Forwords</button>
	<button id="bou2">Stop</button>
	<button id="bou3">Backwords</button>
	<button id="bou4">Left</button>
    <button id="bou5">Right</button>



	
  </body>

</html>
