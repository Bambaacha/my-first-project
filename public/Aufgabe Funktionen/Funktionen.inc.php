<?php
/**
 * Created by PhpStorm.
 * User: miltos
 * Date: 21.02.17
 * Time: 10:48
 */
function sortieren($field1, $field2)
{
	if($field1 > $field2)
	{
		return $field1;
	}
	else
	{
		return $field2;
	}
}

function bubbleSort($items)
{
	$size = count($items);

	for ($i=0; $i<$size; $i++)
	{
		for ($j=0; $j < $size-1-$i; $j++)
		{
			if ($items[$j+1] < $items[$j])
			{
				arraySwap($items, $j, $j+1);
			}
		}
	}
	return $items;
}

function arraySwap(&$arr, $index1, $index2)
{
	list($arr[$index1], $arr[$index2]) = array($arr[$index2], $arr[$index1]);
}