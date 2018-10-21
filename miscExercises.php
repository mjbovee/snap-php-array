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

<?php
// more practice

$thisMonth = date('F', time());
if($thisMonth == 'December' || $thisMonth == 'January' || $thisMonth == "February") {
	echo "It's " . $thisMonth . " which means it's winter.";
} elseif($thisMonth == 'March' || $thisMonth == 'April' || $thisMonth == 'May') {
	echo "It's " . $thisMonth . " which means it's spring.";
} elseif($thisMonth == 'June' || $thisMonth == 'July' || $thisMonth == 'August') {
	echo "It's " . $thisMonth . " which means it's summer.";
} elseif($thisMonth == 'September' || $thisMonth == 'October' || $thisMonth == 'November') {
	echo "It's " . $thisMonth . " which means it's fall.";
} else {
	echo "I don't know what month it is!";
}

$i = 0;
echo "<p>\n";
	while($i++ < 10) {
		echo "abc ";
	}
echo "</p>\n";

$i = 0;
echo "<p>\n";
	do {
		echo "xyz ";
		$i++;
	} while ($i < 10 );
echo "</p>\n";

echo "<p>\n";
	for ($i = 0; $i < 10; $i++) {
		echo $i;
}
echo "</p>\n";

echo "\n<ol>";
	for ($letter = 'A'; $letter < 'G'; $letter++) {
		echo "<li> Item " . $letter . "</li>\n";
	}
echo "\n</ol>";

echo "\n<ol>";
	for ($i = 1; $i <= 12; $i++) {
		$iSquared = $i * $i;
		echo "<li>" . $i . " * " . $i . " = " . $iSquared . "</li>";
	}
echo "\n</ol>";

echo "<table>\n";
	for ($row = 1; $row <= 12; $row++) {
		echo "<tr>\n";
			for ($col = 1; $col <= 12; $col++) {
				$tableData = $row * $col;
				echo "<td> $tableData </td>\n";
			}
		echo "</tr>";
	}
echo "</table>";