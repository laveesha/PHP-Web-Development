<?php
	require 'db_connect.php';
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>My Account</title>
	</head>
	<body>
		<div align="center">
			<?php
				if(isset($_POST["username"]) && isset($_POST["password"]))
				{
					$username = $_SESSION['username'];
					$password =$_SESSION['password'];
					
					$selectString = "SELECT * FROM UserManagement WHERE Username ='$username' AND Password ='$password'";
				
					$result = mysql_query($selectString);
					
					while($row = mysql_fetch_array($result3))
					{ 
						$fname=$row['FirstName'];
						$lname=$row['LastName'];
						$gender=$row['Gender'];
						$nic = $row['NIC'];
						$email = $row['Email'];
						$district = $row['District'];
						$address=$row['Address'];
						$contact=$row['Mobile'];
					}
				}
				else 
				{
					echo "You have to Login. <br/>";
				}
			?>
				<input type="button" onclick="location.href='login.php'" value="Login"/> <br/>
			<?php	
				

				if (!$result) 
				{
					die(mysql_error());
				}
				
			?>
			<table>
					<caption><h2>My Account</h2></caption>
						<tr>
							<td>First Name</td>
							<td><?php echo $fname;?></td>
						</tr>
						<tr>
							<td>Last Name</td>
							<td><?php echo $lname;?></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td><?php echo $gender;?></td>
						</tr>
						<tr>
							<td>NIC</td>
							<td><?php echo $nic;?></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><?php echo $email;?></td>
						</tr>
						<tr>
							<td>District</td>
							<td><?php echo $district;?></td>
						</tr>
						<tr>
							<td>Address</td>
							<td><?php echo $address;?></td>
						</tr>
						<tr>
							<td>Mobile</td>
							<td><?php echo $mobile;?></td>
						</tr>
				</table>
				
				<input type="button" onclick="location.href='editProfile.php'" value="Edit Profile"/> <br/>
		</div>
	</body>
</html>