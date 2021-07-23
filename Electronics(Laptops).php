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
  <h1>Electronics</h1>
</header>

<section>
  <nav>
    <ol>
  	<li><a href="Electronics(Laptops).php">Laptops</a></li>
  	<li><a href="Calculators.php">Calculators</a></li>
	<a href = "HomePage.php">Go Back To HomePage!</a>
    </ol>
  </nav>

  <article>
    <h1>Laptops</h1>
    <img src="https://i.dell.com/sites/csimages/Video_Imagery/all/xps_7590_touch.png" width="250" height="200">
    <img src="https://images-na.ssl-images-amazon.com/images/I/71vvXGmdKWL._AC_SX569_.jpg" width="250" height="200">
    <img src="https://i5.walmartimages.com/asr/3eaec992-8830-4513-9b46-e5cd55ec76d0_1.44a1cb17327f5c475a9c88d17502eb5d.jpeg?odnWidth=100&odnHeight=100&odnBg=ffffff" width="250" height="200">
  </article>

<footer>
  <p>Created by Allen & Daniel</p>
</footer>

</body>
</html>
