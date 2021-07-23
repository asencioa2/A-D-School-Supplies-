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
    <h1>White-Out</h1>
    <img src="https://www.staples-3p.com/s7/is/image/Staples/sp43812536_sc7?wid=512&hei=512" width="200" height="200">
    <img src="https://target.scene7.com/is/image/Target/GUEST_03a33642-b7fd-405a-becb-e284ab438f66?wid=325&hei=325&qlt=80&fmt=webp" width="200" height="200">
  </article>

<footer>
  <p>Created by Allen & Daniel</p>
</footer>

</body>
</html>
