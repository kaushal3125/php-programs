<?php

// Function to calculate HCF using Euclid's algorithm
function findHCF($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b; // Find the remainder
        $a = $temp;
    }
    return $a; // The HCF is the last non-zero remainder
}

// Example input
$num1 = 56;
$num2 = 98;

// Call the function and display the result
$hcf = findHCF($num1, $num2);
echo "The HCF of $num1 and $num2 is: $hcf";
echo"<br>";
echo"THIS PROGRAM IS DONE BY KAUSHAL ERP-154";

?>
