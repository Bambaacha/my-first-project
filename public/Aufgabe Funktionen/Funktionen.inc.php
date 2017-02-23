<?php
/**
 * Created by PhpStorm.
 * User: miltos
 * Date: 21.02.17
 * Time: 10:48
 */
function bubbleSort($array)
{
	$size = count($array);
	
	for ($i=0; $i<$size; $i++)
	{
		for ($j=0; $j < $size-1-$i; $j++)
		{
			if ($array[$j+1] < $array[$j])
			{
				$temp = $array[$j];
				$array[$j] = $array[$j +1];
				$array[$j +1] = $temp;
			}
		}
	}
	return $array;
}

function countArrayValues($array, $value)
{
	$counter = 0;

	foreach($array as $activeValue)
	{
		if($activeValue === $value)
		{
			$counter++;
		}
	}
	return $counter;
}

function numberArrayUnique($array)
{
	$arrayNumbers = array();
	$size = count($array);
	
	for($i = 0; $i < $size; $i++)
	{
		$arrayNumbers[$array[$i]] = $array[$i];
	}
	return $arrayNumbers;
}