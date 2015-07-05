<?php //index.php
//Image uploader.

echo <<<_END
<html><head><title>PHP Form Upload</title></head><body>
<form method='post' action='index.php' enctype='multipart/form-data'>
Select File: <input type='file' name='user_image' size='10' />
<input type='submit' value='Upload' />
</form>
_END;

if ($_FILES)
{
	$name = $_FILES['user_image']['name'];
	move_uploaded_file($_FILES['user_image']['tmp_name'], $name);
	echo "Uploaded image '$name'<br /><img src='$name' />";
}

echo "</body></html>";
?>