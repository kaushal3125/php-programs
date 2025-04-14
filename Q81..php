<?php
function createChessBoard() {
    echo '<table style="border-collapse: collapse; border: 5px solid black;">';

    for ($row = 0; $row < 8; $row++) {
        echo '<tr>';

        for ($col = 0; $col < 8; $col++) {
            $color = (($row + $col) % 2 == 0) ? 'white' : 'black';
            echo "<td style='width: 50px; height: 50px; background-color: $color; border: 1px solid black;'></td>";
        }

        echo '</tr>';
    }

    echo '</table>';
}

createChessBoard();

echo "<br>";
echo"THIS PROGRAM IS DONE BY KAUSHAL ERP- 154";
?>
