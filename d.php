<html>
<body>
<form name="f1" action="d.php" method="post" >
<input type="button" name="b2" value="button">
</body>
<?php
if(isset($_POST['b2']))
{
$con=new mysqli("localhost","root","","gndphostel");
if($con==true)
{
$cmd="select * from mon_diet";
if($r=$con->query($cmd))
{
if($rw=$r->fetch_array())
{
echo "day      :<input type=text name='t1' value='$rw[0]'>";
echo "meal_time       :<input type='text' name='t2'  value='$rw[1]'>";
echo "food_item	        :<input type='text' name='t3' value='$rw[2]'>";
echo"<input name=b3 type=submit class=frist value=Update style=width:100px>";
}
else
{
echo"data number not found";
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
</html>