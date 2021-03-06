<?php //yuisignup.php
include_once 'header.php';

echo <<<_END
<script_src="yahoo-min.js"></script>
<script_src="event-min.js"></script>
<script_src="connection-min.js"></script>
<script>
function checkUser(user)
{
	if (user.value == '')
	{
		document.getElementById('info').innerHTML = ''
		return
	}
	
	params = "user=" + user.value
	callbacl = { success:successHandler, failure:failureHandler }
	request = YAHOO.util.Connect.asyncRequest('POST',
		'checkuser.php', callback, params);
}

function successHandler(o)
{
	document.getElementById('info').innerHTML = o.responseText;
}

function failureHandler(o) {
	document.getElementById('info').innerHTML =
		o.status + " " + o.statusText
}
</script>
<h3>Sign up Form</h3>
_END;

$error = $user = $pass = "";
if (isset($_SESSION['user'])) destroySession();

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
		$query = "SELECT * FROM members WHERE user='$user'";
		
		if (mysql_num_rows(queryMysql($query)))
		{
			$error = "That username already exists<br /><br />";
		}
		else {
			$query = "INSERT INTO members VALUES('$user', '$pass')";
			queryMysql($query);
			die("<h4>Account created</h4>Please log in.");
		}
	}
}

echo <<<_END
<form method='post' action='signup.php'>$error
Username <input type='text' maxlength='16' name='user' value='$user'
	onBlur='checkUser(this)'/><span id='info'></span><br />
Password <input type='password' maxlength='16' name='pass'
	value='$pass' /><br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<input type='submit' value='Signup' />
</form>
_END;
?>