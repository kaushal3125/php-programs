<?php
//WRITE A PHP PROGRAM TO CRATE A MULTY DIMENTRION ARRAY

        $marks = array( 
            "roshan" => array(
                "physics" => 35,
                "maths" => 30,	
                "chemistry" => 39
                ),
            
            "twinkle" => array(
                "physics" => 30,
                "maths" => 32,
                "chemistry" => 29
                ),
            
            "zara" => array(
                "physics" => 31,
                "maths" => 22,
                "chemistry" => 39
                )
            );
         
         /* Accessing multi-dimensional array values */
         echo "Marks for Roshan in physics : " ;
         echo $marks['roshan']['physics'] . "<br>"; 
         
         echo "Marks for Twinkle in maths : ";
         echo $marks['twinkle']['maths'] . "<br>"; 
         
         echo "Marks for Zara in chemistry : " ;
         echo $marks['zara']['chemistry'] . "<br>";
echo "<br>";
echo"THIS PROGRAM IS DONE BY KAUSHAL ERP- 154";
         
?>
