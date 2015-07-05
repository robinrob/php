<?php //login.php
include_once 'header.php';
echo "<h3>Member Log in</h3>";
$error = $user = $pass = "";


if (isset($_POST['user']))
{
	$user = sanitiseString($_POST['user']);
	$pass = sanitiseString($_POST['pass']);
	
	if ($user == "" || $pass == "")
	{
		$error = "Not all frields were entered<br /><br />";
	}
	else
	{
		$query = "SELECT * FROM members
				  WHERE user='$user' AND pass='$pass'";
		
		if (mysql_num_rows(queryMysql($query)) == 0)
		{
			$error = "Username/Password invalid<br />";
		}
		else {
			$_SESSION['user'] = $user;
			$_SESSION['pass'] = $pass;
			die("You are now logged in. Please
				<a href='members.php?view=$user'>click here</a>.");
		}
	}
}

echo <<<_END
<form method='post' action='login.php'>$error
Username <input type='text' maxlength='16' name='user' value='$user'
	onBlur='checkUser(this)'/><span id='info'></span><br />
Password <input type='password' maxlength='16' name='pass'
	value='$pass' /><br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<input type='submit' value='Signup' />
</form>
_END;
?>