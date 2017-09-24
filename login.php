<?php
error_reporting(0);
//echo "hello";
if(isset($_REQUEST['submit']))
{
error_reporting(0);
$conn = mysql_connect("localhost","root","");
mysql_select_db("tour",$conn);
$result = mysql_query("SELECT * FROM b_detail");
while($row = mysql_fetch_array($result)) {
	$pass= $row["pass"];
	$email=$row["email_id"];
	//echo $email;
//	echo"<br>".$_POST["txt_email"];
	if ($email== $_POST["txt_email"] and $pass==$_POST["txt_pass"]  )
	{
//header ('Location:voteloginpage.php?txt='.$row["v_nstate"].'&em='.$row["v_emailid"]);
	$message = "welcome user";
	
	echo "sucess";
	echo "<script> alert('sucess')</script>";
	header ('Location:bp.php');
	$i=1;
	}
	//if ($email==$_POST['txt_uname'] and $ena==0  ) 
	//{
			
	//	echo "<script> alert('THERE IS NO VOTING FOR UR STATE')</script>";
	//}
	// if($row["email_id"]!=$_POST['txt_email'] ) 
	//{
	//	
	//}
}
if ($i!=1)
{
	echo "<script> alert('wrong user id and password')</script>";
}
	
		
	

}
?>

<html>
<head>

<link href="c1.css" rel="stylesheet" type="text/css">
</head>
<body  background="vol5.jpg">
			 <marquee behavior=alternate bgcolor="#000000"><b><i><a href=contectus.php><font color="White">Devloped By :-Supreeta Desai & Rupali Chaughule  </a></i></b></font></marquee>                          

	<br><br>
	<div id="header">
		
		<center>	
		<img src="tcollage.jpg" width="1050px" height="120px" align="center"></img></center> <br>
		<div id="logn">
		
		
		
		
		
		
		
		
		
		
		
		<ul>
		<a href="login.php"><b> LOG IN</b></a>
		<a href="home.php"><b> HOME &nbsp;&nbsp;|&nbsp;&nbsp;</b></a>
		</ul>
	</div>
		<ul><center>
			<li><a href="Home.php">HOME</a></li>
			<li><a href="re.php">BOOKING</a></li>
			<li><a href="pack.php">PACKAGES</a></li>
				
			<li><a href="hotels.php">HOTELS</a></li>
		<li><a href="feed.php">FEEDBACK</a></li>
			<li><a href="contact.php">CONTACT US</a></li>
			
</center>
		</ul>
	</div>
	<br><br>
<br>	<br>

	
		
		<p>
<br>
    
<div class="login"  align="center">
  <form  method="post"  >

<br>
    <label>UserName
      <input type="text" name="txt_email" />
    </label>
    <p>
      <label>Password
      <input type="password" name="txt_pass" />
      </label>
    </p>
   <a rel="facebox" href=recover.php>Forgot Password? </a>
    <p>
      <label>
      <input type="submit" name="submit" value="submit" />
      </label>
    </p>
  </form>
</div>

        



					
             </p>

			
		</div> 
			<div id="section">

<br><br>        
   

			
			
			</div>
			   
		<div id="footer">
			Copyright 2016 © Tourism Management
		</div>
        

</body></html>
 