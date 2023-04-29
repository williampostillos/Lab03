<?php
    $mensaje = "Bienvenido a nuestra página web";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Mi sitio</title>
</head>
<body>
<div class="container">
    <div class="row mt-3">
        <h1>
            <?php
                echo $mensaje;
            ?>
        </h1>
        <h2>
            <?php
                echo "Desarrollo de aplicaciones de internet"
            ?>
        </h2>
        <div class="row">
            <div class="col-6 col-md-9 col-lg-6 mt-5">
                <div class="card">
                    <div class="card-tittle text-white">
                        Ingreso
                    </div>
                </div>
                <div class="card-body">
                    <form id="formLogin" action="bienvenido.php" method="post">
                        <div class="form-group">
                            <label>Usuario:</label>
                            <input id="usuario" name="usuario" type="text" class="form-control" placeholder="Ingrese su usuario" required>
                        </div>

                        <div class="form-group mt-3">
                            <label>Password:</label>
                            <input id="password" name="password" type="password" class="form-control" placeholder="Ingrese su password" required>
                        </div>
            
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-secondary col-12">Ingresar</button>
                        </div>
                        <div class="mt-3">
                            <p class="text-center">
                                <a href="javascript:informar();">¿Olvido su contraseña?</a>
                            </p>
                            <p id="mensaje" class="text-primary text-center"></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  
</body>
</html>