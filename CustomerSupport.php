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
	<p><a href ="HomePage.php">HomePage</a><br /><br /><a href ="Employee.php">Employee Page</a> || <a href ="Manager.php">Manager Page</a> </p>
	
	
</header>

<section>
  <nav>
    <ul>
  	<li><a href="CustomerSupport.php">About Us</a></li>
  	<li><a href="Support.php">Support</a></li>
    </ul>
  </nav>


  <article>
    <h1>About Us</h1>
    <p style = "font-size: 150% ;">A & D School Supplies is run by two college students going into their Junior year. The goal of this company is to provide other students and teachers with the supplies they need in order to fulfill their school supply needs. We make it a mission to sell you our supplies at a price that will either match or beat our competitors.</p>
  </article>
</section>
<footer>
  <p style = "font-size: 100% ;">Created by Allen & Daniel</p>
</footer>

</body>
</html>
