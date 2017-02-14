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
</style>
<body>
	<form action="Taschenrechner1.php" method="post">
		<p><h1>Taschenrechner</h1></p>
		<table>
			<tr>
				<td>Operand 1</td>
				<td>Operator</td>
				<td>Operand 2</td>
				<td>Ergebnis</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="txtOp1"/>
				</td>
				<td>+</td>
				<td>
					<input type="text" name="txtOp2"/>
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
					<input type="text" name="txtErgebnis" value="<?=(!empty($meinErgebnis) ? $meinErgebnis : '')?>"/>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><input type="submit" name="btnBerechnen" value="Berechnen"/></td>
			</tr>
		</table>
	</form>
</body>
</html>
