<?php

include("con_db.php");

if(isset($_POST['register'])) {
    if(strlen($_POST['name']) >= 1 &&
    strlen($_POST['email']) >= 1 &&
    strlen($_POST['cel']) >= 1) {
    
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $cel = trim($_POST['cel']);
        $fechareg = date("d/m/y");
        $consulta = "INSERT INTO datos(nombre, email, cel, fecha_reg) VALUES ('$name','$email','$cel','fecha_reg')";
        $resultado = mysqli_query($conex, $consulta);
        if($resultado){
            ?>
            <h3 class="ok">Se ha enviado!</h3>
            <?php
        } else{
            ?>
            <h3 class="bad">Ha ocurrido un error</h3>
            <?php
        }
    }   else{
        ?>
        <h3 class="bad">Porfavor Rellene los campos</h3>
        <?php
    }
 
}

?>