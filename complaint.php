<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GNDPC Complaint System</title>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {font-size: 12px}
.style2 {color: #FFFFFF}
.style3 {color: #000000}
-->
</style>
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style6 {color: #CCCCCC}
-->
</style>
</head>
<body>
<div id="templatemo_wrapper">
   <?php
   include "Header.php"
   ?>
    <div id="templatemo_content">
    	<div class="section_w800"><br>
          <center><font color="#800000" size="5">Complaint Management</font></center>
		  <div id="TabbedPanels1" class="TabbedPanels">
             <ul class="TabbedPanelsTabGroup">
               <li class="TabbedPanelsTab style1 style2" tabindex="0">Post Complain</li>
            
             </ul>
             <div class="TabbedPanelsContentGroup">
               <div class="TabbedPanelsContent">
			   <br>
			    		
			<font color="black"> Culprit  Roll Number is known or not ? <br><br>
			</font> 
			<script type="text/javascript">
	function SetHTML1(type) {
		document.getElementById("b1").style.display = "none"
		document.getElementById("c1").style.display = "none"
		document.getElementById(type).style.display = ""
	}
</script>
				cvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcv<select name="Complaint">
				<option> Person</option>
				<option> Facilities</option>
				</select>
                <input name="br" type="radio" onClick="SetHTML1('b1')">yes<br>
<input name="br" type="radio" onClick="SetHTML1('c1')">no<br><br>

<span id="b1" style="display:none"><form id="form1" name="form1" method="post" action="InsertComplaint.php">
                   <table width="100%" height="127" border="0" cellpadding="0" cellspacing="0">
                <tr>
                       <td height="80"><span class="style3">Culprit Student's Roll No:</span></td>
                     <td><span id="sprytextarea1">
                     <label>
                         <input type="text" name="txtRollNo" id="txtRollNo">
                         </label>
                       <span class="textareaRequiredMsg">A value is required.</span></span></td>
                     </tr>
                     <tr>
					 
					
					 <tr>
                       <td height="80"><span class="style3">Culprit Student Description:</span></td>
                     <td><span id="sprytextarea1">
                         <label>
                         <textarea name="txtDescription" id="txtDescription" cols="45" rows="3"></textarea>
                         </label>
                       <span class="textareaRequiredMsg">A value is required.</span></span></td>
                     </tr>
                     <tr>
                       <td>&nbsp;</td>
                       <td><label>
                         <input type="submit" name="button" id="button" value="Submit" />
                       </label></td>
                     </tr>
                   </table>
                 </form>    </span>
<span id="c1" style="display:none"><form id="form1" name="form1" method="post" action="InsertComplaint.php">
                   <table width="100%" height="127" border="0" cellpadding="0" cellspacing="0">
 <tr>
                       <td height="80"><span class="style3">Culprit Student Description:</span></td>
                     <td><span id="sprytextarea1">
                         <label>
                         <textarea name="txtDescription" id="txtDescription" cols="45" rows="3"></textarea>
                         </label>
                       <span class="textareaRequiredMsg">A value is required.</span></span></td>
                     </tr>
                     <tr>
                       <td>&nbsp;</td>
                       <td><label>
                         <input type="submit" name="button" id="button" value="Submit" />
                       </label></td>
                     </tr>
                   </table>
                 </form>                        </span>



               </div>
               
             </div>
           </div>
           <p>&nbsp;</p>
          <div class="cleaner"></div>
        </div> <!-- end of section_w760 -->
    
    </div> <!-- end of templatemo_content -->
   <?php
   include "Footer.php";
   ?>

</div> <!-- end of templatemo_wrapper -->
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
</script>
</body>
</html>