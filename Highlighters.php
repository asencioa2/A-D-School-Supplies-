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
  <h1>Writing Supplies</h1>
</header>

<section>
  <nav>
    <ol>
      	<li><a href="WritingSupplies(Pens).php">Pens</a></li>
      	<li><a href="Pencils.php">Pencils</a></li>
      	<li><a href="Sharpies.php">Sharpies</a></li>
	<li><a href="DryEraseMarkers.php">Dry-Erase Markers</a></li>
	<li><a href="Highlighters.php">Highlighters</a></li>
	<a href = "HomePage.php">Go Back To HomePage!</a>
    </ol>
  </nav>

  <article>
    <h1>HighLighters</h1>
    <img src="https://images-na.ssl-images-amazon.com/images/I/912Y96r8ZVL._AC_SX679_.jpg" width="200" height="200">
    <img src="https://www.cvs.com/bizcontent/merchandising/productimages/large/7170924063.jpg" width="200" height="200">
    <img src="https://www.cvs.com/bizcontent/merchandising/productimages/large/7033090837.jpg" width="200" height="200">
  </article>

<footer>
  <p>Created by Allen & Daniel</p>
</footer>

</body>
</html>
