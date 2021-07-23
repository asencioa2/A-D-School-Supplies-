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
<div class="topnav">
  <input type="text" placeholder="Search..">
  
</div>
	<h1> A & D School Supplies </h1>
	<p><a href ="Employee.php">Employee Page</a> || <a href ="Manager.php">Manager Page</a> || <a href ="Owner.php">Owner Page</a> || <a href ="CustomerSupport.php">Customer Support</a></p>
	<p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a> |~-~-~-~-~-~-~-~| <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</header>

<section>
  <nav>
    <ol>
    <p style = "font-size: 100% ;"> All Categories  </p>
  	<li><a href="ColoringSupplies(Crayons).php">Coloring Supplies</a></li>
  	<li><a href="WritingSupplies(Pens).php">Writing Supplies</a></li>
  	<li><a href="SchoolDayEssentials(Erasers).php">School Day Essentials</a></li>
	<li><a href="Binders.php">Binders, Notebooks, & etc</a></li>
	<li><a href="Backpacks.php">Backpacks, Lunchboxes, & Pencil Cases</a></li>
	<li><a href="Electronics(Laptops).php">Electronics</a></li>
	<br />
	<br />
	<a href="Cart.php">Cart</a>
    </ol>
  </nav>


  <article>
    <h1>Hot School Buys</h1>
  </article>

<footer>
  <p>Created by Allen & Daniel</p>
</footer>

</body>
</html>
