<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    
	 <?php include'connect.php';?>
	 
    <link rel="stylesheet" href="style.css" type="text/css" media="screen">
	<script type="text/javascript" lang="javascript" src="validate.js"></script>
	<script type="text/javascript"  language="javascript" src="jquery.js"> </script>
	
	</head>
	<body>
	<div id="content1">
<center><img src="images/logo1.png"></center>
</div>
	<div id="content"><center>
	<form action="inputpdata.php" method=post>
	<table><tr><th><input type="submit" class="buttons" value="Student Entry" name="item_save"></th><th><input type="submit" class="buttons" value="update data" name="item_show"></th>
	
	<th><a class="buttons" href="index.php">back</a></th></tr>
	</table>
	</form></center>
	</div>
	<font color=white>
	<?php
$con=new mysqli("localhost","root","","gndphostel");
?>
	
	<?php
	if(isset($_POST['item_save']))
	{
	$con=mysql_connect("localhost","root","");
    mysql_selectdb("gndphostel",$con)
	or die(mysql_error());  
	
	$sr_no=mysql_query("select * from personal_info");
	$s_no=mysql_num_rows($sr_no);
	
	$s_no=$s_no+1;
	?>
	</font>
	<div id='content'><form method=post name='data' action='inputpdata.php' onsubmit='return regvalidate()'>
	<table align='center'  border=0>
	 <tr><th >Form Number : </th><th><input readonly type='text'  name='serial_number' value = <?php echo"$s_no"; ?> ></th><th width=20%></th></tr>
	 <tr><th >Registration Number : </th><th><input  type='text'  name='reg_no' onkeypress='return isNumber(event)' maxlength="12"> <div id="error_rg"></th><th width=20%></th></tr>
	<tr><th>Roll No : </th><th><input type='text'  name='roll_no' maxlength="4" onkeypress='return isNumber(event)' ></th><th width="6%"><div id='error_rn'></div></th></tr>
	<tr><th>Course : </th><th><select name='course' id='idcourse' >
	<option >..............SELECT...............</option>
	<option value='Diploma'>Diploma </option>
	<option value='Degree'>Degree</option></select></th><th>
	<tr><th>Section : </th><th><select name='section' id='idsection' >
	<option >..............SELECT...............</option>
	<option value='a'>A </option>
	<option value='b'>B</option>
	<option value='c'>C</option>
	<option value='d'>D</option>
	<option value='e'>E</option>
	<option value='f'>F</option>
	<option value='g'>G</option>
	<option value='h'>H</option>
	</select></th><th>
	<div id='error_course'></div></th></tr>
	<tr><th>Branch : </th><th><select name='idbranch' id='idbranch' ><option  >..............SELECT...............</option>
	<option value='Automobile Engineering'>Automobile Engineering </option>
	<option value='Civil Engineering'>Civil Engineering</option>
	<option value='Computer Engineering'>Computer Engineering</option>
	<option value='Electrical Engineering'>Electrical Engineering</option>
	<option value='Electronics & CommnicationEngineering'>Electronics Engineering</option>
	<option value='Information Technology Engineering'>Information Technology</option>
	<option value='Mechnical Engineering'>Mechnical Engineering</option>
	<option value='Production Engineering'>Production Engineering</option></select></th>
	<th><div id='error_branch'></div></th></tr>
	
	<tr><th>Year : </th><th><select  id='idyear' name='idyear'><option >........SELECT YEAR.........</option>
	<option value=1>1 </option>
	<option value=2>2</option>
	<option value=3>3 </option>
	<option value=4>4</option></select></th>
	<th><div id='error_year'></div></th></tr>
	<tr><th>Room No  : </th><th><select name='idroom_no' id='idroom_no'><option>..............SELECT...............</option>
	<option value=7>7 </option>
	<option value=8>8 </option>
	<option value=9>9 </option>
	<option value=10>10 </option>
	<option value=11>11 </option>
	<option value=12>12 </option>
	<option value=13>13 </option>
	<option value=14>14 </option>
	<option value=15>15 </option>
	<option value=16>16 </option>
	<option value=101>101 </option>
	<option value=102>102 </option>
	<option value=103>103 </option>
	<option value=104>104 </option>
	<option value=105>105 </option>
	<option value=106>106 </option>
	<option value=107>107 </option>
	<option value=108>108 </option>
	<option value=109>109 </option>
	<option value=110>110 </option>
	<option value=111>111 </option>
	<option value=112>112 </option>
	<option value=113>113 </option>
	<option value=114>114 </option>
	<option value=115>115 </option>
	<option value=116>116 </option>
	<option value=120>120 </option>
	<option value=129>129</option>
	<option value=201>201 </option>
	<option value=202>202 </option>
	<option value=204>204 </option>
	<option value=206>206 </option>
	<option value=207>207 </option>
	<option value=208>208 </option>
	<option value=210>210 </option>
	<option value=211>211 </option>
	<option value=212>212 </option>
	<option value=213>213 </option>
	<option value=214>214 </option>
	<option value=215>215 </option>
	<option value=216>216 </option>
	<option value=218>218 </option>
	<option value=219>219 </option>
	<option value=220>220 </option>
	<option value=221>221 </option>
	<option value=222>222 </option>
	<option value=223>223 </option>
	<option value=224>224 </option>
	<option value=225>225 </option>
	<option value=226>226 </option>
	<option value=227>227 </option>
	<option value=228>228 </option>
	<option value=229>229 </option>
	<option value=264>264 </option></select></th>
	<th><div id='error_room_no'></div></th></tr>
	<tr><th> Name: </th><th><input type='text' name='name'  onkeypress='return onlyAlphabets(event,this);' ></th><th><div id='error_sname'></div></th>
	<tr><th>Father's Name : </th><th><input type='text'   name='father_name' onkeypress="return onlyAlphabets(event,this);"></th><th> <div id='error_fathername'></div></th></tr>
	<tr><th>Gender : </th><th><select name='g'  >
	<option >..............SELECT...............</option>
	<option value='male'>Male </option>
	<option value='female'>Female</option>
    </select></th><th>
	<tr><th>Address : </th><th><textarea name='address' cols='16' rows='4'></textarea></th><th><div id='error_address'></div></th></tr>
	<tr><th>Phone Number : </th><th><input type='text'  name='ph_no' onkeypress='return isNumber(event)' maxlength='12'></th><th><div id='error_ph_no'></div></th></tr>
	<tr><th>Contact Email : </th><th><input type='email'  name='email' ></th><th></th></tr>
	
	<!--<tr><th>Upload Photo : </th><th>&nbsp;&nbsp;&nbsp;<input type="file" name="txtFile" id="txtFile" /></th><th></th></tr>-->
	
	<tr><th><input type='submit' class='buttons' name='submit' value='submit' ></th></tr>
	</table>
	</form>
	</div>
	<?php
    }
	if(isset($_POST['submit']))
	{
		$path="Tulip.jpg";
		//$image=$_POST['u_photo'];
		//$path1 = $_FILES['txtFile']["name"];	
		//@move_uploaded_file($_FILES["txtFile"]["tmp_name"],"/Documents/"  .$_FILES["txtFile"]["name"]);
		//$path=$_FILES['u_photo']['name'];
		//@move_uploaded_file($_FILES["u_photo"]["tmp_name"],"/Documents/"  .$_FILES["u_photo"]["name"]);
	$con=mysql_connect("127.0.0.1","root","");
	mysql_select_db("gndphostel",$con) or die(mysql_error());
	$sr_qry="select * from personal_info";
	$sr_no=mysql_query($sr_qry);
	$s_no=mysql_num_rows($sr_no); 
	$s_no=$s_no+1;
	
	$query="insert into personal_info values(".$_POST['serial_number'].",".$_POST['roll_no'].",".$_POST['idroom_no'].",'".$_POST['name']."','".$_POST['father_name']."',".$_POST['idyear'].",'".$_POST['course']."',".$_POST['ph_no'].",'".$_POST['address']."','".$_POST['idbranch']."','".$path."','".$_POST['reg_no']."','".$_POST['section']."','".$_POST['g']."','".$_POST['email']."','".$_POST['roll_no']."','".$_POST['roll_no']."','aaa')	";
	//echo $query;
	$r=mysql_query($query);
	if($r)
	{

	echo "User Name : ".$_POST['roll_no'];
	echo "Password : ".$_POST['roll_no'];
	
	}
	}
	?>
	
	<?php
	if(isset($_POST['item_show']))
	{
	
		
	echo "<div id='content20'><form method='post' action='inputpdata.php'>
	<table align='center' >
	<tr><th>Enter The  Roll Number : </th><th></th><th><input type='text'  name='roll'  >            <input type='submit' value='Search' name='search_b1' onclick='return removeit();' > </th></tr>
	
	</table>
	</form>
	 </div>
	";
	}
	
?>
	

	
<?php


$con=mysql_connect("localhost","root","");
mysql_select_db("gndphostel", $con) or die(mysql_error());
?>
<?php


if(isset($_POST['search_b1']))
{
$n=$_POST['roll']; 
if($con == true)
	{
	   
 $cmd="select * from personal_info where roll_no='".$n."'";

if($r= mysql_query($cmd))
		{
if($rw = mysql_fetch_array($r))
			{
	           
 
echo"<div id='content15' >
<table align='center' border='1'>
<tr><th> Name :<input type='text' name='t1' value='".$rw['name']."' readonly > </th></tr> >
<tr><th>  Father 's Name :<input type='text' name='f2' value='$rw[4]' readonly></th></tr>
<tr><th>Roll no	   : <input type='text' name='t2' value='$rw[1]' readonly></th></tr>
<tr><th>Form No    : <input type='text' name='f1' value='$rw[0]' readonly></th></tr>
<tr><th>Course     : <input type='text' name='C1' value='$rw[6]' readonly></th></tr>
<tr><th>Branch     : <input type='text' name='B1' value='$rw[9]' readonly></th></tr>
<tr><th>Year       : <input type='text' name='y1' value='$rw[5]' readonly></th></tr>
<tr><th>Room No    : <input type='text' name='R1' value='$rw[2]' readonly></th></tr>
<tr><th>Phone No   : <input type='text' name='p1' value='$rw[7]' readonly></th></tr></table></div>";
			}	


else
			{
echo"roll number not found";
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
?>
	
	
	
	
	
	
	
	
   
</body>
</html>