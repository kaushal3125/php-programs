<?php
// Function to calculate the factorial of a number
function factorial($number) {
    // If the number is less than or equal to 1, return 1 (base case)
    if ($number <= 1) {
        return 1;
    }
    // Otherwise, recursively calculate the factorial
    return $number * factorial($number - 1);
}

// Example usage
$number = 5; // You can change this value to test with other numbers
$result = factorial($number);

// Display the result
echo "The factorial of $number is: $result";
echo"<br>";
echo"THIS PROGRAM IS DONE BY KAUSHAL ERP-154";
?>
