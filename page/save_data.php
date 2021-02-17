<!--<script>
	function get_data(str)
	{
	if (str == "") {
        document.getElementById("item_code").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("item_code").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","save_data.php?q="+str,true);
        xmlhttp.send();
    }	
	}-->
	<?php
	

 
	$item_code1=$_POST['item_code'];
	$quantity=$_POST['quantity_issue'];
	$date=$_POST['date'];
	if (($quantity==null)||($date==null))
	{
	echo"<div id='content1'>Enter the valid data</div>";
	}
	else{
	$con= new mysqli("localhost","root","","gndphostel");
	if($con==true)
	{
	$cmd="insert into itemissue values(null,'$item_code1','$quantity','$date')";
	if($con->query($cmd)==true)
	{
	echo"<script>alert('Item Issued');
							
					</script>";
	}
	}
	
	
	else{
	echo"Connection Problem";
	}
	}
	?>