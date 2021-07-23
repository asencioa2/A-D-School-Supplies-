<?php
// Initialize the session
session_start();

// Include config file
require_once "insert.php";

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
$_SESSION['id'] = $users[0];
$_SESSION['username'] = $users[1];
$_SESSION['password'] = $users[2];
$_SESSION['startdate'] = $users[3];
$_SESSION['role'] = $users[4];

if($_SESSION['role'] == 'employee'){
   header("Location: Employee.php");
   }
else if($_SESSION['role'] == 'admin'){
   header("Location: Manager.php");
   }
else if($_SESSION['role'] == 'owner'){
   header("Location: Owner.php");
   }
else{
   header("Location: HomePage.php");
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
	<p><a href ="HomePage.php">HomePage</a><br /><br /><a href ="Manager.php">Manager Page</a> || <a href ="Owner.php">Owner</a> || <a href ="CustomerSupport.php">Customer Support</a></p>
	
	
</header>

<section>
  <nav>
    <ul>
  	<li><a href="Employee.php">Main Menu</a></li>
    </ul>
  </nav>


  <article>
    <h1>Main Menu</h1>
    <ul>
        <li><a style = "font-size: 125% ;" href ="TimeManager1.php">Time Manager</a></li>
        <li><a style = "font-size: 125% ;" href ="BeingEmployee.php">Being a Employee</a></li>
        
    </ul>
  </article>

<footer>
  <p style = "font-size: 100% ;">Created by Allen & Daniel</p>
</footer>

</body>
</html>
