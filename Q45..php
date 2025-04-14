<?php
// Sample student data
$students = [
    ["name" => "VAANI", "marks" => 85],
    ["name" => "KAUSHAL", "marks" => 92],
    ["name" => "VINAYA", "marks" => 78],
    ["name" => "PRABHJOT", "marks" => 88],
    ["name" => "VANSHIKA", "marks" => 91],
];

// Calculate the total marks and percentage
$totalMarks = 0;
foreach ($students as $student) {
    $totalMarks += $student['marks'];
}

$totalPossibleMarks = 100 * count($students);  // Assuming 100 marks per student
$percentage = ($totalMarks / $totalPossibleMarks) * 100;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marks</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
            font-family: Arial, sans-serif;
        }
        th, td {
            padding: 8px 12px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .summary {
            margin-top: 20px;
            font-size: 16px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Student Marks Table</h1>
    <table>
        <thead>
            <tr>
                <th>Student Name</th>
                <th>Marks</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Loop through the student data and generate rows
            foreach ($students as $student) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($student['name']) . "</td>";
                echo "<td>" . htmlspecialchars($student['marks']) . "</td>";
                echo "</tr>";
            }

            ?>
        </tbody>
    </table>

    <div class="summary">
        <p><strong>Total Marks: </strong><?php echo $totalMarks; ?> / <?php echo $totalPossibleMarks; ?></p>
        <p><strong>Percentage: </strong><?php echo number_format($percentage, 2); ?>%</p>
THIS PROGRAM IS DONE BY KAUSHAL ERP - 154
    </div>
</body>
</html>
