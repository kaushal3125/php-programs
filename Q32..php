<?php

// Function to check if a number is Armstrong
function isArmstrong($number) {
    $numStr = (string)$number;
    $length = strlen($numStr);
    $sum = 0;
    
    // Calculate the sum of each digit raised to the power of the number of digits
    for ($i = 0; $i < $length; $i++) {
        $digit = (int)$numStr[$i];
        $sum += pow($digit, $length);
    }
    
    // Check if the sum is equal to the original number
    return $sum == $number;
}

// Example usage
$number = 153;

if (isArmstrong($number)) {
    echo $number . " is an Armstrong number.";
} else {
    echo $number . " is not an Armstrong number.";
}

echo"<br>";
echo"THIS PROGRAM IS DONE BY KAUSHAL ERP-154";

?>
