<?php 



abstract class AbstractChessmen implements IChessmen
{	
	// Chess coordinates
	protected $x;
	protected $y;

  	// Setter for x,y
	protected function set($new_x, $new_y)
	 {
	    // Сhecking the boundaries of the board
    	if ($new_x >=1 && $new_x <= 8 && $new_y >=1 && $new_y <= 8) 
    	{
    		$x = $new_x;
    		$y = $new_y;
    	}
    	else
    	{
    		//Throw exception
    		throw new Exception("Value must be in range 0 to 8", 1);
    		
    	}
	}

    // Public method to get chess position
    public function getPosition() 
    {
        echo('Current coordinates '.$this->x.', '.$this->y."<br>");
    }
}
?>