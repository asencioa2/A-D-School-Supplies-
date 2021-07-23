<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

  $crayonsqty = $_POST['crayonsqty'];
  $coloredpencilsqty = $_POST['coloredpencilsqty'];
  $markersqty = $_POST['markersqty'];
  $paintqty = $_POST['paintqty'];
  $gluesticksqty = $_POST['gluesticksqty'];
  $pensqty = $_POST['pensqty'];
  $pencilsqty = $_POST['pencilsqty'];
  $sharpiesqty = $_POST['sharpiesqty'];
  $dryerasemarkersqty = $_POST['dryerasemarkersqty'];
  $highlightersqty = $_POST['highlightersqty']; 
  $erasersqty = $_POST['erasersqty'];
  $whiteoutqty = $_POST['whiteoutqty'];
  $pencilsharpenersqty = $_POST['pencilsharpenersqty'];
  $indexcardsqty = $_POST['indexcardsqty'];
  $postitsqty = $_POST['postitsqty'];
  $scissorsqty = $_POST['scissorsqty'];
  $rulersqty = $_POST['rulersqty'];
  $bindersqty = $_POST['bindersqty'];
  $notebooksqty = $_POST['notebooksqty'];
  $foldersqty = $_POST['foldersqty'];
  $staplersqty = $_POST['staplersqty'];
  $staplesqty = $_POST['staplesqty'];
  $looseleafqty = $_POST['looseleafqty']; 
  $plannersqty = $_POST['plannersqty'];
  $backpacksqty = $_POST['backpacksqty'];
  $lunchboxesqty = $_POST['lunchboxesqty'];
  $pencilcasesqty = $_POST['pencilcasesqty'];
  $laptopsqty = $_POST['laptopsqty'];
  $calculatorsqty = $_POST['calculatorsqty']; 
  $find = $_POST['find'];
?>
<html>
<head>
  <title>A & D School Supplies</title>
</head>
<body>
<h1>All Items</h1>
<h2>Order Results</h2>
<?php

	echo "<p>Date of Order:".date('H:i, jS F Y')."</p>";

	echo "<p>This is your order: </p>";

	$totalqty = 0;
	$totalqty = $crayonsqty + $coloredpencilsqty + $markersqty + $paintqty + $gluesticksqty +  $pensqty + $pencilsqty + $sharpiesqty + $dryerasemarkersqty + $highlightersqty + $erasersqty + $whiteoutqty +  $pencilsharpenersqty + $indexcardsqty + $postitsqty + $scissorsqty + $rulersqty + $bindersqty +  $notebooksqty +  $foldersqty + $staplersqty + $staplesqty + $looseleafqty + $plannersqty + $backpacksqty + $lunchboxesqty + $pencilcasesqty + $laptopsqty + $calculatorsqty;
	echo "Items ordered: ".$totalqty."<br />";


	if ($totalqty == 0) {
	  echo "You did not order anything on the previous page!<br />";
	} else {
	  if ($crayonsqty > 0) {
		echo $crayonsqty." Crayons<br />";
	  }
	  if ($coloredpencilsqty > 0) {
		echo $coloredpencilsqty." Colored Pencils <br />";
	  }
	  if ($markersqty > 0) {
		echo $markersqty." Markers<br />";
	  }
	  if ($paintqty > 0) {
		echo $paintqty." Paint<br />";
	  }
	  if ($gluesticksqty > 0) {
		echo $gluesticksqty." Glue Sticks <br />";
	  }
	  if ($pensqty > 0) {
		echo $pensqty." Pens<br />";
	  }
	  if ($pencilsqty > 0) {
		echo $pencilsqty." Pencils <br />";
	  }
	  if ($sharpiesqty > 0) {
		echo $sharpiesqty." Sharpies<br />";
	  }
	  if ($dryerasemarkers > 0) {
		echo $dryerasemarkers." Dry-Erase Markers<br />";
	  }
	  if ($highlightersqty > 0) {
		echo $highlightersqty." Highlighters <br />";
	  }	  
	  if ($erasersqty > 0) {
		echo $erasersqty." Erasers<br />";
	  }
	  if ($whiteoutqty > 0) {
		echo $whiteoutqty." White-Out <br />";
	  }
	  if ($pencilsharpenersqty > 0) {
		echo $pencilsharpenersqty." Pencil Sharpeners<br />";
	  }
	  if ($indexcardsqty > 0) {
		echo $indexcardsqty." Index Cards<br />";
	  }
	  if ($postitsqty > 0) {
		echo $postitsqty." Post-Its <br />";
	  }
	  if ($scissorsqty > 0) {
		echo $scissorsqty." Scissors<br />";
	  }
	  if ($rulersqty > 0) {
		echo $rulersqty." Rulers <br />";
	  }
	  if ($bindersqty > 0) {
		echo $bindersqty." Binders<br />";
	  }
	  if ($notebooksqty > 0) {
		echo $notebooksqty." Notebooks <br />";
	  }
	  if ($foldersqty > 0) {
		echo $foldersqty." Folders <br />";
	  }	  
	  if ($staplersqty > 0) {
		echo $staplersqty." Staplers <br />";
	  }
	  if ($staplesqty > 0) {
		echo $staplesqty." Staples<br />";
	  }
	  if ($looseleafqty > 0) {
		echo $looseleafqty." Looseleaf<br />";
	  }
	  if ($plannersqty > 0) {
		echo $plannersqty." Planners <br />";
	  }
	  if ($backpacksqty > 0) {
		echo $backpacksqty." Backpacks<br />";
	  }
	  if ($lunchboxesqty > 0) {
		echo $lunchboxesqty." Lunchboxes <br />";
	  }
	  if ($pencilcasesqty > 0) {
		echo $pencilcasesqty." Pencil Cases<br />";
	  }
	  if ($laptopsqty > 0) {
		echo $laptopsqty." Laptops <br />";
	  }
	  if ($calculatorsqty > 0) {
		echo $calculatorsqty." Calculators <br />";
	  }	  
	}


	$totalamount = 0.00;

	define('CrayonsPrice', 1);
	define('ColoredPencilsPrice', 2);
	define('MarkersPrice', 3);
    define('PaintPrice', 6);
	define('GlueSticksPrice', 2);
	define('PensPrice', 4);
	define('PencilsPrice', 2);
	define('SharpiesPrice', 5);
    define('DryEraseMarkersPrice', 6);
	define('HighlightersPrice', 6);
	define('ErasersPrice', 1);
	define('WhiteOutPrice', 4);
	define('PencilSharpenersPrice', 1);
    define('IndexCardsPrice', 2);
	define('PostItsPrice', 2);
	define('ScissorsPrice', 1);
	define('RulersPrice', .75);
	define('BindersPrice', 3);
    define('NotebooksPrice', 1);
	define('FoldersPrice', 1);
	define('StaplersPrice', 3);
    define('StaplesPrice', 1);
	define('LooseleafPrice', 1);
	define('PlannersPrice', 6);
    define('BackpacksPrice', 12);
	define('LunchboxesPrice', 10);
	define('PencilCases', 3);
    define('LaptopsPrice', 500);
	define('CalculatorsPrice', 100);
	$totalamount = $crayonsqty * CrayonsPrice
				 + $coloredpencilsqty * ColoredPencilsPrice
				 + $markersqty * MarkersPrice
				 + $paintqty * PaintPrice
				 + $gluesticksqty * GlueSticksPrice
				 + $pensqty * PensPrice
				 + $pencilsqty * PencilsPrice
				 + $sharpiesqty * SharpiesPrice
				 + $dryerasemarkersqty * DryEraseMarkersPrice
				 + $highlightersqty * HighlightersPrice
				 + $erasersqty * ErasersPrice
				 + $whiteoutqty * WhiteOutPrice
				 + $pencilsharpenersqty * PencilSharpenersPrice
				 + $indexcardsqty * IndexCardsPrice
				 + $postitsqty * PostItsPrice
				 + $scissorsqty * ScissorsPrice
				 + $rulersqty * RulersPrice
				 + $bindersqty * BindersPrice
				 + $notebooksqty * NotebooksPrice
				 + $foldersqty * FoldersPrice
				 + $staplersqty * StaplersPrice
				 + $staplesqty * StaplesPrice
				 + $looseleafqty * LooseleafPrice
				 + $plannersqty * PlannersPrice
				 + $backpacksqty * BackpacksPrice
				 + $lunchboxesqty * LunchboxesPrice
				 + $pencilcasesqty * PencilCases
				 + $laptopsqty * LaptopsPrice
				 + $calculatorsqty * CalculatorsPrice;

	echo "Subtotal: $".number_format($totalamount,2)."<br />";

	$taxrate = 0.10;  // local sales tax is 10%
	$totalamount = $totalamount * (1 + $taxrate);
	echo "Total including tax: $".number_format($totalamount,2)."<br /><br />";


?>
</body>
  <nav>
    <ol>
        <a href="HomePage.php">Go back to home</a>
    </ol>
  </nav>
</html>
