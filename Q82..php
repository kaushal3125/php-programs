<!DOCTYPE html>
<html>
<head>
    <title>Favorite Car Selection</title>
    <style>
        .form-box {
            border: 2px solid black;
            padding: 20px;
            width: fit-content;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="form-box">
        <p>Please select your favorite car:</p>
        <form method="post">
            <input type="radio" name="car" value="Nissan"> Nissan<br>
            <input type="radio" name="car" value="Toyota"> Toyota<br>
            <input type="radio" name="car" value="Mitsubishi"> Mitsubishi<br>
            <br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>

    <?php
    if (isset($_POST['submit']) && isset($_POST['car'])) {
        $selectedCar = $_POST['car'];
        // Display the selected car without a box
        echo "<p>Your favorite car is $selectedCar</p>";
    }
    ?>

    <p>THIS PROGRAM IS DONE BY KAUSHAL ERP - 154</p>
</body>
</html>


