<?php
//write php code to demonstrate bitwise operator
// Declare two variables
$a = 5;  // In binary: 0101
$b = 3;  // In binary: 0011

// Bitwise AND
$and = $a & $b;  // Result: 0001 (1 in decimal)
echo "a & b = $and";
echo"<br>";

// Bitwise OR
$or = $a | $b;   // Result: 0111 (7 in decimal)
echo "a | b = $or";
echo"<br>";

// Bitwise XOR
$xor = $a ^ $b;  // Result: 0110 (6 in decimal)
echo "a ^ b = $xor";
echo"<br>";

// Bitwise NOT (inverts the bits of $a)
$not = ~$a;  // Result: -6 (because of how negative numbers are represented in 2's complement)
echo "~a = $not";
echo"<br>";

// Left Shift (shifts the bits of $a 2 positions to the left)
$leftShift = $a << 2;  // Result: 20 (in binary: 10100)
echo "a << 2 = $leftShift";
echo"<br>";
// Right Shift (shifts the bits of $a 2 positions to the right)
$rightShift = $a >> 2;  // Result: 1 (in binary: 0001)
echo "a >> 2 = $rightShift";
echo"<br>";
echo"THIS PROGRAM IS DONE BY KAUSHAL ERP- 154";
?>

