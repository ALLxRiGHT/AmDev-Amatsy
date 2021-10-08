<?php



class Queen extends AbstractChessmen
{
	// King's constructor
	function __construct($base_x, $base_y) 
	{
       $this->x = $base_x;
       $this->y = $base_y;
       echo 'The queen has been created<br>';
	}

	// Сhanging coordinates 
	function Move($to_x, $to_y)
	{	
		echo 'Moving the queen to '.$to_x.', '.$to_y.'<br>';
		//Check the available coordinates
		if ((in_array($to_x, range(1,8)) && ($this->y == $to_y)) || 
			(in_array($to_y, range(1,8)) && ($this->x == $to_x)) ||
			(($to_x - $this->x) == ($to_y - $this->y))) 
		{
			// Set x = to_x, y = to_y
			$this->set($to_x, $to_y);

			// Сoordinate output
			$this->getPosition();
		}
		else
		{
			// Throw exception
			throw new Exception("Unavailable coordinates for the queen", 1);
		}
	}
}
?>