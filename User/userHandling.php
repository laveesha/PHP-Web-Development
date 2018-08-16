<?php
	require 'db_connect.php';
?>

<!DOCTYPE html>  
<html > 
<head>     
	<title>My Account</title> 
</head>
<body>
	<div align="center">
		<?php   
			if(!empty($_POST))   
			{
			    $title = $_POST["title"];    
			    $fname = $_POST["fname"];   
		 		$lname = $_POST["lname"];  
				$sex =  $_POST["sex"];
				$nic = $_POST["nic"];
				$email = $_POST["email"];
				$district = $_POST["district"];
				$address = $_POST["address"];
				$mobile = $_POST["mobile"];
				$username = $_POST["username"];
				$password =$_POST["password"];
				$cpassword= $_POST['cpassword'];
				
				if($password === $cpassword)
				{
					$insertString = "INSERT INTO usermanagement(Title,FirstName,LastName,Gender,NIC,Email,District,Address,Mobile,Username,Password) 
				    					VALUES('$title','$fname','$lname','$sex','$nic','$email','$district','$address','$mobile','$username','$password')";
										
					if(mysql_query($insertString))
					{
						echo "Record Insert Successfully! <br/>";
					}

					else 
					{
							echo "Fail to insert record <br/>";
					} 
				}
				else
				{
					echo "Password and Confirm password are not Matching. Try Again.<br/>";
		?>
				<input type="button" onclick="location.href='registration.html'" value="Back to Registration"/>
		<?php
				}
			}
			
			/*if(isset($_POST["signup"]))  
			{
				    $insertString = "INSERT INTO usermanagement(Title,FirstName,LastName,Sex,NIC,Email,District,Address,Mobile,Username,Password) 
				    					VALUES('$title','$fname','$lname','$sex','$nic','$email','$district','$address','$mobile','$username','$password')";       
			 		
			 		if(!mysql_query($insertString)) 
					{
					     die('Error : '.mysql_error());    
					} 
					else 
					{
						echo "<br/>";     
						echo "You have successfully logged in.";  
					}  
			 }
/*			else if (isset($_POST["update"]))
			{
				$updateString = "UPDATE UserManagement 
								SET FirstName = '$fname' , LastName = '$lname' , District ='$district' , Address = '$address' , Mobile ='$mobile'
								WHERE Username = '$username' AND Password = '$password'";
								
				if(!mysql_query($updateString))
				{
					die('Error :' .mysql_error());
				}
				else 
				{
					echo "<br/>";
					echo "You have successfully updated your acount";
				}
			}*/  
		?>
	</div>   
</body>
</html>