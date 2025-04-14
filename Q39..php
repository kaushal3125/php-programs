 
<?php
// Function to check if the number is Armstrong
function isArmstrong($num) {
    // Convert number to string to get number of digits
    $numStr = strval($num);
    $numDigits = strlen($numStr);
    
    $sum = 0;
    $temp = $num;
    
    // Loop through each digit of the number
    while ($temp > 0) {
        $digit = $temp % 10;  // Get the last digit
        $sum += pow($digit, $numDigits);  // Add the digit raised to the power of number of digits
        $temp = intdiv($temp, 10);  // Remove the last digit from the number
    }
    
    // Check if the sum is equal to the original number
    if ($sum == $num) {
        return true;
    } else {
        return false;
    }
}

// Input: number to check
$number = 153; // Change this to test with different numbers

// Check if the number is Armstrong
if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
echo"<br>";
echo"THIS PROGRAM IS DONE BY KAUSHAL ERP-154";

?>

