<!DOCTYPE html>
<html>
<body>
<?php
//write a php code to demonstrate date_sunrise() function

//Calculate the sunrise time for Lisbon, Portugal
//Latitude: 38.4 North
//Longitude: 9 West
//Zenith ~= 90
//offset: +1 GMT

echo("<h2>Lisbon, Portugal</h2>");
echo("Date: " . date("D M d Y"));
echo("<br>Sunrise time: ");
echo(date_sunrise(time(),SUNFUNCS_RET_STRING
,38.4,-9,90,1));
echo("<br>Sunset time: ");
echo(date_sunset(time(),SUNFUNCS_RET_STRING,
38.4,-9,90,1));
?>

</body>
</html>
<p>THIS PROGRAM IS DONE BY KAUSHAL ERP - 154</p>
