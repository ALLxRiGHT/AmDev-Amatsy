<?php 



class King extends AbstractChessmen
{
	// King's constructor
	function __construct($base_x, $base_y) 
	{
       $this->x = $base_x;
       $this->y = $base_y;
       echo 'The king has been created<br>';
	}

	// Сhanging coordinates 
	function Move($to_x, $to_y)
	{	
		echo 'Moving the king to '.$to_x.', '.$to_y.'<br>';
		//Check the available coordinates
		if (in_array($to_x, range($this->x-1,$this->x+1)) && in_array($to_y, range($this->y-1,$this->y+1))) 
		{
			// Set x = to_x, y = to_y
			$this->set($to_x, $to_y);

			// Сoordinate output
			$this->getPosition();
		}
		else
		{
			// Throw exception
			throw new Exception("Unavailable coordinates for the king", 1);
			
		}
	}
}
?>