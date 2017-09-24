<?php
include 'connect_to_database.php'; //connect the connection page
if(empty($_SESSION)) // if the session not yet started 

   session_start();

if(!isset($_SESSION['username'])) { //if not yet logged in
   header("Location: login1.php");// send to login page
   exit;
} 
?>












<html>
<head>

<link href="c1.css" rel="stylesheet" type="text/css">
</head>
<body background="vol5.jpg">
	<br>
	<div id="header">
		<p>Contact Us:1800-800-666
		<br>
		   Email Id:<a href="#">info@copptics.com</a>
		</p>
		<center>	
		<img src="cop.gif" width="400px" height="120px" align="center"></img></center> <br>
		<div id="logn">
		<a href="sub.php"><b>Sign in Here</b></a>
	</div>
		<ul>
			<li><a href="Home.html">Home</a></li>
			<li><a href="about.html">About us</a></li>
			<li><a href="cust.html">Customer Segment</a></li>
			<li><a href="Pay.html">Payment</a></li>
			<li><a href="Tariff.html">Tariff</a></li>
			<li><a href="des.html">Contact Us</a></li>
		</ul>
	</div>
	<br><br>
<br>	<br>

	
		<div id="nav" align="left">
<br>
			<h3>Customer Segment</h3>
			<a href="Edu.html">Educational Institute</a><br>
			*Campus wifi<br>
			*Dedicated internet<br>
			*Value added services<br>
			<p>
			<a href="Resi.html">Residence</a><br>
			*Dedicated network<br>
			*Wired or a fully Wi-Fi<br>
			*Value added services <br>
			<p>
			<a href="Corp.html">Corporate</a><br>
			*Internet lease line <br>
			*Network monitoring<br>
			*Enterprise Wi-Fi<br>
			<p>
			<a href="Shop.html">Shopping Mall</a><br>
			*Voice<br>
			*Wi-fi<br>
			*Onsite support <br>
			<p>
		</div> 
			<div id="section">
<br><br>
			<center>
			Welcome <?php echo $_SESSION['username']; ?>,
 <a href="logout.php">logout</a> </center>
			</div>
			
		<div id="footer">
			Copyright © Project Management 2015
		</div>
        

</body></html>
 