<?php

if (isset($_POST["nominals"]) && isset($_POST["sum"]) ) { 

    // Get array of nums
    $nominals = explode(',', $_POST["nominals"]);
    // Reverse sort of nominals
    rsort($nominals);

    // Get sum and saving sum
    $sum = $save_sum = $_POST["sum"];
    // Create epty array for response
    $result = array();


    for ($i=0; $i < (count($nominals)) ; $i++) {
        
        // Check for correct sum
        if ($sum < $nominals[(count($nominals))-1]) {
            // Getting the nearest sums
            $min = $save_sum - $sum;
            $max = $save_sum + $nominals[(count($nominals))-1]%$sum;
            // Send an error
            die(json_encode(array('error' => 'Неверная сумма. Выберите '.$min.' или '.$max.'.')));
        }

        // Append nominals to response (first variant)
        $nominal_value = intdiv($sum, $nominals[$i]);
        $result[$nominals[$i]] = $nominal_value;
        $sum -= $nominal_value*$nominals[$i]; 

        // Second variant
        // ------------------------------------

        // while ($nominals[$i] <= $sum) {
        //     $sum -= $nominals[$i];
        //     $result[$nominals[$i]] += 1;
        // }

        // ------------------------------------
    }

    echo json_encode($result); 
}

?>