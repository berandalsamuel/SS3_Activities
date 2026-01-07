<!DOCTYPE html>
<html>
<head>
    <title>Sample Program</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            background-color: #cfe9ff;
        }

        table {
            margin: auto;
            border-collapse: collapse;
            background-color: white;
            width: 70%;
        }

        th, td {
            padding: 10px;
            border: 1px solid #000;
        }

        th {
            background-color: #cccccc;
        }

        tbody tr:nth-child(even) {
            background-color: #648bf5;
            color: white;
        }

        tbody tr:nth-child(odd) {
            background-color: #435adf;
            color: white;
        }

        h1 {
            margin-bottom: 5px;
        }
    </style>
</head>

<body>

<?php
    $firstname = "Samuel";
    $lastname  = "Berandal";

    $costs = [
        "Lumber"        => 150000,
        "Concrete"      => 78000,
        "Drywall"       => 69000,
        "Paint"         => 12000,
        "Miscellaneous" => 20000
    ];

    $total = array_sum($costs);

    function addPercent($value, $percent) {
        return $value + ($value * $percent / 100);
    }
?>

<h1>Welcome to my page!!!</h1>
<p><strong>Name:</strong> <?php echo "$firstname $lastname"; ?></p>

<table>
    <thead>
        <tr>
            <th>Expenditures</th>
            <th>Estimated Cost</th>
            <th>10% Increase</th>
            <th>15% Increase</th>
            <th>20% Increase</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($costs as $item => $price): ?>
        <tr>
            <td><?php echo $item; ?></td>
            <td>$<?php echo number_format($price, 2); ?></td>
            <td>$<?php echo number_format(addPercent($price, 10), 2); ?></td>
            <td>$<?php echo number_format(addPercent($price, 15), 2); ?></td>
            <td>$<?php echo number_format(addPercent($price, 20), 2); ?></td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <th>Total</th>
            <th colspan="4">$<?php echo number_format($total, 2); ?></th>
        </tr>
    </tbody>
</table>

</body>
</html>
