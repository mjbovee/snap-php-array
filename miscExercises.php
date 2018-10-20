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
	return $wordsCounted;
}
$makeTable = countWords($_GET['stringInput']);

function htmlTable($tbl){
	array_multisort($tbl, SORT_DESC);
	echo "<table>";
	foreach ($tbl as $key=>$value) {
		echo "<tr>";
			echo "<td>" . $key . "</td>";
			echo "<td>" . $value . "</td>";
		echo "</tr>";
	}
	echo "</table>";

}

echo htmlTable($makeTable);

?>
<form method="get" action="">
	<label for="stringInput">Enter a string:</label>
	<input name="stringInput" type="text"/>
	<input name="submit" type="submit"/>
</form>



