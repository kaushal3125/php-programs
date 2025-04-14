<?php
// Define the array
$array = [10, 45, 23, 78, 12, 56, 89, 34];

// Initialize the first element as the biggest number
$biggestNumber = $array[0];

// Loop through the array to compare each element
for ($i = 1; $i < count($array); $i++) {
    // If the current element is greater than the biggestNumber, update biggestNumber
    if ($array[$i] > $biggestNumber) {
        $biggestNumber = $array[$i];
    }
}

// Display the biggest number
echo "The biggest number in the array is: " . $biggestNumber;
echo"<br>";
echo"THIS PROGRAM IS WRITTEN BY KAUSHAL ERP-154";
?>
