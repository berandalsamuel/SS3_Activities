<?php
$count = 0;
$largest = null;
$smallest = null;


for ($num = 100; $num >= 1; $num--) {

    
    for ($i = 1; $i <= $num; $i++) {
        if ($i * $i == $num) {

            
            echo $num . " is a perfect square.<br/>";

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

echo "<br/>Total perfect squares found: " . $count . "<br/>";
echo "Largest perfect square: " . $largest . "<br/>";
echo "Smallest perfect square: " . $smallest . "<br/>";
?>
