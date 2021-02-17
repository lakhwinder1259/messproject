<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    
    <link rel="stylesheet" href="style1.css" type="text/css" media="screen">
		<style>
			#content1{
								height:auto;
								width:65%;
								background:white;
								box-shadow:0px 0px 10px black;
						}
						#content1{
								height:auto;
								width:60%;
								background:white;
								box-shadow:0px 0px 10px white;
								margin:auto;
								border-radius:15px;
								overflow:hidden;
						}		
		</style>
	</head>
	<body>
		<div id="content">
					<center>
							<img src="images/logo1.png">
					</center>
		</div>
			<center>
			<br>
			<div id="content1" >
					 <br>
			    <form method="POST" action="">
				
			
			</font> 
			<script type="text/javascript">
			function show(str)
			{
			if(str=='person')
			{
			document.getElementById('d1').style.display="block";
			document.getElementById("b1").style.display = "none";
		document.getElementById("c1").style.display = "none";
		document.getElementById("e1").style.display = "none";
		
			}
			else if(str=='facilities')
			{
			document.getElementById('e1').style.display="block";
			document.getElementById('d1').style.display="none";
			document.getElementById("b1").style.display = "none"
			document.getElementById("c1").style.display = "none"
		
			}
			}
	function SetHTML1(type) {
		document.getElementById("b1").style.display = "none"
		document.getElementById("c1").style.display = "none"
		document.getElementById(type).style.display = ""
	}
</script><br>
Complaint Related To:<select name="Complaint" onchange="show(this.value)">
				<option>......SELECT......</option>
				<option value=person> Person</option>
				<option value=facilities> Facilities</option>
				</select><br>
				<br>
				<span id="d1" style="display:none">
				<font color="black"> Culprit  Roll Number is known or not ? 
                <input name="br" type="radio" onClick="SetHTML1('b1')">yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name="br" type="radio" onClick="SetHTML1('c1')">no<br><br></form>
</span>
<span id="b1" style="display:none">
<form id="form1" name="form1" method="post" action="InsertComplaint.php">
                   <table width="100%" height="127" border="0" cellpadding="0" cellspacing="0">
                <tr>
                       <td height="80"><span class="style3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Culprit Student's Roll No:</span></td>
                     <td><span id="sprytextarea1">
                     <label>
                         <input type="text" name="txtRollNo" id="txtRollNo">
                         </label>
                       <span class="textareaRequiredMsg"></span></span></td>
                     </tr>
                     <tr>
					 
					
					 <tr>
                       <td height="80"><span class="style3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Culprit Student Description:</span></td>
                     <td><span id="sprytextarea1">
                         <label>
                         <textarea name="txtDescription" id="txtDescription" cols="45" rows="3"></textarea>
                         </label>
                       <span class="textareaRequiredMsg"></span></span></td>
                     </tr>
                     <tr>
                       <td>&nbsp;</td>
                       <td><label>
                         <input type="submit" name="button1" id="button1" value="Submit" style="height:50px;width:200px;"/>
                       </label></td>
                     <br></tr>
                   </table>
                 </form>    </span>
<span id="c1" style="display:none"><form id="form1" name="form1" method="post" action="InsertComplaint.php">
                   <table width="100%" height="127" border="0" cellpadding="0" cellspacing="0">
 
 <tr>
                       <td height="80"><span class="style3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Culprit Student Description:</span></td>
                     <td><span id="sprytextarea1">
                         <label>
                         <textarea name="txtSDescription" id="txtSDescription" cols="45" rows="3"></textarea>
                         </label>
                       <span class="textareaRequiredMsg"></span></span></td>
                     </tr><tr>
                       <td height="80"><span class="style3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Complaint Description:</span></td>
                     <td><span id="sprytextarea1">
                         <label>
                         <textarea name="txtDescription" id="txtDescription" cols="45" rows="3"></textarea>
                         </label>
                       <span class="textareaRequiredMsg"></span></span></td>
                     </tr>
                     <tr>
                       <td>&nbsp;</td>
                       <td><label>
                         <input type="submit" name="button2" id="button2" value="Submit" style="height:50px;width:200px;"/>
                       </label></td>
                     </tr>
                   </table>
                 </form>                        </span>
				 <span id="e1" style="display:none"><form id="form1" name="form1" method="post" action="InsertComplaint.php">
                   <table width="100%" height="127" border="0" cellpadding="0" cellspacing="0">
 
 <tr>
                       <td height="80"><span class="style3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Complaint Description:</span></td>
                     <td><span id="sprytextarea1">
                         <label>
                         <textarea name="txtDescription" id="txtDescription" cols="45" rows="3"></textarea>
                         </label>
                       <span class="textareaRequiredMsg"></span></span></td>
                     </tr>
                     <tr>
                       <td>&nbsp;</td>
                       <td><label>
                         <input type="submit" name="button3" id="button3" value="Submit" style="height:50px;width:200px;"/>
                       </label></td>
                     </tr>
                   </table>
                 </form>                        </span>
		<br>
			</div>
			</center>
			<br/>
			<br/>
			<br/>
			
</body>
</html>





















