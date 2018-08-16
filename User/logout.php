<?php
session_start();
if(session_destroy())
{
	echo "You are logged out now<br/>";
?>
	<a href = "login.php">Login</a>
<?php
}
?>