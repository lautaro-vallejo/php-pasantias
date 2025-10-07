<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $monto = floatval($_POST["monto"] ?? 0);
    $porcentaje = floatval($_POST["porcentaje"] ?? 0);
}

if($monto > 0 && $porcentaje >= 0){
    $propina = ($monto * $porcentaje) / 100;
    $total = ($monto + $propina);
    echo "Propina: $" . number_format($propina, 2) . "<br>Total a pagar: $" . number_format($total, 2);
}else {
    print "ERROR";
}
?>