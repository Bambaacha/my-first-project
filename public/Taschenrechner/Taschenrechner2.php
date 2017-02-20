<?php
	session_start();

?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Taschenrechner</title>
</head>
<style>
	table{
		text-align: center;
	}
	[type = button],
	[type = reset],
	[type = submit]{
		width: 100px;
	}
</style>
<body>
	<form action="Taschenrechner2.php" method="post">
		<p><h1>Taschenrechner</h1></p>
		<table>
			<tr>
				<td>Operand 1</td>
				<td>Operator</td>
				<td>Operand 2</td>
				<td>Ergebnis</td>
			</tr>
			<tr>
				<?php
				if(isset($_POST['btnM']))
				{
					$_SESSION['saveErgebnis'] = $_POST['txtErgebnis'];
				}
				
				if(isset($_POST['btnMr']))
				{
					$_POST['txtOp1'] = $_SESSION['saveErgebnis'];
				}

				if(isset($_POST['btnLoeschen']))
				{
					$value = "";
				}

				?>
				<td>
					<input type="text" name="txtOp1" value="<?=(!empty($_POST['txtOp1']) ? isset($_POST['btnLoeschen']) ? $value : $_POST['txtOp1'] : '')?>"/>
				</td>
				<td>+</td>
				<td>
					<input type="text" name="txtOp2" value="<?=(!empty($_POST['txtOp2']) ? isset($_POST['btnLoeschen']) ? $value : $_POST['txtOp2'] : '')?>"/>
				</td>
				<td>=</td>
				<?php

				if(trim(!empty($_POST['txtOp1'])) && trim(!empty($_POST['txtOp2'])))
				{
					$_POST['txtErgebnis'] = $_POST['txtOp1'] + $_POST['txtOp2'];
					$meinErgebnis = $_POST['txtErgebnis'];
				}

				?>
				<td>
					<input type="text" name="txtErgebnis" value="<?=(!empty($meinErgebnis) ? isset($_POST['btnLoeschen']) ? $value : $meinErgebnis : '')?>"/>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><input type="submit" name="btnBerechnen" value="Berechnen"/></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><input type="submit" name="btnLoeschen" value="C"/></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><input type="submit" name="btnM" value="M+"/></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><input type="submit" name="btnMr" value="MR"/></td>
			</tr>
		</table>
	</form>
</body>
</html>
