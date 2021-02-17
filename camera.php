<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    
    <link rel="stylesheet" href="style1.css" type="text/css" media="screen">
		
		<style type="text/css">
body{
	margin:0;
padding:0;
}
.img
    { background:#ffffff;
    padding:12px;
    border:1px solid #999999; }
.shiva{
 -moz-user-select: none;
    background: #2A49A5;
    border: 1px solid #082783;
    box-shadow: 0 1px #4C6BC7 inset;
    color: white;
    padding: 3px 5px;
    text-decoration: none;
    text-shadow: 0 -1px 0 #082783;
    font: 12px Verdana, sans-serif;}
</style>
		
	</head>
	<body style="background-image:url('images/bg-top.jpg');">
		<div id="content">
					<center>
							<img src="images/logo1.png">
					</center>
		</div>
		<br>
			<table border="0"><tr><td>
			<div id="cont" style="margin:100px;" >
				


<script type="text/javascript" src="webcam.js"></script>
<script language="JavaScript">
		document.write( webcam.get_html(500, 240) );
</script>

		




<script  type="text/javascript">
    webcam.set_api_url( 'handleimage.php' );
		webcam.set_quality( 90 ); // JPEG quality (1 - 100)
		webcam.set_shutter_sound( true ); // play shutter click sound
		webcam.set_hook( 'onComplete', 'my_completion_handler' );

		function take_snapshot(){
			// take snapshot and upload to server
			document.getElementById('img').innerHTML = '<h1>Uploading...</h1>';
			
			webcam.snap();
		}

		function my_completion_handler(msg) {
			// extract URL out of PHP output
			if (msg.match(/(http\:\/\/\S+)/)) {
				// show JPEG image in page
				
				document.getElementById('img').innerHTML ='<h3>Upload Successfuly done</h3>'+msg;
			     
				document.getElementById('img').innerHTML ="<img src="+msg+" class=\"img\">";
				
			
				// reset camera for another shot
				webcam.reset();
			}
			else {alert("Error occured we are trying to fix now: " + msg); }
		}
	</script>
  </td>

	<td>
	<div id="conte1" style="margin:100px" align="right">
				


<script type="text/javascript" src="webcam.js"></script>
<script language="JavaScript">
		document.write( webcam.get_html(500, 240) );
</script>

		




<script  type="text/javascript">
    webcam.set_api_url( 'handleimage.php' );
		webcam.set_quality( 90 ); // JPEG quality (1 - 100)
		webcam.set_shutter_sound( true ); // play shutter click sound
		webcam.set_hook( 'onComplete', 'my_completion_handler' );

		function take_snapshot(){
			// take snapshot and upload to server
			document.getElementById('img').innerHTML = '<h1>Uploading...</h1>';
			
			webcam.snap();
		}

		function my_completion_handler(msg) {
			// extract URL out of PHP output
			if (msg.match(/(http\:\/\/\S+)/)) {
				// show JPEG image in page
				
				document.getElementById('img').innerHTML ='<h3>Upload Successfuly done</h3>'+msg;
			     
				document.getElementById('img').innerHTML ="<img src="+msg+" class=\"img\">";
				
			
				// reset camera for another shot
				webcam.reset();
			}
			else {alert("Error occured we are trying to fix now: " + msg); }
		}
	</script>
	</td>
	</tr>
	<tr><td>
			<div id="cont" style="margin:80px;" >
				


<script type="text/javascript" src="webcam.js"></script>
<script language="JavaScript">
		document.write( webcam.get_html(500, 240) );
</script>

		




<script  type="text/javascript">
    webcam.set_api_url( 'handleimage.php' );
		webcam.set_quality( 90 ); // JPEG quality (1 - 100)
		webcam.set_shutter_sound( true ); // play shutter click sound
		webcam.set_hook( 'onComplete', 'my_completion_handler' );

		function take_snapshot(){
			// take snapshot and upload to server
			document.getElementById('img').innerHTML = '<h1>Uploading...</h1>';
			
			webcam.snap();
		}

		function my_completion_handler(msg) {
			// extract URL out of PHP output
			if (msg.match(/(http\:\/\/\S+)/)) {
				// show JPEG image in page
				
				document.getElementById('img').innerHTML ='<h3>Upload Successfuly done</h3>'+msg;
			     
				document.getElementById('img').innerHTML ="<img src="+msg+" class=\"img\">";
				
			
				// reset camera for another shot
				webcam.reset();
			}
			else {alert("Error occured we are trying to fix now: " + msg); }
		}
	</script>
  </td>

	<td>
	<div id="conte1" style="margin:80px" align="right">
				


<script type="text/javascript" src="webcam.js"></script>
<script language="JavaScript">
		document.write( webcam.get_html(500, 240) );
</script>

		




<script  type="text/javascript">
    webcam.set_api_url( 'handleimage.php' );
		webcam.set_quality( 90 ); // JPEG quality (1 - 100)
		webcam.set_shutter_sound( true ); // play shutter click sound
		webcam.set_hook( 'onComplete', 'my_completion_handler' );

		function take_snapshot(){
			// take snapshot and upload to server
			document.getElementById('img').innerHTML = '<h1>Uploading...</h1>';
			
			webcam.snap();
		}

		function my_completion_handler(msg) {
			// extract URL out of PHP output
			if (msg.match(/(http\:\/\/\S+)/)) {
				// show JPEG image in page
				
				document.getElementById('img').innerHTML ='<h3>Upload Successfuly done</h3>'+msg;
			     
				document.getElementById('img').innerHTML ="<img src="+msg+" class=\"img\">";
				
			
				// reset camera for another shot
				webcam.reset();
			}
			else {alert("Error occured we are trying to fix now: " + msg); }
		}
	</script>
	</td>
	</tr>
	</table>
  </div>

	</div>
			
			<br/>
			<br/>
			<br/>
			

</body>
</html>





















