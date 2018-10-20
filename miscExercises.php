<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 10/20/18
 * Time: 2:33 PM
 */
// first exercise
function isBitten() : bool {
	$bite = rand(1, 100);
	if ($bite <= 50) {
		return true;
	} else {
		return false;
	}
}

if(isBitten() === true) {
	echo "Charlie bit your finger!";
} else {
	echo "Charlie did not bite your finger! \n";
}
echo "<br/>";

// second exercise
function countWords($str) {
	$words = preg_split('/[\s,]+/', $str);
	$wordsCounted = (array_count_values($words));
	var_dump($wordsCounted);
}

countWords($_GET['stringInput']);
?>
<form method="get" action="">
	<label for="stringInput">Enter a string:</label>
	<input name="stringInput" type="text"/>
	<input name="submit" type="submit"/>
</form>

<?php

