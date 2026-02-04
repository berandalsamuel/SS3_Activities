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

        h1 {
            margin-bottom: 20px;
        }

        table {
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
            background-color: white;
            width: 70%;
        }

        th, td {
            text-align: center;
            padding: 10px;
            border: 1px solid black;
        }

        th {
            background-color: #cccccc;
            color: black;
        }

        tbody tr:nth-child(even) {
            background-color: #648bf5;
            color: white;
        }

        tbody tr:nth-child(odd) {
            background-color: #435adf;
            color: white;
        }

        tfoot td {
            background-color: #eeeeee;
            font-weight: bold;
            color: black;
        }

        .created-by {
            margin-top: 20px;
            font-style: italic;
        }
    </style>
</head>

<body>

<?php
    $firstname = "Samuel";
    $lastname = "Berandal";

    $costs = [
        "Lumber"        => 150000,
        "Concrete"      => 78000,
        "Drywall"       => 69000,
        "Paint"         => 12000,
        "Miscellaneous" => 20000
    ];

    function addPercent($value, $percent) {
        return $value + ($value * $percent / 100);
    }

    // ✅ Formatting function
    function formatMoney($amount) {
        return "$ " . number_format($amount, 2);
    }

    $totalEstimated = 0;
    $total10 = 0;
    $total15 = 0;
    $total20 = 0;
?>

<h1>Welcome to my page!!!</h1>

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
        <?php foreach ($costs as $item => $price): 
            $inc10 = addPercent($price, 10);
            $inc15 = addPercent($price, 15);
            $inc20 = addPercent($price, 20);

            $totalEstimated += $price;
            $total10 += $inc10;
            $total15 += $inc15;
            $total20 += $inc20;
        ?>
        <tr>
            <td><?php echo $item; ?></td>
            <td><?php echo formatMoney($price); ?></td>
            <td><?php echo formatMoney($inc10); ?></td>
            <td><?php echo formatMoney($inc15); ?></td>
            <td><?php echo formatMoney($inc20); ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>

    <tfoot>
        <tr>
            <td>Total Expenditures</td>
            <td><?php echo formatMoney($totalEstimated); ?></td>
            <td><?php echo formatMoney($total10); ?></td>
            <td><?php echo formatMoney($total15); ?></td>
            <td><?php echo formatMoney($total20); ?></td>
        </tr>
    </tfoot>
</table>

<div class="created-by">
    Created by: <strong><?php echo $firstname . " " . $lastname; ?></strong>
</div>

</body>
</html>
