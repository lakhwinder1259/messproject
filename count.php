<html>
<head>

<title>Student_attendance</title>
</head>
<body >
	
	<?php
	$con=mysql_connect("localhost","root","");
    mysql_selectdb("gndphostel",$con)
	or die(mysql_error());  
	
	$sr_no=mysql_query("select * from s_attendance");
	$s_no=mysql_num_rows($sr_no);
	echo$s_no;
	
	?>
	
</body>
</html>