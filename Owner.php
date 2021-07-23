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
	<p><a href ="HomePage.php">HomePage</a><br /><br /><a href ="Employee.php">Employee Page</a> || <a href="Manager.php"> Manager Page</a> || <a href ="Owner.php">Owner</a> || <a href ="CustomerSupport.php">Customer Support</a></p> 
	
	
</header>

<section>
  <nav>
    <ul>
  	<li><a href ="Owner.php">Owner</a></li>
    </ul>
  </nav>


  <article>
    <h1>Owner</h1>
    <p style = "font-size: 150% ;"> As the owners of A & D School Supplies we have access to the whole website are are able to change whatever we want to do including prices, the website, who gets access to what.  </p>
  </article>

<footer>
  <p style = "font-size: 100% ;">Created by Allen & Daniel</p>
</footer>

</body>
</html>
