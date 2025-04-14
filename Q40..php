<?php
// Function to calculate the number of digits
function countDigits($number) {
    // Ensure the number is positive
    $number = abs($number);
    
    // If number is 0, it has 1 digit
    if ($number == 0) {
        return 1;
    }

    // Convert the number to a string and count the characters
    return strlen((string)$number);
}

// Input: You can change this number to test with different values
$number = 123456789;

// Output the number of digits
echo "The number of digits in $number is: " . countDigits($number);
echo"<br>";
echo"THIS PROGRAM IS DONE BY KAUSHAL ERP-154";
?>

