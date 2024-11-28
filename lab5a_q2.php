<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Table</title>
</head>
<body>
    <table border="1">
            <tr>
                <th>Name</th>
                <th>Program</th>
                <th>Age</th>
            </tr>
            <?php
            $students = [
                [
                    'name' => 'Alice',
                    'program' => 'BIP',
                    'age' => 21
                ],
                [
                    'name' => 'Bob',
                    'program' => 'BIS',
                    'age' => 20
                ],
                [
                    'name' => 'Raju',
                    'program' => 'BIT',
                    'age' => 22
                ]
            ];

            // Loop through the students array and display each student's data in a table row
            foreach ($students as $student) {
                echo "<tr>";
                echo "<td>" . $student['name'] . "</td>";
                echo "<td>" . $student['program'] . "</td>";
                echo "<td>" . $student['age'] . "</td>";
                echo "</tr>";
            }
            ?>
    </table>
</body>
</html>