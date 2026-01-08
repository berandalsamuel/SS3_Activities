<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Monthly Income Summary</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f6f8;
            padding: 40px;
        }

        .income-card {
            max-width: 400px;
            background-color: #ffffff;
            padding: 20px 25px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .income-card h3 {
            margin-top: 0;
            text-align: center;
            color: #333;
        }

        .income-row {
            margin: 10px 0;
            font-size: 15px;
            color: #555;
        }

        .income-row span {
            float: right;
            font-weight: bold;
        }

        .net-income {
            margin-top: 15px;
            padding-top: 10px;
            border-top: 1px solid #ddd;
            font-size: 17px;
            color: #2e7d32;
        }
    </style>
</head>
<body>

<?php
    // Input: Hourly rate
    $hourlyRate = 100;

    // Constants
    $daysPerMonth = 26;
    $hoursPerDay = 8;

    // Calculate gross income
    $grossIncome = $hourlyRate * $hoursPerDay * $daysPerMonth;

    // Calculate tax
    if ($grossIncome <= 15000) {
        $tax = 0;
    } elseif ($grossIncome <= 30000) {
        $tax = ($grossIncome - 15000) * 0.05;
    } else {
        $tax = (15000 * 0.05) + (($grossIncome - 30000) * 0.10);
    }

    // Net income
    $netIncome = $grossIncome - $tax;
?>

<div class="income-card">
    <h3>Monthly Income Summary</h3>

    <div class="income-row">
        Hourly Rate
        <span>$<?= number_format($hourlyRate, 2) ?></span>
    </div>

    <div class="income-row">
        Gross Income
        <span>$<?= number_format($grossIncome, 2) ?></span>
    </div>

    <div class="income-row">
        Tax Deducted
        <span>$<?= number_format($tax, 2) ?></span>
    </div>

    <div class="income-row net-income">
        Net Income
        <span>$<?= number_format($netIncome, 2) ?></span>
    </div>
</div>

</body>
</html>
