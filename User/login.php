<?php
require 'db_connect.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		
		<?php
			session_start();

			if(isset($_POST['login']))
			{ 

				$myusername=$_POST['userlogin']; 
				$mypassword=$_POST['passwordlogin'];
				$_SESSION['username'] = $myusername;
				$_SESSION['password'] = $mypassword;

				$sql="SELECT * FROM usermanagement WHERE UserName = '$myusername' AND Password ='$mypassword'";
				$result=mysql_query($sql);
				//$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
				//$active=$row['active'];

				$count=mysql_num_rows($result);


				// If result matched $myusername and $mypassword, table row must be 1 row
				if($count==1)
				{
					//session_register("myusername");
					//$_SESSION['login_user']=$myusername;
					echo "You have Successfully Logged in";
		?>
					<input type="button" onclick="location.href='home.html'" value="Home" />
					<input type="button" onclick="location.href='displayAccount.php'" value="My Profile" />
					<input type="button" onclick="location.href='logout.php'" value="Log Out" />
					
		<?php			//header("location: welcome.php"); 
				}
				else 
				{
					echo"Your Login Name or Password is invalid";
				}
			}
		?>
		
		<link rel="stylesheet" type="text/css" href="userStyle.css" />
	</head>
	<body>
		<br/><br/><br/><br/><br/><br/><br/><br/>
		<div align="right">
			<form name="myForm1" method="POST" action="">
				<table cellpadding="5px" cellspacing="5px">
					<caption><h1>Login</h1></caption>
					<tr>
						<td width="150px">Username</td>
						<td><input type="text" name="userlogin" /></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="passwordlogin"/></td>
					</tr>
					<tr>
						<td> </td>
						<td><input type="submit" name="login" value="Login" /></td>
					</tr>
				</table>
				<input type="button" onclick="location.href='registration.html'" value="Create a New Account"/> <br/>
				<a href="resetpwd.php">Reset Your Password</a>
			</form>
		</div>
	</body>
</html>