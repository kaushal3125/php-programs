<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydbvaani";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "ALTER TABLE students
    ADD PRIMARY KEY (Stud_ID),
    ADD UNIQUE KEY Stud_Email (Stud_Email);";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table students altered successfully";
    } else {
        echo "Error altering table: " . $conn->error;
    }
    
    $conn->close();
echo"<br>";
echo"THIS PROGRAM IS DONE BY KAUSHAL ERP - 154";
        
?>

