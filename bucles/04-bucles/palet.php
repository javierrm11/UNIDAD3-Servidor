<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paleta de colores con degradado vertical</title>
    <style>
        h1 {
            font-family: system-ui;
            text-align: center;
        }
        td {
            color: #c440bd;
            padding: 1rem;
            font-family: monospace;
        }
    </style>
</head>
<body>
    <h1>Paleta de colores con degradado vertical</h1>
    <table>
    <?php
    // Incremento en cada componente RGB para hacer un degradado progresivo
    $incrementR = 30;  // Incremento  Rojo
    $incrementG = 10;  // Incremento  Verde
    $incrementB = 10;  // Incremento  Azul
    
    for ($r = 0; $r <= 255; $r += $incrementR) {  // Rojo cambia lentamente
        echo "<tr>";
        for ($g = 0; $g <= 255; $g += $incrementG) {  // Verde cambia más rápido
            $b = $g / 2;  // Azul es la mitad del valor de Verde
            // Convertir valores RGB a hexadecimal
            $hex = sprintf("#%02x%02x%02x", $r, $g, $b);
            echo "<td style='background-color: $hex;'>$hex</td>";
        }
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>
