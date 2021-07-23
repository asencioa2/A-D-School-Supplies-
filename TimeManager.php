<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>A & D School Supplies</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
}


header {
  background-color: red;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

p {
    font-size: 45%;
    Color: Black;
}

nav {
  float: left;
  width: 30%;
  height: 300px; 
  background: yellow;
  padding: 20px;
}

nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: white;
  height: 300px; 
}

section:after {
  content: "";
  display: table;
  clear: both;
}

footer {
  background-color: blue;
  padding: 10px;
  text-align: center;
  color: white;
}

@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>

<header>
	<h1> A & D School Supplies </h1>
	<p><a href ="HomePage.php">HomePage</a><br /><br /><a href="Manager.php"> Manager Main Menu</a> || <a href ="Employee.php">Employee Page</a> || <a href ="Owner.php">Owner</a> || <a href ="CustomerSupport.php">Customer Support</a></p>
	
	
</header>

<section>
  <nav>
    <ul>
  	<li><a href="TimeManager.php">Time Manager</a></li>
    </ul>
  </nav>
</section>

  <article>
    <h1>Time Manager</h1>
    <ul>
        <li><a style = "font-size: 125% ;">12:00 AM</a></li>
        <li><a style = "font-size: 125% ;">1:00 AM</a></li>
        <li><a style = "font-size: 125% ;">2:00 AM</a></li>
        <li><a style = "font-size: 125% ;">3:00 AM</a></li>
        <li><a style = "font-size: 125% ;">4:00 AM</a></li>
        <li><a style = "font-size: 125% ;">5:00 AM</a></li>
        <li><a style = "font-size: 125% ;">6:00 AM</a></li>
        <li><a style = "font-size: 125% ;">7:00 AM</a></li>
        <li><a style = "font-size: 125% ;">8:00 AM</a></li>
        <li><a style = "font-size: 125% ;">9:00 AM</a></li>
        <li><a style = "font-size: 125% ;">10:00 AM</a></li>
        <li><a style = "font-size: 125% ;">11:00 AM</a></li>
        <li><a style = "font-size: 125% ;">12:00 PM</a></li>
        <li><a style = "font-size: 125% ;">1:00 PM</a></li>
        <li><a style = "font-size: 125% ;">2:00 PM</a></li>
        <li><a style = "font-size: 125% ;">3:00 PM</a></li>
        <li><a style = "font-size: 125% ;">4:00 PM</a></li>
        <li><a style = "font-size: 125% ;">5:00 PM</a></li>
        <li><a style = "font-size: 125% ;">6:00 PM</a></li>
        <li><a style = "font-size: 125% ;">7:00 PM</a></li>
        <li><a style = "font-size: 125% ;">8:00 PM</a></li>
        <li><a style = "font-size: 125% ;">9:00 PM</a></li>
        <li><a style = "font-size: 125% ;">10:00 PM</a></li>
        <li><a style = "font-size: 125% ;">11:00 PM</a></li>
    </ul>
  </article>

<footer>
  <p style = "font-size: 100% ;">Created by Allen & Daniel</p>
</footer>

</body>
</html>
