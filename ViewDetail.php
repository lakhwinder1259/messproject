<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    
    <link rel="stylesheet" href="style1.css" type="text/css" media="screen">
		<style>
					#list li{
							width:120px;
							height:30px;
							background:black;
							margin:2px;
							float:left;
							color:white;
							font-size:18px;
							list-style-type:none;
							text-align:center;
							padding-top:3px;
							border:1px solid white;
					}
					#content1{
								height:auto;
								width:65%;
								background:white;
								box-shadow:0px 0px 10px black;
						}
				
		</style>
	</head>
	<body>
		<div id="content">
					<center>
							<img src="images/logo1.png">
					</center>
		</div>
		<br>
		<br>
			<center>
			<div id="content1">
							<div class="section_w800"><br>
           <center><font color="#800000" size="5">Profile of Culprit Student</font></center>
       <br>    <p>&nbsp;</p>
             <?php
			// Establish Connection with Database
include('connect.php');
// Select Database
if(isset($_POST['submit']))
{
$culprit=$_POST['culprit'];
// Specify the query to execute
$sql = "select personal_info.serial_no,personal_info.name,personal_info.f_name,personal_info.Gender,personal_info.branch,personal_info.RegistrationNo,personal_info.roll_no,personal_info.Section,personal_info.address,personal_info.ph_no,personal_info.Email,personal_info.Photo from personal_info,complaint_tbl where personal_info.roll_no=complaint_tbl.Cul_RollNo and complaint_tbl.Cul_RollNo = '".$culprit."'";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['serial_no'];
$Name=$row['name'];
$FName=$row['f_name'];
$Gender=$row['Gender'];
$Department=$row['branch'];
$RegistrationNo=$row['RegistrationNo'];
$RollNo=$row['roll_no'];
$Section=$row['Section'];
$Address=$row['address'];
$MobileNo=$row['ph_no'];
$Email=$row['Email'];
$Photo =$row['Photo'];
//photo

}

			?>
				<table width="780px" height="246" border="0" cellpadding="0" cellspacing="0">
<tr > 
<td rowspan="12"> <center><img src="Documents/<?php echo $Photo;?>" height="250" width="200" /></center></td>
</tr>              

                  
				
                  <tr>
                    <td height="37" bgcolor="" ><span class="style1 style5"><strong>Name:</strong></span></td>
                    <td bgcolor=""><span class="style1 style5"><strong><?php echo $Name;?></strong></span></td>
                  </tr>
                  <tr>
                    <td height="38" bgcolor=""  ><span class="style1 style5"><strong>Father 's Name:</strong></span></td>
                    <td bgcolor="" ><span class="style1 style5"><strong><?php echo $FName;?></strong></span></td>
                  </tr>
                  <tr>
                    <td height="34" bgcolor="" ><span class="style1 style5"><strong>Gender:</strong></span></td>
                    <td bgcolor="" ><span class="style1 style5"><strong><?php echo $Gender;?></strong></span></td>
                  </tr>
                  <tr>
                    <td height="32" bgcolor=""  ><span class="style1 style5"><strong>Department:</strong></span></td>
                    <td bgcolor="" ><span class="style1 style5"><strong><?php echo $Department;?></strong></span></td>
                  </tr>
                  <tr>
                    <td height="34" bgcolor="" ><span class="style1 style5"><strong>Registration No:</strong></span></td>
                    <td bgcolor="" ><span class="style1 style5"><strong><?php echo $RegistrationNo;?></strong></span></td>
                  </tr>
                   <tr>
                    <td height="34" bgcolor="" ><span class="style1 style5"><strong>RollNo:</strong></span></td>
                    <td bgcolor="" ><span class="style1 style5"><strong><?php echo $RollNo;?></strong></span></td>
                  </tr>
                     <tr>
                    <td height="34" bgcolor="" ><span class="style1 style5"><strong>Section:</strong></span></td>
                    <td bgcolor=""><span class="style1 style5"><strong><?php echo $Section;?></strong></span></td>
                  </tr>
                      <tr>
                    <td height="34" bgcolor="" ><span class="style1 style5"><strong>Address:</strong></span></td>
                    <td bgcolor="" ><span class="style1 style5"><strong><?php echo $Address;?></strong></span></td>
                  </tr>
                       
                 <tr>
                    <td height="34" bgcolor="" ><span class="style1 style5"><strong>Mobile No</strong></span></td>
                    <td bgcolor="" ><span class="style1 style5"><strong><?php echo $MobileNo;?></strong></span></td>
                  </tr>
                      <tr>
                    <td height="34" bgcolor="" ><span class="style1 style5"><strong>Email:</strong></span></td>
                    <td bgcolor=""><span class="style1 style5"><strong><?php echo $Email;?></strong></span></td>
                  </tr>
                       
                
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
</center>

 <?php
 }
?>
                    <?php
// Close the connection
mysql_close($con);
?>
           <div class="cleaner"></div>
        </div> <!-- end of section_w760 -->
    
    </div> <!-- 
			</div>
			</center>
			<br/>
			<br/>
			<br/>
			\

</body>
</html>





















