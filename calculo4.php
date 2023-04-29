<?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $numero3 = $_POST['numero3'];

    $resultado = ($numero1 + $numero2 + $numero3)/3;

    if($resultado>=13){
        $prom='Aprobado';
    }else{
        $prom='Desaprobado';
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
    <h1><?php echo $prom; ?> </h1>
</body>
</html>