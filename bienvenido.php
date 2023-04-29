<?php
$usuario = $_POST['usuario'];
$password = $_POST['password'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
            if($usuario == 'anthony' && $password == '1234'){
                echo "<h1>Bienvenido</h1>";
                echo "<p>Usuario: ".$usuario."</p>";
                echo "<a href='calculadora.html' class='btn btn-primary'>Ir a calculadora</a>";
                
                echo "<a href='calculadora2.html' class='btn btn-primary mt-3'>Ir a calculadora de 4 números</a>";

                echo "<a href='calculadora3.html' class='btn btn-primary mt-3'>Mayor y menor entre 2 números</a>";

                echo "<a href='calculadora4.html' class='btn btn-primary mt-3'>Promedio de 3 notas</a>";

                echo "<a href='calculadora5.html' class='btn btn-primary mt-3'>Mayor y menor de 3 números</a>";
            }
            else{
            ?>
                <h1>Usuario no valido</h1>
                <a href="index.php" class="btn btn-danger">Regresar al Login</a>
                <?php
                }
            ?>
                </div>
            </div>      
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
</body>
</html>