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

				for($i = 1; $i <= 6; $i++)
				{
				?>
					<tr id="row<?=$i?>">
					<?php
					for($z = 1; $z <= 7; $z++)
					{
						$myarr = array($i, $z);
						$_SESSION['rowCol'][] = $myarr;
						?>
								<td id="column<?=$z?>"></td>
						<?php
					}
					?>
					</tr>
					<?php
				}
				?>
			</table>
			<table align="center">
				<tr>
					<td><input type="submit" name="1" value="" /></td>
					<td><input type="submit" name="2" value="" /></td>
					<td><input type="submit" name="3" value="" /></td>
					<td><input type="submit" name="4" value="" /></td>
					<td><input type="submit" name="5" value="" /></td>
					<td><input type="submit" name="6" value="" /></td>
					<td><input type="submit" name="7" value="" /></td>
				</tr>
			</table>
			<?php
				if((($_SESSION['spieler'] % 2) == 1))
				{
			?>
					<div>Der erste Spieler ist an der Reihe</div>
			<?php
				}
				else
				{
			?>
					<div>Der zwiete Spieler ist an der Reihe</div>
			<?php
				}

			if(isset($_POST['1']))
			{
				kreisHinzufuegen($_SESSION['spieler'], $_SESSION['rowCol'], 1);
				$_SESSION['spieler']++;
			}

			if(isset($_POST['2']))
			{
				kreisHinzufuegen($_SESSION['spieler'], $_SESSION['rowCol'], 2);
				$_SESSION['spieler']++;
			}

			if(isset($_POST['3']))
			{
				kreisHinzufuegen($_SESSION['spieler'][$alleFelder][1], $_SESSION['rowCol'], 3);
				$_SESSION['spieler']++;
			}

			if(isset($_POST['4']))
			{
				kreisHinzufuegen($_SESSION['spieler'][$alleFelder][1], $_SESSION['rowCol'], 4);
				$_SESSION['spieler']++;
			}

			if(isset($_POST['5']))
			{
				kreisHinzufuegen($_SESSION['spieler'][$alleFelder][1], $_SESSION['rowCol'], 5);
				$_SESSION['spieler']++;
			}

			if(isset($_POST['6']))
			{
				kreisHinzufuegen($_SESSION['spieler'][$alleFelder][1], $_SESSION['rowCol'], 6);
				$_SESSION['spieler']++;
			}

			if(isset($_POST['7']))
			{
				kreisHinzufuegen($_SESSION['spieler'][$alleFelder][1], $_SESSION['rowCol'], 7);
				$_SESSION['spieler']++;
			}

			if(isset($_POST['Remove']) && isset($_SESSION['spieler']))
			{
				unset($_SESSION['spieler']);
				$_SESSION['spieler'] = 1;
			}
echo '<pre>'.var_export($_SESSION['spieler'], true).'</pre>';

			?>
			<input type="submit" name="Start" value="Spiel starten" />
			<input type="submit" name="Remove" value="Spiel neu starten" />
		</form>
	</body>
</html>
