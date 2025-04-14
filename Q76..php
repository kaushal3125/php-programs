
<?php
//write a php code to demonstrate set session values and assessing the same 

    // Starting session
    session_start();
     
    // Storing Session Variables
    $_SESSION["firstname"] = "John";
    $_SESSION["lastname"] = "Smith";
    
    
    //Accessing Session Variables
    echo "First name is " . $_SESSION["firstname"] . "<br>";
    echo "Last name is " . $_SESSION["lastname"];
echo"<br>";
echo"THIS PROGRAM IS DONE BY KAUSHAL ERP 154";

?>
