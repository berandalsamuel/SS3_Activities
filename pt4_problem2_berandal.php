<!DOCTYPE html>
<html>
<head>
    <title>Perfect Square Detection</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            padding: 20px;
        }
        .container {
            background: #ffffff;
            padding: 20px;
            width: 400px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .square {
            color: #0066cc;
        }
        .summary {
            margin-top: 15px;
            padding-top: 10px;
            border-top: 1px solid #ccc;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Perfect Squares (1–100)</h2>

    <?php
    $count = 0;
    $largest = null;
    $smallest = null;

    for ($num = 100; $num >= 1; $num--) {
        for ($i = 1; $i <= $num; $i++) {
            if ($i * $i == $num) {
                echo "<div class='square'>$num</div>";

                $count++;

                if ($largest === null || $num > $largest) {
                    $largest = $num;
                }
                if ($smallest === null || $num < $smallest) {
                    $smallest = $num;
                }
                break;
            }
        }
    }
    ?>

    <div class="summary">
        Total Perfect Squares: <?php echo $count; ?><br/>
        Largest Perfect Square: <?php echo $largest; ?><br/>
        Smallest Perfect Square: <?php echo $smallest; ?>
    </div>
</div>

</body>
</html>
