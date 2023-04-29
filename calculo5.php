<?php
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$numero3 = $_POST['numero3'];


if ($numero1 > $numero2) {
    $resultado = $numero1;
} else {
    $resultado = $numero2;
}

if ($numero3 > $resultado) {
    $resultado = $numero3;
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
    <h1>El mayor número es: <?php echo $resultado; ?> </h1>
</body>
</html>