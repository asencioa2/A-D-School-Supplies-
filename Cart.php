<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<html>
<body>
  <nav>
    <ol>
        <a href="HomePage.php">Go back to home</a>
    </ol>
  </nav>
<form action="CartOrder.php" method="post">
<ul>
    <h2>Coloring Supplies</h2>
<tr>
    <li>Crayons: $1.00 a pack</li>
  	<td align="center"><input type="number" name="crayonsqty" size="5" min="0" maxlength="5"></td>
</tr>
<tr>
  	<li>Colored Pencils: $2.00 a pack</li>
  	<td align="center"><input type="number" name="coloredpencilsqty" size="5" min="0" maxlength="5"></td>
</tr>
<tr>
  	 <li>Markers: $3.00 a pack</li>
  	 <td align="center"><input type="number" name="markersqty" size="5" min="0" maxlength="5"></td>
</tr>
<tr>
  	 <li>Paint: $6.00 a gallon</li>
  	 <td align="center"><input type="number" name="paintqty" size="5" min="0" maxlength="5"></td>
</tr>  	        
<tr>  	        
  	 <li>Glue Sticks: $2.00 a pack</li>
  	 <td align="center"><input type="number" name="gluesticksqty" size="5" min="0" maxlength="5"></td>
</tr>
<br />
<h2>Writing Supplies</h2>
<tr>
    <li>Pens: $4.00 a pack</li>
  	<td align="center"><input type="number" name="pensqty" size="5" min="0" maxlength="5"></td>
</tr>
<tr>
  	<li>Pencils: $2.00 a pack</li>
  	<td align="center"><input type="number" name="pencilsqty" size="5" min="0" maxlength="5"></td>
</tr>
<tr>
  	 <li>Sharpies: $5.00 a pack</li>
  	 <td align="center"><input type="number" name="sharpiesqty" size="5" min="0" maxlength="5"></td>
</tr>
<tr>
  	 <li>Dry-Erase Markers: $6.00 a pack</li>
  	 <td align="center"><input type="number" name="dryerasemarkersqty" size="5" min="0" maxlength="5"></td>
</tr>  	        
<tr>  	        
  	 <li>Highlighters: $6.00 a pack</li>
  	 <td align="center"><input type="number" name="highlightersqty" size="5" min="0" maxlength="5"></td>
</tr>
<br />
<h2>School Day Essentials</h2>
<tr>
    <li>Erasers: $1.00 a pack</li>
  	<td align="center"><input type="number" name="erasersqty" size="5" min="0" maxlength="5"></td>
</tr>
<tr>
  	<li>White-Out: $4.00 a pack</li>
  	<td align="center"><input type="number" name="whiteoutqty" size="5" min="0" maxlength="5"></td>
</tr>
<tr>
  	 <li>Pencil Sharpeners: $1.00 each</li>
  	 <td align="center"><input type="number" name="pencilsharpenersqty" size="5" min="0" maxlength="5"></td>
</tr>
<tr>
  	 <li>Index Cards: $2.00 a pack</li>
  	 <td align="center"><input type="number" name="indexcardsqty" size="5" min="0" maxlength="5"></td>
</tr>  	        
<tr>  	        
  	 <li>Post-Its: $2.00 a pack</li>
  	 <td align="center"><input type="number" name="postitsqty" size="5" min="0" maxlength="5"></td>
</tr>
<tr>
    <li>Scissors: $1.00 each</li>
  	<td align="center"><input type="number" name="scissorsqty" size="5" min="0" maxlength="5"></td>
</tr>
<tr>
  	<li>Rulers: $0.75 each</li>
  	<td align="center"><input type="number" name="rulersqty" size="5" min="0" maxlength="5"></td>
</tr>
<br />
<h2>Binders, Notebooks, etc.</h2>
<tr>
  	 <li>Binders: $3.00 each</li>
  	 <td align="center"><input type="number" name="bindersqty" size="5" min="0" maxlength="5"></td>
</tr>
<tr>
  	 <li>Notebooks: $1.00 each</li>
  	 <td align="center"><input type="number" name="notebooksqty" size="5" min="0" maxlength="5"></td>
</tr>  	        
<tr>  	        
  	 <li>Folders: $1.00 each</li>
  	 <td align="center"><input type="number" name="foldersqty" size="5" min="0" maxlength="5"></td>
</tr>
<tr>  	        
  	 <li>Staplers: $3.00 each</li>
  	 <td align="center"><input type="number" name="staplersqty" size="5" min="0" maxlength="5"></td>
</tr>
<tr>
    <li>Staples: $1.00 a pack</li>
  	<td align="center"><input type="number" name="staplesqty" size="5" min="0" maxlength="5"></td>
</tr>
<tr>
  	<li>Loose Leaf: $1 a pack</li>
  	<td align="center"><input type="number" name="looseleafqty" size="5" min="0" maxlength="5"></td>
</tr>
<tr>
  	 <li>Planners: $6.00 each</li>
  	 <td align="center"><input type="number" name="plannersqty" size="5" min="0" maxlength="5"></td>
</tr>
<br />
<h2>Backpacks, Lunchboxes, and Pencil Cases</h2>
<tr>
  	 <li>Backpacks: $12.00 each</li>
  	 <td align="center"><input type="number" name="backpacksqty" size="5" min="0" maxlength="5"></td>
</tr>  	        
<tr>  	        
  	 <li>Lunchboxes: $10.00 each</li>
  	 <td align="center"><input type="number" name="lunchboxesqty" size="5" min="0" maxlength="5"></td>
</tr>
<tr>
    <li>Pencil Cases: $3.00 each</li>
  	<td align="center"><input type="number" name="pencilcasesqty" size="5" min="0" maxlength="5"></td>
</tr>
<br />
<h2>Electronics</h2>
<tr>
  	<li>Laptops: $500.00 each</li>
  	<td align="center"><input type="number" name="laptopsqty" size="5" min="0" maxlength="5"></td>
</tr>
<tr>
  	 <li>Calculators: $100.00 each</li>
  	 <td align="center"><input type="number" name="calculatorsqty" min="0" size="5" maxlength="5"></td>
</tr>
<tr> <br /> <br />
    <td colspan="2" align="center"><input type="submit" value="Submit Order"></td>
</tr>
</ul>
</form>
</body>
</html>
