<?php
function printPattern($rows) {
    for ($i = $rows; $i >= 1; $i--) {
        // Print asterisks
        for ($j = 1; $j <= (2 * $i - 1); $j++) {
            echo "*";
        }
        echo "<br>";
    }
}

// Number of rows for the pattern
$rows = 8;
printPattern($rows);

echo"THIS PROGRAM IS DONE BY KAUSHAL ERP-154";  


?>
