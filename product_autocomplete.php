<?php
// include header
// include "header.php";
// set the tpl page
// $page = "product_autocomplete.tpl";

// if session is null, showing up the text and exit
// if ($_SESSION['userName'] == '' && $_SESSION['userPassword'] == '')
// {
// 	// show up the text and exit
// 	echo "You have not authorization for access the modules.";
// 	exit();
// }
// else 
// {
	$q = $_GET['search'];
	
	$queryProduct = "SELECT * FROM as_products WHERE productBarcode LIKE '%$q%' OR productName LIKE '%$q%'";
	$sqlProduct = mysqli_query($connect, $queryProduct);
	
	// fetch data
	while ($dtProduct = mysqli_fetch_array($sqlProduct))
	{
		echo "$dtProduct[memberCode] - $dtProduct[memberFullName] - $dtProduct[memberFullName]\n";	
			
	}	
// }
?>