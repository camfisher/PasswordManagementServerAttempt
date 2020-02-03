<?php
	session_start();
	if(!isset($_SESSION['user'])){ // If session is not set that redirect to Login Page                            {
           header("Location:Login.php");  
       }
	?>
<html>
    <head>
        <title>
            dmOS
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
.button2 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button2 span:after {
  content: '▫';
  color: #42f4ff;
  position: absolute;
  opacity: 0;
  top: 10%;
  left: -20px;
  transition: 0.5s;
}

.button2:hover span {
  padding-left: 25px;
}

.button2:hover span:after {
  opacity: 1;
  left: 0;
}

table{
	text-align: center;
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
#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
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
.button3 {
  float: center;
  display: inline-block;
  border-radius: 4px;
  background-color: #dddddd;
  border: none;
  text-align: center;
  font-size: 28px;
  width: 50%;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button3 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button3 span:after {
  content: '▫';
  color: #42f4ff;
  position: absolute;
  opacity: 0;
  top: 10%;
  left: -20px;
  transition: 0.5s;
}

.button3:hover span {
  padding-left: 25px;
}

.button3:hover span:after {
  opacity: 1;
  left: 0;
}
</style>
</head>
<body>
    <ul>
	<img src="/Resource/dmOS.png" width="375" height="75" alt="dmOS"/>
	<button class="button" style="vertical-align:top"><a href = "/logout.php"><span>Sign Out</span></a></button>
	<button class="button" style="vertical-align:top"><a href= "/Help.html"><span>Help</span></a></button>
	<button class="button" style="vertical-align:top"><a href= "/home.php"><span>Home</span></a></button>
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
<input type="text" id="myInput" onkeyup="search()" placeholder="Search Passwords..." title="Type in a name">
		<?php
		$db = mysqli_connect('localhost', 'root', '', 'passwords');
		$query = "SELECT * FROM passwords";
		mysqli_query($db, $query) or die('Error Querying Database.');
		$result = mysqli_query($db, $query);
		$num = mysqli_num_rows($result);
		?>
    <table id="myTable">
			<tr class="header">
				<th style="width:10%;">Service</th>
				<th style="width:10%;">Date Added</th>
				<th style="width:10%;">Password</th>
				<th style="width:10%;">username</th>
				<th style="width:10%;"><button class="button2"><a href = "http://www.sha1-online.com/" target="_blank"><span>Create Password</span></a></button></th>
			</tr>
				<?php
				while ($row = mysqli_fetch_array($result)) 
				{
					?>
			<tr>
				<td><?php echo $row['service']?></td>
				<td><?php echo $row['Date_Added']?></td>
				<td><?php echo $row['password']?></td>
				<td><?php echo $row['user_name']?></td>
				<td class="delete">
					<form action="delete_post.php" method="post">
						<input type ="hidden" name="id" value="<?php echo $row['id']; ?>">
						<button class="button3" type = "submit" name="submit" ><a><span>✕</span></a></button>
					</form>
				</td>
			</tr>
			<?php
			}
			?>
			<tr>
			<form action="send_post.php" method="post" class = "form-signin">
				<td><input type="text" name="service" class = "form-control"></input></td>
				<td><input type="text" name="date" class = "form-control"  value="<?php date_default_timezone_set("America/New_York"); echo date("m/d/Y"); ?>" readonly></input></td>
				<td><input type="text" name="password" class = "form-control"></input></td>
				<td><input type="text" name="username" class = "form-control"></input></td>
				<td><button class="button2" type = "submit" name="submit" ><a><span>Submit</span></a></button></td>
			<form>
			</tr>
		</table>
	<script>
function search() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
	<div class="page-wrap">
    
</div>
    <div class="site-footer", id="footer">
        <a style="color: white">
        </a>
    </div>
    </body>
</html>