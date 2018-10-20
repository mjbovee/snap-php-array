<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 10/20/18
 * Time: 2:33 PM
 */

function isBitten() {
	$bite = rand(1, 10);
	if ($bite <= 5) {
		return true;
	}
}

if(isBitten()) {
	echo "Charlie bit your finger!";
} else {
	echo "Charlie did not bite your finger!";
}