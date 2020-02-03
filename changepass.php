<?php
	session_start();
	if(!isset($_SESSION['user'])){ // If session is not set that redirect to Login Page                            {
           header("Location:Login.php");  
       }
	?>
<html lang = "en">
   
   <head>
      <title>dmOS Login</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      
      <style>
	  * {box-sizing:border-box}
body {
font-family: Verdana,sans-serif;
background-color: #dddddd;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: BLACK;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #ff0000;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}
.show {display:block;}
* {
  margin: 0;
}
html, body {
  height: 100%;
}
.page-wrap {
  min-height: 1%;
  margin-bottom: -50px; 
}
.page-wrap:after {
  content: "";
  display: block;
}
.site-footer, .page-wrap:after {
  height: 75px; 
}
.site-footer {
	position: absolute;
	text-align: center;
	padding-top: 12.5px;
  background: BLACK;
}
#footer {
    position: fixed;
    bottom: 0;
    width: 100%;
}
	
.button {
  float: right;
  display: inline-block;
  border-radius: 4px;
  background-color: black;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '▫';
  color: #42f4ff;
  position: absolute;
  opacity: 0;
  top: 0;
  left: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-left: 25px;
}

.button:hover span:after {
  opacity: 1;
  left: 0;
} 

.button2 {
  float: center;
  display: inline-block;
  border-radius: 4px;
  background-color: black;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 10px;
  padding: 10px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
 
.form-signin {
max-width: 330px;
padding: 15px;
margin: 0 auto;
color: black;
}

.form-signin .form-signin-heading,
.form-signin .checkbox {
margin-bottom: 10px;
}

.form-signin .checkbox {
font-weight: normal;
}

.form-signin .form-control {
position: relative;
height: auto;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
padding: 10px;
font-size: 16px;
border-color:black;
background-color: #555555;
}

.form-signin .form-control:focus {
z-index: 2;
}

.form-signin input[type="password"] {
margin-bottom: 10px;
border-top-left-radius: 0;
border-top-right-radius: 0;
border-color:black;
background-color: #555555;
}

table.center {
margin-left: auto;
margin-right: auto;
}
a:link {
color:white;
}
a:visited{
color:white;
}
      </style>
      
   </head>
	
   <body>
    <ul>
	<img src="/Resource/dmOS.png" width="375" height="75" alt="dmOS"/>
	<button class="button" style="vertical-align:top"><a href = "/logout.php"><span>Sign Out</span></a></button>
	<button class="button" style="vertical-align:top"><a><span>Change Password</span></a></button>
	<button class="button" style="vertical-align:top"><a href = "/Help.html"><span>Help</span></a></button>
	<button class="button" style="vertical-align:top"><a href = "/home.php"><span>Home</span></a></button>
</ul>	
	<script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var d = 0; d < dropdowns.length; d++) {
      var openDropdown = dropdowns[d];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

</script>
      
      <div class = "container form-signin" class= "center">
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" name = "username" placeholder = "username" required autofocus><br/>
            <input type = "password" class = "form-control" name = "password" placeholder = "old password" required><br/>
			<input type = "password" class = "form-control" name = "newpassword" placeholder = "new password" required><br/>
			<input type = "password" class = "form-control" name = "newpassword1" placeholder = "confirm new password" required><br/>
            <input type = "submit" name="login" value = " LOGIN " class="button2"/><br />
         </form>
		 
		 <?php
			$id = "1";
			$connect = mysqli_connect('localhost', 'root', 'M@cr3F^&b$', 'login');
			$db = mysqli_connect('localhost', 'root', 'M@cr3F^&b$', 'login');
			$query = "SELECT id, password FROM login WHERE id = '1'";
			mysqli_query($db, $query) or die('Error Querying Database.');
			$result = mysqli_query($db, $query);
			$row = mysqli_fetch_row($result);
			
			$username = "scottsmith";
			$password = $_POST['password'];
			$newpassword = $_POST['newpassword'];
			$confirmnewpassword = $_POST['newpassword1'];
				
				if (isset($_POST['login']))
				{
				if($_POST['username'] != $username)
				{
				echo "The username you entered does not exist";
				}
				else if($password != $row[1])
				{
				echo "You entered an incorrect password";
				echo $row[1];
				}
				if($newpassword == $confirmnewpassword)
				{
					$sql = mysqli_query($db, "UPDATE login SET password = '$newpassword' WHERE id ='$id'");
					echo "Congratulations You have successfully changed your password";
				}
				else
				{
				echo "Passwords do not match";
				echo "$newpassword : $confirmnewpassword";
				}
				}
		?>
		 
      </div> 
      <div class="site-footer", id="footer">
        <a style="color: white">
        </a>
    </div>
   </body>
</html>