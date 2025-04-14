<?php
// Recursive function to calculate factorial
function factorial($n) {
    if ($n <= 1) {
        return 1; // Base case: factorial of 0 or 1 is 1
    } else {
        return $n * factorial($n - 1); // Recursive case
    }
}

// Input number
$number = 5; // You can change this number to test with other values

// Output the factorial
echo "Factorial of $number is: " . factorial($number);
 echo"<br>";
echo"THIS PROGRAM IS DONE BY KAUSHAL ERP- 154";

?>
