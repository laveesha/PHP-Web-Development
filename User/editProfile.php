<?php
	require 'db_connect.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Edit Profile</title>
	</head>
	<body>
		<div align="center">
			<?php	
				
				$username = $_POST["username"];
				$password = $_POST["password"];
				$selectString = "SELECT * FROM UserManagement WHERE Username ='$username' AND Password ='$password'";
				
				$result = mysqli_query($selectString);

				if (!$result) 
				{
					die(mysql_error());
				}
				
				$row=mysqli_fetch_array($result)
			?>
			<form name="myForm2" method="POST" action="userHandling.php">
			<table>
					<caption><h2>My Account</h2></caption>
						<tr>
							<td>First Name</td>
							<td><input type="text" name="fname" value="<?php echo $row['FirstName'];?>"/></td>
						</tr>
						<tr>
							<td>Last Name</td>
							<td><input type="text" name="lname" value="<?php echo $row['LastName'];?>"/></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td><?php echo $row['Sex'];?></td>
						</tr>
						<tr>
							<td>NIC</td>
							<td><?php echo $row['NIC'];?></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><?php echo $row['Email'];?></td>
						</tr>
						<tr>
							<td>District</td>
							<td><input type="text" name="district" value="<?php echo $row['District'];?>"/></td>
						</tr>
						<tr>
							<td>Address</td>
							<td><input type="text" name="address" value="<?php echo $row['Address'];?>"/></td>
						</tr>
						<tr>
							<td>Mobile</td>
							<td><input type="text" name="mobile" value="<?php echo $row['Mobile'];?>"?\/></td>
						</tr>
						<tr>
							<td> </td>
							<td>
								<input type="submit" name="update" value="Save Changes" />
								<input type="reset" name="reset" value="Reset" />
							</td>
						</tr>
				</table>
			</form>
		</div>
	</body>
</html>