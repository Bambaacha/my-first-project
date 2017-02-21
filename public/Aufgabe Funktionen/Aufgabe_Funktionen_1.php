<?php
/**
 * Created by PhpStorm.
 * User: miltos
 * Date: 21.02.17
 * Time: 10:47
 */
	session_start();
	include('Funktionen.inc.php');
	
	if(isset($_POST['btnSort']) && !empty($_POST['txtField1'] && !empty($_POST['txtField2'])))
	{
		$myArray[] = (int)$_POST['txtField1'];
		$myArray[] = (int)$_POST['txtField2'];
		$myNewArray = bubbleSort($myArray);
		
	}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Zahlen sortieren</title>
</head>
<style>
</style>
<body>
	<form action="Aufgabe_Funktionen_1.php" method="post">
		<p><h1>Zahlen sortieren</h1></p>
		<input type="txt"
		       name="txtField1"
		       value="<?=(!empty($myNewArray[0]) ? $myNewArray[0] : (!empty($_POST['txtField1']) ? $_POST['txtField1'] : ''))?>"/><br>
		<input type="txt"
		       name="txtField2"
		       value="<?=(!empty($myNewArray[1]) ? $myNewArray[1] : (!empty($_POST['txtField2']) ? $_POST['txtField2'] : ''))?>"/><br>
		<input type="submit" name="btnSort" value="Sortieren"/>
	</form>
</body>
</html>
