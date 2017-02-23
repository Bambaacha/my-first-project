<?php
/**
 * Created by PhpStorm.
 * User: miltos
 * Date: 21.02.17
 * Time: 10:47
 */
	session_start();
	include('Funktionen.inc.php');
//	unset($_SESSION['myNewArray']);

	if(isset($_POST['btnSort']) && !empty($_POST['txtField1']))
	{
		$_SESSION['myNewArray'][] = (int)$_POST['txtField1'];
		$_SESSION['myNewArray'] = bubbleSort($_SESSION['myNewArray']);
	}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Zahlen sortieren</title>
</head>
<style>
	table {
		margin-top: 20px;
	}

	td {
		width: 60px;
		text-align: center;
	}
</style>
<body>
	<form action="Aufgabe_Funktionen_2.php" method="post">
		<p><h1>Zahlen sortieren</h1></p>
		<input type="txt"
		       name="txtField1"
		       value="<?=((!empty($_POST['txtField1']) ? $_POST['txtField1'] : ''))?>"/><br>
		<input type="submit" name="btnSort" value="Einfügen und Sortieren"/>
		<table class="table" border="1">
			<tr>
				<td>Zahl</td>
				<td>Anzahl</td>
			</tr>
			<?php
			foreach($_SESSION['myNewArray'] as $value)
			{
				$newArr[] = $value;//@todo
				foreach($newArr as $key){
				if($key !== $value)
				{
			?>
				<tr>
					<td><?=$value?></td>
					<td><?=countArrayValues($_SESSION['myNewArray'], $value)?></td>
				</tr>
			<?php
				}}
			}
			?>
		</table>
	</form>
</body>
</html>
