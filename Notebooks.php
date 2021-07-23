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
	<h1>Binders, Notebooks, & etc</h1>
</header>

<section>
  <nav>
    <ol>
  	<li><a href="Binders.php">Binders</a></li>
  	<li><a href="Notebooks.php">Notebooks</a></li>
  	<li><a href="Folders.php">Folders</a></li>
	<li><a href="Staplers.php">Staplers</a></li>
	<li><a href="Staples.php">Staples</a></li>
	<li><a href="LooseLeaf.php">LooseLeaf</a></li>
	<li><a href="Planners.php">Planners</a></li>
	<a href = "HomePage.php">Go Back To HomePage!</a>
    </ol>
  </nav>

  <article>
    <h1>Notebooks</h1>
    <img src="http://g-ecx.images-amazon.com/images/G/01/aplusautomation/vendorimages/26d2c4c0-d330-401c-89d3-9f58deb0951b._V329473428_.jpg" width="200" height="200">
    <img src= "https://www.staples-3p.com/s7/is/image/Staples/s1119306_sc7?wid=512&hei=512" width ="200" height="200">
    <img src= "https://th.bing.com/th/id/OIP.0TIjKDpPRcYAbDaqiM_w1AAAAA?w=192&h=192&c=7&o=5&pid=1.7" width ="200" height="200">
  </article>

<footer>
  <p>Created by Allen & Daniel</p>
</footer>

</body>
</html>
