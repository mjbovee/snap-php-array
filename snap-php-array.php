<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 10/19/18
 * Time: 8:07 AM
 */

$georgeArray = array(1,2,3,5,8,13,21,34,55,89,144);

$sum = array_sum($georgeArray);
echo $sum;
echo "<br>";

$newArray = array();

for($i = 0; $i < sizeof($georgeArray); $i++) {
	$arrayValue[$i] = intval($georgeArray[$i]);
	$arrayValue[$i] *= $arrayValue[$i];
	array_push($newArray, $arrayValue[$i]);
}
var_dump($newArray);

