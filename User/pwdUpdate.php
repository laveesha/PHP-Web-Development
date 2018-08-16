<?php
	require 'db_connect.php';
?>

!DOCTYPE html>  
<html > 
<head>     
	<title>Reset Password</title>
</head>
<body>
	<div align="center">
		<?php  
 
			if(!empty($_POST))   
			{
			    
				$crtpassword = $_POST["crtpassword"];
				$newpassword =$_POST["newpassword"];
				$confirmpassword = $_POST["confirmpassword"];
				
				if($newpassword=== $confirmpassword)
				{
					if (isset($_POST["updatepwd"]))
					{
						$updatePassword = "UPDATE usermanagement 
										SET Password ='$newpassword'
										WHERE Password = '$crtpassword'";
										
						if(!mysql_query($updatePassword))
						{
							die('Error :' .mysql_error());
						}
						else 
						{
							echo "<br/>";
							echo "You have successfully updated your password";
		?>
						 <input type="button" onclick="location.href='home.html'" value="Home"/> <br/>
		<?php
						}
					}
				}
				else 
				{
					echo "Your New Passowrd and Confirm Password are not matching. Please Check.";
		?>
			 <input type="button" onclick="location.href='resetpwd.php'" value="Go to reset password"/> <br/>
		<?php
				}
			}  
			else   
			{
				    $error = "One or more fields are not filled";    
				    echo $error;   
			}   
			
			  
		?>
	</div>   
</body>
</html>