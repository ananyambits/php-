<?php
$units=(int)$_POST['units'];
$rate=(float)$_POST['rate'];
$total=$units*$rate;
echo "<h2>Electricity Bill</h2>";
echo "Units Consumed:$units kwh<br>";
echo "Tariff Rate:$".number_format($rate,2)."per kwh<br>";
echo "Total cost:$".number_format($total,2);
?>
