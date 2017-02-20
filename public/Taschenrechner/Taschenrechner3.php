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

	select{
		width: 130px;
	}
</style>
<body>
	<form action="Taschenrechner3.php" method="post">
		<p><h1>Taschenrechner</h1></p>
		<table>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>
					<select name="selectList" size="10">
						<?php
						if(isset($_POST['btnBerechnen']))
						{
							if(trim(!empty($_POST['txtOp1'])) && trim(!empty($_POST['txtOp2'])))
							{
								$_POST['txtErgebnis'] = $_POST['txtOp1'] + $_POST['txtOp2'];
								$meinErgebnis = $_POST['txtErgebnis'];

								?>
								<option><?=$meinErgebnis?></option>
								<?php

							}

							$_SESSION['listenEintrag'][] = $meinErgebnis;

						}
						else
						{
							foreach($_SESSION['listenEintrag'] as $eintrag)
							{
								?>
								<option><?=$eintrag?></option>
								<?php
							}
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Operand 1</td>
				<td>Operator</td>
				<td>Operand 2</td>
				<td></td>
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

				if(isset($_POST['btnRc']))
				{
					$_SESSION['listenEintrag'] = "";
				}
				?>
				<td>
					<input type="text" 
					       name="txtOp1" 
					       value="<?=(!empty($_POST['txtOp1']) ? isset($_POST['btnLoeschen']) ? $value : $_POST['txtOp1'] : '')?>"/>
				</td>
				<td>+</td>
				<td>
					<input type="text" 
					       name="txtOp2" 
					       value="<?=(!empty($_POST['txtOp2']) ? isset($_POST['btnLoeschen']) ? $value : $_POST['txtOp2'] : '')?>"/>
				</td>
				<td>=</td>
				<td>
					<input type="text" 
					       name="txtErgebnis" 
					       value="<?=(!empty($_SESSION['meinErgebnis']) ? isset($_POST['btnLoeschen']) ? $value : $_SESSION['meinErgebnis'] : '')?>"/>
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
				<td><input type="submit" name="btnRc" value="RC"/></td>
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
