<?php
  include 'connect.php';
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
        <h1 style="color: white">Welcome to Assignment Collector</h1>
    </div>
    <nav class="navbar navbar-expand-lg" style="background-color: rgba(0,0,0,0.8)" >
      <a class="navbar-brand" href="index.php">HOME</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
		<li class="nav-item">
            <a class="nav-link" href="loginlect.php">LOGIN Lecturer </a>
          <li class="nav-item">
            <a class="nav-link" href="login.php">LOGIN </a>
          </li>
        </ul>
      </div>
  </nav>
 </div>
   
	</body>
	</html>		
