<html>
<html><head>
    <title></title>
    
    <link rel="stylesheet" href="style1.css" type="text/css" media="screen">
		
		</head><script>
										function get_data(str)
										{
											if (str == "") {
												document.getElementById("q1").innerHTML = "";
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
														document.getElementById("q1").innerHTML = xmlhttp.responseText;
															}
															}
																xmlhttp.open("GET","get_messbill.php?q="+str,true);
																xmlhttp.send();
															}	
															}
										
										
										
									
									</script>
									<?php
								
echo"<div style='background:#fff center;
margin-left:320px;
margin-right:300px;
padding:5 px;
box-shadow:4px 4px 6px #fff;

height:auto;
border-radius:15 px;'>
<form method='post'><br><br>
<body>
<b>&nbsp;&nbsp;&nbsp;&nbsp;Select month</b> &nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp; <select name='month' onchange='get_data(this.value)' id='month' >";
  echo"<option value='0'>select month</option>
  <option value='01'>jan</option>
  <option value='02'>feb</option>
  <option value='03'>mar</option>
  <option value='04'>apr</option>
  <option value='05'>may</option>
  <option value='06'>june</option>
  <option value='07'>july</option>
  <option value='08'>aug</option>
  <option value='09'>sep</option>
  <option value='10'>oct</option>
  <option value='11'>nov</option>
  <option value='12'>dec</option>
</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br><br>
</div>
</form>
<div id='q1'>";
?>
</body>
</html>
