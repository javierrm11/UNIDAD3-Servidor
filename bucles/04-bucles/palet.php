<?php
    $colores = [
        "#FF5733", "#33FF57", "#3357FF", "#FFD700", "#800080", 
        "#FF1493", "#20B2AA", "#FF4500", "#008000", "#4169E1"
    ];
?>
<!DOCTYPE html>
<!-- Mostrar paleta de colores. Utilizar una tabla que muestre el color y el valor
hexadecimal que le corresponde. Cada celda será un enlace a una página que
mostrará un fondo de pantalla con el color seleccionado. ¿Puedes hacerlo con los
conocimientos que tienes? -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            font-size: 3rem;
            text-align: center;
            font-family: cursive;
        }
        table{
            width: 100%;
        }
        th {
            font-size: 2rem;
            text-align: center;
            font-family: cursive;
            width:50%;
        }
        td{
            font-size: 1.5rem;
            text-align: center;
            font-family: cursive;
            height: 100px;
        }
        a{
            font-size: 1.5rem;
            text-align: center;
            font-family: cursive;
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Paleta de colores</h1>
    <table>
        <th>Color</th>
        <th>hexadecimal</th>
        
        <?php
        // bucle
        foreach($colores as $color){
            echo 
            "<tr>
                <td style='background-color: $color;'><a href='color.php?color=" . urlencode($color) . "'>Ver color</a></td>
                <td> $color </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>