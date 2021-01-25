<?php
  require 'connectlink.php';
  if(isset($_POST['save'])){
    $link = htmlspecialchars($_POST['linkvarchar']);
     $insert = mysqli_query($conn, "INSERT INTO linkanswer VALUES(NULL,'$link')");
    }

?>

<!DOCTYPE html>
	<html>
	<head>
		<title>Hasil Data</title>
     <meta name="viewport" content="width=device-width,initial scale=1"/>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<style type="text/css">
			body{
				
			}
			.container-fluid{
				background-color: rgba(0,0,0,0.5);
    			text-align: center;
    			height: 100%;
    		}
    		div.gallery {
    			margin: 10px;
    			border: 1px solid #ccc;
    			float: left;
    			width: 180px;
				background-color: rgba(0,0,0,0.5);
  			}
  			div.gallery:hover {
   				border: 1px solid #777;
    			border-color: green;
    			color: green;
  			}
  			div.gallery img {
    			width: 100%;
    			height: 100%;
  			}
  			footer{
    		position: fixed;
    		left: 0;
    		bottom: 0;
    		width: 100%;
    		height: 5%;
			background-color: rgba(0,0,0,0.5);
    		color: black;
    		text-align: center;
    		}
		</style>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<script>
			function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
  		</script>
	</head>
	<body>
    <script type="text/javascript"> 

      alert('You have collected the assignment :)')
    </script>
      <div id="printableArea">
  		<table align="center" >
  	
		
  		<td></td>
  		<td>
  			<h2 align="justify" style="color: black" > <b> Link that has been submitted </b></h2>
			
<form method="POST" action="">
<table>
  
	<tr>
	<td> <b>Link &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </b></td><td> : <?php echo "$link"; ?></td>
	<td>  </td>
	</tr>
	</div>
	<tr>
	<td> <input type="button" onclick="printDiv('printableArea')" value="PRINT" /> </td>
	</tr>
	</table>

	</form>
			
  
  		</td>
  	</tr>
  </table><a href="index2.php">Back</a>
	</body>
	</html>
