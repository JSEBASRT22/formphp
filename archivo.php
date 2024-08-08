<?php
if (isset($_POST['producto1'], $_POST['precio1'], $_POST['producto2'], $_POST['precio2'], $_POST['producto3'], $_POST['precio3'])) {
    $producto1 = htmlspecialchars($_POST['producto1']);
    $precio1 = (float)$_POST['precio1'];
    $producto2 = htmlspecialchars($_POST['producto2']);
    $precio2 = (float)$_POST['precio2'];
    $producto3 = htmlspecialchars($_POST['producto3']);
    $precio3 = (float)$_POST['precio3'];
    $total = $precio1 + $precio2 + $precio3;
    $descuento = 0.16;
    $totalConDescuento = $total * (1 - $descuento)
    echo "<h1>Detalles de la Compra</h1>";
    echo "<p>Producto 1: $producto1 - Precio: $" . number_format($precio1, 2) . "</p>";
    echo "<p>Producto 2: $producto2 - Precio: $" . number_format($precio2, 2) . "</p>";
    echo "<p>Producto 3: $producto3 - Precio: $" . number_format($precio3, 2) . "</p>";
    echo "<h2>Total a pagar antes del descuento: $" . number_format($total, 2) . "</h2>";
    echo "<h2>Total a pagar con descuento: $" . number_format($totalConDescuento, 2) . "</h2>";
   ?>
