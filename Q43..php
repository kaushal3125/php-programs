<html>
<body>

<?php
/* First method to create an array. */
$salaries = array("roshan" => 2000, "twinkle" => 1000, "zara" => 500);

echo "Salary of Roshan is " . $salaries['roshan'] . "<br />";
echo "Salary of Twinkle is " . $salaries['twinkle'] . "<br />";
echo "Salary of Zara is " . $salaries['zara'] . "<br />";

/* Second method to create an array. */
$salaries['roshan'] = "high";
$salaries['qadir'] = "medium";
$salaries['twinkle'] = "low";

echo "Salary of Roshan is " . $salaries['roshan'] . "<br />";
echo "Salary of Twinkle is " . $salaries['twinkle'] . "<br />";
echo "Salary of Zara is " . (isset($salaries['zara']) ? $salaries['zara'] : "not defined") . "<br />"; // Handling missing Zara
echo"<br>";
echo"THIS PROGRAM IS DONE BY KAUSHAL ERP - 154";

?>

</body>
</html>

