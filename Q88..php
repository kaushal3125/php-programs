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
    
    $sql = "SELECT Stud_ID, Stud_Name, Stud_Email, Stud_Contact
    FROM students";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<table border='1'><tr><th>ID</th><th>Name</th>
        <th>Email</th><th>Contact</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["Stud_ID"].
    "</td><td>" . $row["Stud_Name"].
    "</td><td>" . $row["Stud_Email"].
    "</td><td>" . $row["Stud_Contact"]."</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
echo"<br>";
echo"THIS PROGRAM IS DONE BY KAUSHAL ERP- 154";
        
?>
