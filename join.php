<?php
error_reporting(0);
echo "";
if(isset($_REQUEST['submit']))
{
	
//mysql_connect(host name, user name, password)
//mysql_connect() will get the correct value if it is succeed but false if it is fails
	
	$conn = mysql_connect("localhost","root","");

			if (!$conn) {
			    die('Could not connect: ' . mysql_error());
				
			}else{
              
           /* echo 'Connected successfully';
			/*mysql_close($conn);

			echo "<pre>";
			print_r($_REQUEST);
			exit();*/

			$dbResult=mysql_select_db("tour",$conn);
			/*if($dbResult)
			{
				echo "found";
			}
			else{
				echo "Not found";
			}
			exit();*/
			$query = "INSERT INTO  b_detail  VALUES ('" .$_POST["txt_email"]."','" .$_POST["txt_pass"] . "','" . $_POST["txt_name"] . "','" . $_POST["txt_phone"] . "','" . $_POST["txt_street"] . "','" . $_POST["txt_city"] . "','" . $_POST["txt_con"] . "','" . $_POST["gender"] . "','" . $_POST["date"] . $_POST["month"] . $_POST["year"] . "')";
			echo $query;
			mysql_query($query);
			
            $current_id=mysql_insert_id();
			echo "<script>window.location='welogin.php';</script>";
			
			// echo "<script> alert('successfully')</script>";
//$message = "New User Added Successfully";
            

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

	
		<div align="center">
		<p>
<br>
    
        <form method="post">
            <h1>Registration</h1>
            <fieldset class="row1">
                <legend>Account Details
                </legend>
                <p>
                    <label>Email *
                    </label>
                    <input type="text" name="txt_email" placeholder="abc@domain.com" required/>
                </p>
                <p>
                    <label>Password*
                    </label>
                    <input type="password" name="txt_pass" required/>
		</p>
		<p>

                    <label>Repeat Password*
                    </label>
                    <input type="password" required/>
                    
                </p>
            </fieldset>
            <fieldset class="row2">
                <legend>Personal Details
                </legend>
                <p>
                    <label>Name *
                    </label>
                    <input type="text" name="txt_name" class="long" required/>
                </p>
                <p>
                    <label>Phone *
                    </label>
                    <input type="text" maxlength="10" name="txt_phone" required/>
                </p>
                <p>
                    <label class="optional">Address *
                    </label>
                    <input type="text" class="long" name="txt_street" required/>
                </p>
                <p>
                    <label>City *
                    </label>
                    <input type="text" class="long" name="txt_city" required/>
                </p>
                <p>
                    <label>Country *
                    </label>
                    <select name="txt_con">
                        <option value="united kingdom">united kingdom
                        </option>
                        <option value="India">India
                        </option>
                    </select required>
                </p>
                
            </fieldset>
            <fieldset class="row3">
                <legend>Further Information
                </legend>
                <p>
                    <label>Gender *</label>
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female<br>
                </p>
                <p>
                    <label>Birthdate *
                    </label>
                    <select class="date" name="date">
                        <option value="1">01
                        </option>
                        <option value="2">02
                        </option>
                        <option value="3">03
                        </option>
                        <option value="4">04
                        </option>
                        <option value="5">05
                        </option>
                        <option value="6">06
                        </option>
                        <option value="7">07
                        </option>
                        <option value="8">08
                        </option>
                        <option value="9">09
                        </option>
                        <option value="10">10
                        </option>
                        <option value="11">11
                        </option>
                        <option value="12">12
                        </option>
                        <option value="13">13
                        </option>
                        <option value="14">14
                        </option>
                        <option value="15">15
                        </option>
                        <option value="16">16
                        </option>
                        <option value="17">17
                        </option>
                        <option value="18">18
                        </option>
                        <option value="19">19
                        </option>
                        <option value="20">20
                        </option>
                        <option value="21">21
                        </option>
                        <option value="22">22
                        </option>
                        <option value="23">23
                        </option>
                        <option value="24">24
                        </option>
                        <option value="25">25
                        </option>
                        <option value="26">26
                        </option>
                        <option value="27">27
                        </option>
                        <option value="28">28
                        </option>
                        <option value="29">29
                        </option>
                        <option value="30">30
                        </option>
                        <option value="31">31
                        </option>
                    </select>
                    <select name="month">
                        <option value="1">January
                        </option>
                        <option value="2">February
                        </option>
                        <option value="3">March
                        </option>
                        <option value="4">April
                        </option>
                        <option value="5">May
                        </option>
                        <option value="6">June
                        </option>
                        <option value="7">July
                        </option>
                        <option value="8">August
                        </option>
                        <option value="9">September
                        </option>
                        <option value="10">October
                        </option>
                        <option value="11">November
                        </option>
                        <option value="12">December
                        </option>
                    </select>
                    <input name="year" type="text" size="4" maxlength="4"/>e.g 1976
                </p>
               
            </fieldset>
            <fieldset class="row4">
                <legend>Terms and Mailing
                </legend>
                <p class="agreement">
                    <input type="checkbox" value=""/>
                    <label>*  I accept the <a href="#">Terms and Conditions</a></label>
                </p>
               
            </fieldset>
            <div><button type=submit name="submit" value=submit>Register &raquo;</button></div>
        </form>








					
             </p>

			
		</div> 
			<div id="section">

<br><br>        
   

			
			
			</div>
			   
		<div id="footer">
			Copyright 2016 © Tourism Management
		</div>
        

</body></html>
 