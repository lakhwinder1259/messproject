<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="new.php "method="post"name="f1"> 
Roll_no:<input type="text" name="t1">
<select>
  <option value="0">select month</option>
  <option value="1">jan</option>
  <option value="2">feb</option>
  <option value="3">mar</option>
  <option value="4">apr</option>
</select>--
<select>
  <option value="0">select month</option>
  <option value="1">jan</option>
  <option value="2">feb</option>
  <option value="3">mar</option>
  <option value="4">apr</option>
</select>
<input name='b1' type='submit'  value='submit' style='width:100px'>
</form>

<?php

if(isset($_POST['b1']))
{
		$n=$_POST['t1']; 
		  
	$con = mysql_connect("localhost","root","");
	if(!$con) {
		die("Could not Connect : ".mysql_error());
	
	}
else
{
	$con=new mysqli("localhost","root","","gndphostel");
	if($con==true)
	{
			
	
        		$cmd1="select * from s_attendance where `roll no.`='".$n."' && date between '01/01/15' and '12/03/15'";
			$total=0;
			if($r1=$con->query($cmd1))
			{
					while($row1=$r1->fetch_array())
					{	
							$total=$total+$row1['3'];
							
					
					
					}}}
			
			echo $total;

		 

}
}
?>	
</body>
</html>