<?php
      if(!isset($_SESSION['user'])){ // If session is not set that redirect to Login Page                            {
           header("Location:Login.php");  
       }
?>

<?php
	$connect = mysqli_connect('localhost', 'root', 'M@cr3F^&b$', 'passwords');
	$query = "INSERT INTO passwords (service, password, user_name, Date_Added)
	VALUES ('$_POST[service]', '$_POST[password]', '$_POST[username]', '$_POST[date]')";
	if ($connect->query($query) === TRUE)
	{
		echo "Record Created Successfully";
	} else {
		echo "Error: " . $query . "<br>" . $connect->error;
	}
	$connect->close();
	header('Refresh: 0; URL = /passwords.php');
?>