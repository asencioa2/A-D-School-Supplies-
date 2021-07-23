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
  <h1>Coloring Supplies</h1>
</header>

<section>
  <nav>
    <ol>
  	<li><a href="ColoringSupplies(Crayons).php">Crayons</a></li>
  	<li><a href="ColoredPencils.php">Colored Pencils</a></li>
  	<li><a href="Markers.php">Markers</a></li>
	<li><a href="Paint.php">Paint</a></li>
	<li><a href="GlueSticks.php">Glue Sticks</a></li>
	<a href = "HomePage.php">Go Back To HomePage!</a>
    </ol>
  </nav>


  <article>
    <h1>Crayons</h1>
    <img src="https://www.riteaid.com/shop/media/catalog/product/0/7/071662000240.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=406&width=406&canvas=406:406" width="200" height="200">
    <img src="https://target.scene7.com/is/image/Target/GUEST_40af19d4-aabc-4e98-b57e-c8f4ab749091?wid=325&hei=325&qlt=80&fmt=webp" width="200" height="200">
    <img src="https://target.scene7.com/is/image/Target/GUEST_6ab2dddd-e1ff-4c35-af35-ef759114048f?wid=325&hei=325&qlt=80&fmt=webp" width="200" height="200">
  </article>

<footer>
  <p>Created by Allen & Daniel</p>
</footer>

</body>
</html>
