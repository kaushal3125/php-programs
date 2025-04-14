<?php
     
    /* First method to associate create array. */
    $marks = array("english" => 75, "science" => 90, "maths" =>85, "History"=> 80, "Computer"=>88);
     
  $total_marks=array_sum($marks);
$total_subjects= count($marks);
$total_possible_marks=$total_subjects*100;
$percentage=($total_marks/$total_possible_marks)*100;
echo "Total marks: $total_marks <br>";
echo "Percentage: ".number_format($percentage,2)."%";
echo"<br>";
echo"THIS PROGRAM IS DONE BY KAUSHAL ERP- 154";
?>
