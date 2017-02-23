<?php
/**
 * Created by PhpStorm.
 * User: miltos
 * Date: 21.02.17
 * Time: 10:47
 */
	session_start();
	include('Funktionen.inc.php');

	if(isset($_POST['btnSort']) && !empty($_POST['txtField1']))
	{
		$_SESSION['myNewArray'][] = (int)$_POST['txtField1'];
		$_SESSION['myNewArray'] = bubbleSort($_SESSION['myNewArray']);
	}

	if(isset($_POST['btnReset']))
	{
		unset($_SESSION['myNewArray']);
	}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Zahlen sortieren</title>
</head>
<style>
	html {
		text-align: center;
	}

	table {
		margin-top: 20px;
		width: 131px;
	}

	td {
		width: 60px;
		text-align: center;
	}

	input[name="btnSort"],
	input[name="btnReset"]{
		width: 131px;
		margin-top: 10px;
	}
</style>
<body>
	<form action="Aufgabe_Funktionen_2.php" method="post">
		<p><h1>Zahlen sortieren</h1></p>
		<input type="txt"
		       name="txtField1"
		       value="<?=((!empty($_POST['txtField1']) ? $_POST['txtField1'] : ''))?>"/><br>
		<input type="submit" name="btnSort" value="Einfügen und Sortieren"/>
		<table class="table" border="1" align="center">
			<tr>
				<td>Zahl</td>
				<td>Anzahl</td>
			</tr>
			<?php
			if(!empty($_SESSION['myNewArray']))
			{
				$arrayZahlen = numberArrayUnique($_SESSION['myNewArray']);

				foreach($arrayZahlen as $value)
				{
					?>
					<tr>
						<td><?= $value ?></td>
						<td><?= countArrayValues($_SESSION['myNewArray'], $value) ?></td>
					</tr>
					<?php
				}
			}
			?>
		</table>
		<input type="submit" name="btnReset" value="Einträge löschen" />
	</form>
</body>
</html>
