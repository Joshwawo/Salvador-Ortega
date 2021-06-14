<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos2.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
</head>
<body>
	

    <form action="" method="POST" id="form">
        <div class="form">
            <h1>Contactar</h1>
            <div class="grupo">
                <input type="text" name="name" id="name" required><span class="barra"></span>
                <label for="">Nombre completo</label>
            </div>
            <div class="grupo">
                <input type="email" name="email" id="email" required><span class="barra"></span>
                <label for="">Correo electronico</label>
            </div>
            <div class="grupo">
                <input type="text" name="cel" id="password" required><span class="barra"></span>
                <label for="">Numero de celular</label>
            </div>

            <button  type="submit" name="register">Contactar</button>
        </div>
    </form>
    <script src="main.js"></script>
    <?php
    include("registrar.php");
    ?>
</body>
</html>