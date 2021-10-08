<?php

// Сonnecting files
include 'php/include.php';

try
{
	// Creating new king on x=4, y=3
	$king = new King(4,3);
	// Outputting king's coordinates
	$king->getPosition();
	// Changing king's coordinates to x=2, y=2
	$king->Move(2,2);
}
catch (Exception $e) 
{
	//Exception output
    echo $e->getMessage(), "<br>";
}

echo "<br>";

try
{
	$queen = new Queen(1,1);
	$queen->getPosition();
	$queen->Move(7,3);
}
catch (Exception $e) 
{
    echo $e->getMessage(), "<br>";
}

?>