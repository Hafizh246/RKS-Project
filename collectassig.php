<?php
  include 'connectlink.php';
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>

<!DOCTYPE html>
	<html>
	<head>
		<title>HOME</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<style type="text/css">
			body{
        background-color: green;
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
	</head>
	<body>
    <div class="container-fluid">
        <h1 style="color: white">Welcome to Assignment Collector <br> Achmad Nur Hafizh</h1>
    </div>
    <nav class="navbar navbar-expand-lg" style="background-color: rgba(0,0,0,0.8)" >
      <a class="navbar-brand" href="index2.php">HOME</a>
	<a class="navbar-brand" href="collectassig.php">COLLECT ASSIGNMENT</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="login.php">LOGIN </a>
		<li class="nav-item">
		<a Class="nav-link" href="index.php"> LOGOUT </a>
          </li>
        </ul>
      </div>
  </nav>	
 </div>
	<table align="center" style="background-color: rgba(72,454,505, 0.3)" >
  	<tr>
  		<td></td>
      <br><br><br><br><br><br>
  		<td>
  			<h2 align="justify" style="color:#ffffff" > <b> PLEASE INPUT THE GOOGLE DRIVE LINK TO COLLECT THE ASSIGNMENT </b></h2>
<form method="POST" action="linkcollected.php">
<table>
  
  <tr>
  <td> <b>Link &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  </b> : </td>
  <td>  <textarea rows="" name="linkvarchar" cols="40" required></textarea></td>
  </tr>
	
<tr>
	<td><input type="submit" value="Submit" name="save"  >  </input> </a>
  <input type="reset"></input> </td>	
	</tr>
	</table>
	</form>

  		</td>
  	</tr>
  </table><br>
   
	</body>
	</html>		
