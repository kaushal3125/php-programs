<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator</title>
</head>
<body>

    <h2>Age Calculator</h2>

    <!-- Form to input birthdate -->
    <form method="post">
        <label for="birthdate">Enter your birthdate (YYYY-MM-DD):</label>
        <input type="date" id="birthdate" name="birthdate" required>
        <button type="submit">Calculate Age</button>
    </form>

    <?php
    // write a php program to calculate the no. of year, month and days of your age 
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the entered birthdate
        $birthdate = $_POST['birthdate'];

        // Validate if a birthdate is entered
        if (!empty($birthdate)) {
            // Calculate the age
            $birthDateObj = new DateTime($birthdate);
            $currentDate = new DateTime('today');
            
            // Get the difference between the two dates
            $age = $birthDateObj->diff($currentDate);
            
            // Output the result
            echo "<p>Age: " . $age->y . " years, " . $age->m . " months, and " . $age->d . " days.</p>";
        } else {
            echo "<p>Please enter a birthdate.</p>";
        }
    }
    ?>

THIS PROGRAM IS DONE BY KAUSHAL ERP- 154

</body>
</html>
