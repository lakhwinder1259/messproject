
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>medicare Website Template | Home :: W3layouts</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/responsiveslides.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>
	</head>
	<body>
		<!--start-wrap-->
		
			<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" title="logo" /></a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">
					<ul>
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="services.php">services</a></li>
						<li><a href="blog.php">blog</a></li>
						<li><a href="contact.php">contact</a></li>
					</ul>					
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
		<div class="clear"> </div>
			<!--start-image-slider---->
					<div class="image-slider">
						<!-- Slideshow 1 -->
					    <ul class="rslides" id="slider1">
					      <li><img src="images/200.jpg" alt=""></li>
					      <li><img src="images/300.png" alt=""></li>
					      <li><img src="images/400.jpg" alt=""></li>
					    </ul>
						 <!-- Slideshow 2 -->
					</div>
					<!--End-image-slider---->
		    <div class="clear"> </div>
		    <div class="content-grids">
		    	<div class="wrap">
		    	<div class="section group">
				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="images/grid-img1.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Doctor Login</h3>
						  <div class="button"><span><a href="doc_login.php">Click here</a></span></div>
					</div>
				</div>				
				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="images/grid-img2.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Patient Login</h3>
						<div class="button"><span><a href="patientlogin.php">Click here</a></span></div>
				     </div>
				</div>				
				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="images/grid-img3.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Lab Attendent</h3>
						<div class="button"><span><a href="lab_login.php">Click here</a></span></div>
				     </div>
				</div>
				</div>				
			</div>
		    </div>
		   </div>
		   <div class="wrap">
		   <div class="content-box">
		   <div class="section group">
			 
			  <head>
<style type="text/css">
body{background-color:#3399FF}</style>
               <?php
session_start();
$u=$_SESSION['u'];
echo "<font size=6>Welcome doctor " .$u. "</font><br>";
echo "<br>";
echo "<form name=f1 action=doc_home.php method=POST>
<input type=submit name=b2 value=VIEW_PROFILE >
<input type=submit name=b4 value=VIEW_APPOINTMENT><br></form>";
if(isset($_POST['b2']))
{
$con=new mysqli("localhost","root","","emedical");
if($con==true)
{
$cmd="select *  from doc_info where username='$u' ";
if($r=$con->query($cmd))
{
if($r->num_rows>0)
{
while($rw=$r->fetch_array())
{ 
echo "<font size=4><form name=f2 action=doc_home.php method=POST><br><pre><hr color=black>
Doctorname      :<input type=text name=t1 value=$rw[0]><br>
Department       :<input type=text name=t2  value=$rw[1]><br>
Username	        :<input type=text name=t3 value=$rw[2]><br>
Password	        :<input type=password name=t4 value=$rw[3]><br>
E-mail id  	        :<input type=text name=t5 value=$rw[4]><br>
Contact number :<input type=text name=t6 value=$rw[5]><br>
Hospital name    :<input type=text name=t7 value=$rw[7]><br>
Speciliazer         :<input type=text name=t8 value=$rw[8]><br>
Category           :<input type=text name=t9 value=$rw[9]><br>
<table> 
<tr>
<td colspan=1><div align=center>
<input name=b3 type=submit class=frist value=Update style=width:100px>
</div></td>
</tr>
</table> </pre>
</font></form>";
}
}
else
{
echo "no record found";
}
}
else
{
echo "query problem";
}
}
else
{
echo "connection problem";
}
}
if(isset($_POST['b3']))
{
$pp=0;
$d=$_POST['t1'];
$dp=$_POST['t2'];
$u=$_POST['t3'];
$pw=$_POST['t4'];
$e=$_POST['t5'];
$cn=$_POST['t6'];
$h=$_POST['t7'];
$s=$_POST['t8'];
$c=$_POST['t9'];
if(! empty ($_POST['t2']))
{
if(ctype_alpha($_POST['t2']))
{
$dp=$_POST['t2'];
}
else
{
$pp=1;
echo "<br> only alphabets are allowed in department<br>";
}
}
else
{
$pp=1;
echo "department should not be empty";
}
if(!empty ($_POST['t3']))
{
if(ctype_alnum($_POST['t3']))
{
$u=$_POST['t3'];
}
else
{
$pp=1;
echo "<br> only alphanumeric are allowed in username<br>";
}
}
else
{
$pp=1;
echo "username is required";
}
if(! empty($_POST['t4']))
{
if(ctype_alnum($_POST['t4']))
{
if(strlen($_POST['t4'])>=6 && strlen($_POST['t4'])<=10)
{
$pw=$_POST['t4'];
}
else
{
$pp=1;
echo "<br> password length between 6 to10<br>";
}
}
else
{
$pp=1;
echo "<br>only alphanumerics are allowed in password<br>";
}
}
else
{
$pp=1;
echo "<br>password is required<br>";
}
if(! empty($_POST['t6']))
{
if(is_numeric($_POST['t6']))
{
if(strlen($_POST['t6'])>=10)
{
$cn=$_POST['t6'];
}
else
{
$pp=1;
echo "contact num length must be greater then or equal to 10<br>";
}
}
else
{
$pp=1;
echo "<br>contact number only contains numbers<br>";
}
}
else
{
$pp=1;
echo "contact number is required<br>";
}
if($pp==0)
{
$con=new mysqli("localhost","root","","emedical");
if($con==true)
{
$cmd="update doc_info set dname='$d',department='$dp',
emailid='$e',contactno='$cn',hospitalname='$h',specilizer='$s',category='$c' where username='$u' ";
if($con->query($cmd)==true)
{
echo "Information updated";
}
else
{
echo "query problem";
}
}
else
{
echo "connection problem";
}
}
}
if(isset($_POST['b4']))
{
$con=new mysqli("localhost","root","","emedical");
if($con==true)
{
$cmd="select * from appointments";

if($r=$con->query($cmd))
{
if($r->num_rows>0)
{
while($rw=$r->fetch_array())
{
	echo"<font size=4><hr color=black>";
echo"Hospital name :-" .$rw[0]."<br>";
echo"Doctor name :-".$rw[1]."<br>";
echo"Patient name :-".$rw[2]."<br>";
echo"Date :-".$rw[3]."<br>";
echo"Time :-".$rw[4]."<br>";
echo"Disease description:-".$rw[5]."<br>";
echo"<a href=doc_home.php?r=a>accept</a>&nbsp;&nbsp;";
echo"<a href=doc_home.php?r=rj>reject</a><br><hr color=black></font>";
$_SESSION['pat_name']=$rw[2];
$_SESSION['doc_name']=$rw[1];
$_SESSION['date']=$rw[3];
$_SESSION['time']=$rw[4];
}
}
else
{
echo"no appointments";
}
}
else
{
echo"query problem";
}
}
else
{
echo"connection problem";
}
}
if(!empty($_GET['r']))
{
$pn=$_SESSION['pat_name'];
$dn=$_SESSION['doc_name'];
$dt=$_SESSION['date'];
$tm=$_SESSION['time'];
$rr=$_GET['r'];
$con=new mysqli("localhost","root","","emedical");
if($con==true)
{
if($rr=="a")
{
$cmd="insert into accept_appointments values('$pn','$dn','$dt','$tm')";
if($con->query($cmd)==true)
{
echo "Appt accepted";
}
}
else
{
$cmd="insert into reject_appointments values('$pn','$dn','$dt','$tm')";
if($con->query($cmd)==true)
{
echo "Appt rejected";
}
}
}
else
{
echo "connection problem";
}
}
	
?>
		
		   </div>
		   </div>
		   </div>
		   <div class="clear"> </div>
		   <div class="footer">
		   	 <div class="wrap">
		   	   <div class="footer-left">
   			  <ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="services.php">services</a></li>
						<li><a href="blog.php">blog</a></li>
						<li><a href="contact.php">contact</a></li>
<li><a href="login.php">Admin</a></li>
					</ul>
		   	</div>
		   	<div class="footer-right">
		   		<p>Medicare</p>
		   	</div>
		   	<div class="clear"> </div>
		   </div>
		   </div>
           <div class="clear"></div>
		   <div class="footer">
		   	 <div class="wrap">
		   	   <div class="footer-left">
   			  
		   	</div>
		   	   <div class="clear"></div>
		   </div>
		   </div>
		<!--end-wrap-->
	</body>
</html>

