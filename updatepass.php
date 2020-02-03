<?php
	session_start();
	if(!isset($_SESSION['user'])){ // If session is not set that redirect to Login Page
           header("Location:Login.php");  
       }
	?>

<?php
	$id = "1";
	$connect = mysqli_connect('localhost', 'root', 'M@cr3F^&b$', 'login');
	
	if (isset($_POST['login']))
	{
		if ($_POST['username'] == 'scottsmith'
		&& $_POST['password'] == $row[1])
		{
			if ($_POST['newpassword'] == $_POST['newpassword1'])
			{
				$query = "UPDATE login SET password = '".$_POST['newpassword']."' WHERE id =$id";
			}
			else
			{
				$msg = 'new passwords dont match';
			}
		}
		else
		{
			echo 'wrong username or password';
		}
	}
	
	if ($connect->query($query) === TRUE)
	{
		echo "Password Updated Successfully";
		$connect->close();
		header('Refresh: 0; URL = /home.php');
	} else {
		echo "Error: " . $query . "<br>" . $connect->error;
		$connect->close();
		header('Refresh: 0; URL = /changepass.php');
	}
?>

