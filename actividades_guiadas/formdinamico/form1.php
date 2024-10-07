<?php
require("./form.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./form.php" method="post">
        <?php
        foreach($datos as $dato => $valor){
            echo "<input type='text' name='$dato' placeholder='$dato' value=''/>";
        }
        ?>

        <input type="submit" name="enviar" value="Send"/>
    </form>
    <div>
        
    </div>
</body>
</html>