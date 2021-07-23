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
	<h1>School Day Essentials</h1>
</header>

<section>
  <nav>
    <ol>
      	<li><a href="SchoolDayEssentials(Erasers).php">Erasers</a></li>
      	<li><a href="WhiteOut.php">White-Out</a></li>
      	<li><a href="PencilSharpeners.php">Pencil Sharpeners</a></li>
	<li><a href="IndexCards.php">Index Cards</a></li>
	<li><a href="PostIts.php">Post-Its</a></li>
	<li><a href="Scissors.php">Scissors</a></li>
	<li><a href="Rulers.php">Rulers</a></li>
	<a href = "HomePage.php">Go Back To HomePage!</a>
    </ol>
  </nav>
  
  <article>
    <h1>Pencil Sharpeners</h1>
    <img src="https://www.dollartree.com/ccstore/v1/images/?source=/file/v772851616588643119/products/26571.jpg&height=940&width=940" width="200" height="200">
    <img src="https://images-na.ssl-images-amazon.com/images/I/61CD8asqDPL._AC_SX569_.jpg" width="200" height="200">
    <img src="https://dmzn2b8hkpq8b.cloudfront.net/images/products/96x96/S361211.jpg" width="200" height="200">
  </article>

<footer>
  <p>Created by Allen & Daniel</p>
</footer>

</body>
</html>
