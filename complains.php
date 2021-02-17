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
			
			<div class="section_w800"><br>
			
     <center><font color="WHITE" size="6">COMPLAINTS</font></center>
<br>           <table width="75%" border="1" bordercolor="#E3B71A"  BGCOLOR="WHITE">
             <tr>
          
               <th bgcolor="BLACK" class="style6"><div align="left" class="style9 style2 style4"><strong><FONT COLOR="WHITE">Culprit Student (RollNo/Description)</FONT></strong></div></th>
               <th height="32" bgcolor="BLACK" class="style6"><div align="left" class="style9 style2 style4"><strong><FONT COLOR="WHITE">Complaint Description</FONT></strong></div></th>
               <th bgcolor="BLACK" class="style6"><div align="left" class="style9 style2 style4"><strong><FONT COLOR="WHITE">Sender RollNo</FONT></strong></div></th>
       <th bgcolor="BLACK" class="style6 style2"><div align="center" class="style2"><FONT COLOR="WHITE">Date</FONT></div></th>
             </tr>
   <?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("gndphostel", $con);
// Specify the query to execute
$sql = "SELECT complaint_tbl.Cul_RollNo, complaint_tbl.Description,complaint_tbl.SDescription, complaint_tbl.S_RollNo,complaint_tbl.Date
FROM  complaint_tbl";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{

$Cul_RollNo=$row['Cul_RollNo'];
$Description=$row['Description'];
$SDescription=$row['SDescription'];
$S_RollNo=$row['S_RollNo'];
$Date=$row['Date'];

?>
<tr>
<form action="ViewDetail.php" method = "POST" >

          
               <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong>
			   
			   <?php
			   if($Cul_RollNo==0)
			   {
			   echo"<strong> $SDescription  </strong>";
			   }
			   else
			   {
			   echo"
			   <input type ='hidden' name='culprit'  value='$Cul_RollNo' />
			   <input type='submit' name='submit' value= '$Cul_RollNo'/>
			  </td> </form>
			   </strong></div>";
			   }
			   ?>
              
			   
			   
			   <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $Description;?></strong></div></td>
               <form action="ViewSDetail.php" method = "POST" >

            
               <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong>
			   
			   
			   <input type ="hidden" name="S_RollNo"  value="<?php echo $S_RollNo;?>"/>
			   <input type="submit" name="submit" value="<?php echo $S_RollNo;?>"/>
			
</td>		
               <td class="style6"><div align="left" class="style9 style5 style4 style3"><strong><?php echo $Date;?></strong></div></td>
             
</form> 
</tr>
            <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
             <?php
// Close the connection
mysql_close($con);
?>
           </table>
          <p>&nbsp;</p>
          <div class="cleaner"></div>
        </div> <!-- end of section_w760 -->
    
    </div>
							
								
	
			</center>
			<br/>
			<br/>
			<br/>

</body>
</html>





















