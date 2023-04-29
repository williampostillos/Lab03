<?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacion = $_POST['operacion'];
 
    switch($operacion) {
        case "sumar":
            $resultado = $numero1 + $numero2;
            break;
            
        case "restar":
            $resultado = $numero1 - $numero2;
            break;
            
        case "multiplicar":
            $resultado = $numero1 * $numero2;
            break;
            
        case "division":
            $resultado = $numero1 / $numero2;
            break;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>El resultado es: <?php echo $resultado; ?> </h1>
</body>
</html>