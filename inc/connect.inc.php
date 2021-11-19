<?php 
	$dbhandle = mysqli_connect("sql311.epizy.com","epiz_24897568","mfM9Z8rUSua") or die("Couldn't connet to SQL server");
	$selected = mysqli_select_db($dbhandle,"epiz_24897568_grocery") or die("Couldn'ttt select DB");

?>