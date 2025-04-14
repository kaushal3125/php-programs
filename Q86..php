<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydbvaani";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "INSERT INTO students
    (Stud_ID, Stud_Name, Stud_Email, Stud_Contact)
    VALUES
    (101, 'Akshay', 'akshay@gmail.com', '1234567890');";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
echo"<br>";
echo"THIS PROGRAM IS DONE BY KAUSHAL ERP - 154";
        
        
?>

