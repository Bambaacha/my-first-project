<?php
/**
 * Created by PhpStorm.
 * User: miltos
 * Date: 21.02.17
 * Time: 10:48
 */
function bubbleSort($items)
{
	$size = count($items);
	
	for ($i=0; $i<$size; $i++)
	{
		for ($j=0; $j < $size-1-$i; $j++)
		{
			if ($items[$j+1] < $items[$j])
			{
				$temp = $items[$j];
				$items[$j] = $items[$j +1];
				$items[$j +1] = $temp;
			}
		}
	}
	return $items;
}

function countArrayValues($array, $value)
{
	$counter = 0;

	foreach($array as $actvalue) /*go through every value in the array*/
	{
		if($actvalue === $value)
		{
			$counter++; /*increase the count by 1*/
		}
	}

	return $counter;
}