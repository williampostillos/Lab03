<?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacion = $_POST['operacion'];
 
    if($numero2 != 0){
        if($numero1>$numero2){
            $resultado1 = $numero1 + $numero2;
            $resultado2 = $numero1 - $numero2;
        }else{
            $resultado1 = $numero1 * $numero2;
            $resultado2 = $numero1 / $numero2;
        }

    }else{
        $resultado1 = "El segundo valor no puede ser 0";
        $resultado2 = "Por favor cambie el valor del segundo número";
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
    <h1>El resultado de la primera operación es: <?php echo $resultado1; ?> </h1>
    <h1>El resultado de la segunda operación es: <?php echo $resultado2; ?> </h1>
</body>
</html>