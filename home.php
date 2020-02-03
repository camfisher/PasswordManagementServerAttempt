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
  background-color: #dddddd;
  border: none;
  text-align: center;
  font-size: 28px;
  width: 50%;
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
  top: 45%;
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
	<button class="button" style="vertical-align:top"><a href = "/changepass.php"><span>Change Password</span></a></button>
	<button class="button" style="vertical-align:top"><a href = "/Help.html"><span>Help</span></a></button>
	<button class="button" style="vertical-align:top"><a><span>Home</span></a></button>
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
    <table class="center">
            <tr>
                <td align="center"><button class="button2" style="vertical-align:top"><a href="passwords.php"><span><img src="/Resource/passwords.png" width="100%" height="35%" alt="passwords"/></span></a></button></td>
            </tr>
            <tr>
                
            </tr>
    </table>
	<div class="page-wrap">
    
</div>
    <div class="site-footer", id="footer">
        <a style="color: white">
        </a>
    </div>
    </body>
</html>