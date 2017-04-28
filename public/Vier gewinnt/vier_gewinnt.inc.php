<?php
/**
 * Created by PhpStorm.
 * User: miltos
 * Date: 24.02.17
 * Time: 11:29
 */
function seeIsEmptyLine($button)
{
	
}

function winner($array, $colour)
{
	
}

function kreisHinzufuegen($spieler, $placeArray, $button)
{
	for($i = 41; $i>=0; $i--)
	{
		if(isset($placeArray[$i]) && $placeArray[$i][1] == $button)
		{
			if(($spieler % 2) == 1)
			{
				$placeArray[$i][2] = 1;
				echo '<pre>'.var_export($placeArray[$i], true).'</pre>';
			}
			elseif(($spieler % 2) == 0)
			{
				$placeArray[$i][2] = 2;
				echo '<pre>'.var_export($placeArray[$i], true).'</pre>';
			}
		}
	}

return $placeArray;
}