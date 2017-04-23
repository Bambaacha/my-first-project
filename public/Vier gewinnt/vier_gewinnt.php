<?php
/**
 * Created by PhpStorm.
 * User: miltos
 * Date: 21.02.17
 * Time: 10:47
 */
	session_start();
	include('vier_gewinnt.inc.php');
unset($_SESSION['rowCol']);
?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Vier gewinnt</title>
	</head>
	<style>
		html {
			text-align: center;
		}
		.table {
			margin-top: 20px;
			width: 450px;
		}
		.table td {
			width: 60px;
			height: 60px;
			text-align: center;
		}
		tr input {
			width: 60px;
		}
		a {
			margin-bottom: 60px;
		}
	</style>
	<body>
		<form action="vier_gewinnt.php" method="post">
			<p><h1>Vier gewinnt</h1></p>
			<table class="table" border="1" align="center">
				<?php
				if(true)
				{
					for($i = 1; $i <= 6; $i++)
					{
						for($z = 1; $z <= 7; $z++)
						{
							$myarr = array($i, $z);

							$_SESSION['rowCol'][] = $myarr;


							?>
							<tr id="row<?=$_SESSION['rowCol'][$i]?>">
								<td id="column<?=$_SESSION['rowCol'][$i][$z]?>"
							<?php
						}
						?>
							</tr>
					<?php
					}
				}
				?>
			</table>
			<table align="center">
				<tr>
					<td><input type="submit" name="btn1" value="" /></td>
					<td><input type="submit" name="btn2" value="" /></td>
					<td><input type="submit" name="btn3" value="" /></td>
					<td><input type="submit" name="btn4" value="" /></td>
					<td><input type="submit" name="btn5" value="" /></td>
					<td><input type="submit" name="btn6" value="" /></td>
					<td><input type="submit" name="btn7" value="" /></td>
				</tr>
			</table>
				<div>Der zwiete Spieler ist an der Reihe</div>
				<div>Der erste Spieler ist an der Reihe</div>
			<?php
var_dump($_SESSION);
			if(isset($_POST['btn1']) || isset($_POST['btn2']) || isset($_POST['btn3']))
			{
			}

			if(isset($_POST['btnRemove']))
			{
			}

			if(isset($_POST['btnStart']))
			{
			}
			?>
			<input type="submit" name="btnStart" value="Spiel starten" />
			<input type="submit" name="btnRemove" value="Spiel neu starten" />
		</form>
	</body>
</html>
