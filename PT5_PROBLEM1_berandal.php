<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Grade Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
        }
        .container {
            width: 350px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
        }
        label {
            display: inline-block;
            width: 140px;
            margin-bottom: 8px;
        }
        input[type="number"] {
            width: 120px;
            padding: 5px;
        }
        button {
            margin-top: 10px;
            padding: 8px 15px;
            cursor: pointer;
        }
        .result {
            margin-top: 15px;
            font-weight: bold;
        }
    </style>
    
</head>
<body>

<div class="container">
    <h2>Grade Calculator</h2>

    <form method="post">
        <label>1st Quarter Grade:</label>
        <input type="number" name="q1" required><br>

        <label>2nd Quarter Grade:</label>
        <input type="number" name="q2" required><br>

        <label>3rd Quarter Grade:</label>
        <input type="number" name="q3" required><br>

        <label>4th Quarter Grade:</label>
        <input type="number" name="q4" required><br>

        <button type="submit" name="calculate">Calculate</button>
    </form>

    <?php
    if (isset($_POST['calculate'])) {

        $q1 = $_POST['q1'];
        $q2 = $_POST['q2'];
        $q3 = $_POST['q3'];
        $q4 = $_POST['q4'];

        $average = ($q1 + $q2 + $q3 + $q4) / 4;

        if ($average >= 90) {
            $description = "Outstanding";
            $remarks = "Passed";
        } elseif ($average >= 85) {
            $description = "Very Satisfactory";
            $remarks = "Passed";
        } elseif ($average >= 80) {
            $description = "Satisfactory";
            $remarks = "Passed";
        } elseif ($average >= 75) {
            $description = "Fairly Satisfactory";
            $remarks = "Passed";
        } else {
            $description = "Did Not Meet Expectations";
            $remarks = "Failed";
        }

        echo "<div class='result'>";
        echo "Average Grade: " . number_format($average, 2) . "<br>";
        echo "Description: $description<br>";
        echo "Remarks: $remarks";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
