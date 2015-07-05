<?php //signup.php
include_once 'header.php';

echo <<<_END
<script>
function checkUser(user)
{
	if(user.value == '')
	{
		document.getElementById('info').innerHTML = ''
		return
	}
	
	params = "user=" + user.value
	request = new ajaxRequest()
	request.open("POST", "checkuser.php", true)
	request.setRequestHeader("content-type",
		"application/x-www-form-urlencoded")
	request.setRequestHeader("Content-length", params.length)
	request.setRequestHeader("Connection", "close")
	
	request.onreadystatechange = function()
	{
		if (this.readyState == 4)
		{
			if (this.status == 200)
			{
				if (this.responseText != null)
				{
				document.getElementById('info').innerHTML = 
				this.responseText
				}
				else alert("Ajax error: No data received")
			}
			else alart("Ajax error: " + this.statusText)
		}
	}
	request.send(params)
}

function ajaxRequest()
{
	try
	{
		var request = new XMLHttpRequest()
	}
	catch
	{
		try
		{
			request = new ActiveXObject("Msxml2.XMLHTTP")
		}
		catch(e2)
		{
			request = false
		}
	}
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