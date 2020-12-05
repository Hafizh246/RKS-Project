<?php
	if(isset($_POST["submit"])){
		if($_POST["username"] == "admin" && $_POST["password"] == "uad") {
			echo '<script> alert("Success"); </script>'; //for now onyl notification
			header(""); //this will connect to the database later, for now this is it
		} 
		
		else {
			echo '<script> alert("You Enter Wrong Credential"); </script>';
		}
	}
?> 

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<body>

<form method="POST" action=""><table align="center" bgcolor="#7FFFD4" cellpadding="5px">
	<tr>
		<th colspan="2" align="center">Login</th>
	</tr>
	<tr>
		<td>
			Username	
		</td>
		<td>
			Password
		</td>
	</tr>
	<tr>
		<td>
			<input type="Username" name="username" required>
		</td>
		<td>
			<input type="password" name="password" required>
		</td>
	</tr>
	<tr>
		<td>
			<button type="submit" name="submit" class="btn btn-info btn-xs" >Login</button>
		</td>
	</tr>
</table></form>
</body>
</html>