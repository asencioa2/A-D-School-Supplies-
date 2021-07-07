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
  <h1>Backpacks, Lunchboxes, & Pencil Cases</h1>
</header>

<section>
  <nav>
    <ol>
  	<li><a href="Backpacks.php">Backpacks</a></li>
  	<li><a href="Lunchboxes.php">Lunchboxes</a></li>
  	<li><a href="PencilCases.php">Pencil Cases</a></li>
	<a href = "HomePage.php">Go Back To HomePage!</a>
    </ol>
  </nav>

  <article>
    <h1>Backpacks</h1>
     <img src= "https://th.bing.com/th/id/OIP.P11F1DBZgm0MRZScDFvvjAHaHa?w=217&h=217&c=7&o=5&pid=1.7" width ="200" height="200">
      <img src= "https://th.bing.com/th/id/OIP.G0QJ73xA3H9oPA1N9FDpEQHaHa?w=201&h=201&c=7&o=5&pid=1.7" width ="200" height="200">
       <img src= "https://th.bing.com/th/id/OIP.JotDFYApleHvW54IkxX3cAHaLH?w=147&h=220&c=7&o=5&pid=1.7" width ="200" height="200">
  </article>

<footer>
  <p>Created by Allen & Daniel</p>
</footer>

</body>
</html>
