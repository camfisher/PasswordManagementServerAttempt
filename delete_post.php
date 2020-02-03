<?php
	$connect = mysqli_connect('localhost', 'root', 'M@cr3F^&b$', 'passwords');
	$id = $_POST['id'];
	if ($id > 0)
	{
		$query = "DELETE FROM passwords WHERE id=".$id." LIMIT 1";
		$result = mysqli_query($connect, $query);
	} else {
		echo 'error';
	}
	$connect->close();
	header('Refresh: 0; URL = /passwords.php');
?>