<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Owner" content="Osnel Arriaga">
    <link rel="icon" href="icon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>

    <form class="log" action="" method="POST">
        <div class="inputs_places">
            <div class="log_title">
                <h1>Welcome, login below</h1>
            </div>
            <!-- Entradas por usuario -->
            <input type="text" autocomplete="off" placeholder="Username" name="usu" id="usu" class="input" >
            <input type="password" autocomplete="off" placeholder="Password" name="pass" id="pass" class="input">
            <button type="submit" id="boton" name="add" class="btn_log">Login</button>
            <!-- CODIGO PHP LOGIN -->
            <?php
                error_reporting(0); //elimina la aparicion de mensajes de error en el frontend
                // constantes para obtener valor del input password & username
                define("usu", $_POST["usu"]);
                define("password", $_POST["pass"]);
                $usu = usu;
                //condiciones para verificar datos
                if(isset($_POST['add'])){ //obtener la accion del boton loginin
                    if(password == "Contraseña1" && usu == "User"){
                        echo "<h4>Bienvenido $usu</h4>";
                        echo '<a href="home.php" class="btn_log" style="text-decoration: none;text-align:center;">Acceder</a>';

                    }else if(password != "Contraseña1" && usu != "User"){
                        print("<h3>Username/Password invalid...</h3>");
                    }
                }         
            ?>
        </div>
    </form>
</body>
</html>