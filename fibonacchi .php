<?php
function fibonacci($n) {
    $a = 0;
    $b = 1;
    
    for ($i = 0; $i < $n; $i++) {
        echo $a . " ";
        $temp = $a;
        $a = $b;
        $b = $temp + $b;
    }
}

// Example usage:
fibonacci(10);
echo"<br>";
echo"THIS PROGRAM IS DONE BY KAUSHAL ERP-154";
?>
