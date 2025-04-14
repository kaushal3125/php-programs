<?php

    $x = 25;
    $y = 35;
    $z = "25";
    
    var_dump($x == $z); echo"<br>";// Outputs: boolean true
    var_dump($x === $z);echo"<br>"; // Outputs: boolean false
    var_dump($x != $y); echo"<br>"; // Outputs: boolean true
    var_dump($x !== $z);echo"<br>";// Outputs: boolean true
    var_dump($x < $y);echo"<br>";   // Outputs: boolean true
    var_dump($x > $y);echo"<br>";   // Outputs: boolean false
    var_dump($x <= $y);echo"<br>";  // Outputs: boolean true
    var_dump($x >= $y);echo"<br>";  // Outputs: boolean falseecho "<br>";
echo"THIS PROGRAM IS DONE BY KAUSHAL ERP-154"; 
?>
