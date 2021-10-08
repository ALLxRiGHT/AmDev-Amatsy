<?php

// Creating array of words
$words = array('red', 'blue', 'green', 'yellow', 'lime', 'magenta', 'black', 'gold', 'gray', 'tomato');

for ($i=0; $i < 5; $i++) { 

	// Choosing 5 random words
	$selected_words = array_rand($words, 5);

	foreach ($selected_words as $value) {

		// Creating array of colors
		$colors = $words;

		// Removing a color that is equal to a word
		unset($colors[$value]);

		// Choosing one random color
		$selected_color = array_rand($colors, 1);

		// Word output with color
		echo "<span style='color:".$colors[$selected_color].";'>".$words[$value]."</span> ";
		
	}
	// New line
	echo '<br>';
}

// Array output
function arr($arr)
{
	foreach ($arr as $value) {
		echo $value.' ';
	}
	echo '<br>';
}

?>