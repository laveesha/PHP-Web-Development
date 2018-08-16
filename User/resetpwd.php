<!DOCTYPE html>
<html>
	<head>
		<title>Reset Password</title>
		<link rel="stylesheet" type="text/css" href="userStyle.css" />
	</head>
	<body>
		<br/><br/><br/><br/><br/><br/>
		<div align="right">
			<form name="myForm3" method="POST" action="pwdUpdate.php">
				<table cellpadding="5px" cellspacing="5px" width="400px">
					<caption><h1>Reset Password</h1></caption>
					<tr>
						<td width="150px">Current Password</td>
						<td><input type="password" name="crtpassword" /></td>
					</tr>
					<tr>
						<td>New Password</td>
						<td><input type="password" name="newpassword"/></td>
					</tr>
					<tr>
						<td>Confirm Password</td>
						<td><input type="password" name="confirmpassword"/></td>
					</tr>
					<tr>
						<td align="right"><input type="submit" name="updatepwd" value="Save Password" /></td>
						<td><input type="reset" name="reset" value="Reset" /></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>