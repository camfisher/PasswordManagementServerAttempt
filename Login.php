<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">
   
   <head>
      <title>dmOS Login</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      
      <style>
	  * {box-sizing:border-box}
body {
font-family: Verdana,sans-serif;
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

      </style>
      
   </head>
	
   <body>
    <ul>
	<img src="/Resource/dmOS.png" width="375" height="75" alt="dmOS"/>
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
         
         <?php
//			$dbname = 'login';
//			$dbuser = 'root';
//			$dbpass = '';
//			$dbhost = 'localhost';
			$pass = 'Fltech';
//			$connect = mysql_connect($dbhost, $dbuser, $dbpass) or die("Unable to connect to '$dbhost'");
//			mysql_select_db($dbname) or die("Could not open the database '$dbname'");
//			$query = "SELECT id, password FROM login WHERE id = '1'";
//			mysqli_query($db, $query) or die('Error Querying Database.');
//			$result = mysqli_query($db, $query);
//			$num = mysqli_num_rows($result);
			
//			$row = mysqli_fetch_row($result);
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
               if ($_POST['username'] == 'csmith' && 
                  $_POST['password'] == $pass) {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['user'] = 'scottsmith';

                echo '<script type="text/javascript"> window.open("home.php","_self");</script>';
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" name = "username" placeholder = "username" required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password" required><br />
            <input type = "submit" name="login" value = " LOGIN " class="button2"/><br />
         </form>
         
      </div> 
      <div class="site-footer", id="footer">
        <a style="color: white">
        </a>
    </div>
   </body>
</html>