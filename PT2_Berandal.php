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
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
            background-color: white;
        }

        th, td {
            text-align: center;
            padding: 10px;
        }

        /* Header row color */
        th {
            background-color: #cccccc;
        }

        /* Alternating row colors */
        tr:nth-child(even) {
            background-color: #648bf5ff;
        }

        tr:nth-child(odd) {
            background-color: #435adfff;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>

<?php
    $contact = "09317082115";
    $num1 = 10;
    $num2 = 20;

    $firstname = "Samuel";
    $lastname = "Berandal";

    $sum = $num1 + $num2;
    $sum += 5;

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
<br>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Expenditures</th>
        <th>Estimated Cost</th>
        <th>10% Increase</th>
        <th>15% Increase</th>
        <th>20% Increase</th>
    </tr>

<?php foreach ($costs as $item => $price): ?>
    <tr>
        <td><?php echo $item; ?></td>
        <td>$ <?php echo number_format($price, 2); ?></td>
        <td>$ <?php echo number_format(addPercent($price, 10), 2); ?></td>
        <td>$ <?php echo number_format(addPercent($price, 15), 2); ?></td>
        <td>$ <?php echo number_format(addPercent($price, 20), 2); ?></td>
    </tr>
<?php endforeach; ?>

</table>

</body>
</html>
