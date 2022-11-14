<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XAMPP guide by OA</title>
    <link rel="stylesheet" href="home.css" type="text/css">
</head>
<body>
    
    <h2 class="tl">Guia de instalación de xampp</h2>

    <div class="content">

        <p class="p">&nbsp;&nbsp;A continuación estare presentando una guia rapida y detallada de como instalar xampp. A pesar de ser una instalación sencilla hay algunos pasos que pueden ser confusos. Este no es mas que un paquete de instalación completo el cual contiene el servidor Apache + MariaDB + PHP + Perl. Este ha sido diseñado para ser increíblemente fácil de instalar y usar. Alguna de las ventajas consta de no tener la necesidad de instalar estos complementos por separado. Mas informacion aquí:<a href="https://www.apachefriends.org/es/about.html">https://www.apachefriends.org/es/about.html.</a> </p>

        <div class="slider-block">
            <div class="slider">
                <img id="img1" src="Resources/XAMPP3.jpg">
                <img id="img2" src="Resources/XAMPP2.jpg">
                <img id="img3" src="Resources/XAMPP1.jpg">
            </div>
        </div>

        <div class="steps">

            <h2 class="tl">1. Descarga del instalador en la pagina oficial XAMPP</h2>
            <p class="p">&nbsp;&nbsp;Como primer paso se debe acceder a la pagina oficial de XAMPP para descargar su instalador y proceder con la instalación. <b>No recurrir a paginas de terceros o externas.</b></p>

            <img src="Resources/XAMPP-DW1.jpg" class="images">
            <p class="p">Seleccionar el sistema operativo compatible con su ordenador.</p>
            <img src="Resources/XAMPP-DW2.jpg" class="images">
        </div>

        <div class="steps">
            <h1 class="tl">2. Instalador de XAMPP</h1>
            <p>&nbsp;&nbsp;Luego de haber realizado la descarga, se ejecuta el instalador ".exe" en el caso de windows. Al ejecutarlo como administrador comenzara el setup de instalación para XAMPP.</p>

            <img src="Resources/XAMPINST1.jpg" class="images">

            <p><i>[Nota: al iniciar el setup puede que salga un mensaje de alerta antes de abrir la ventana como el que se muestra en el ejemplo. En ese caso solo se selecciona "aceptar" y saltara su ventana de instalación]</i></p>

            <img src="Resources/XAMPINST8.jpg" class="images">
        
            <!-- 3. Componentes -->
            <h1 class="tl">3. Seleccionar componentes</h1>
            <p>&nbsp;&nbsp;Las primeras opciones son seleccionar los componentes que va a instalar XAMPP, se puede seleccionar cada componente por separado de forma personalizada, aunque lo mas recomendable es instalar todos los componentes disponibles en el panel, así en caso de llegar a necesitarlos de imprevisto, no tendras que rehacer la instalación.</p>

            <img src="Resources/XAMPINST2.jpg" class="images">

            <!-- 4. Path -->
            <h1 class="tl">4. Path o ruta de instalación</h1>
            <p>&nbsp;&nbsp;El siguiente paso es seleccionar el "path" o ruta de instalación en la cual se va a instalar la carpeta raiz de XAMPP, es muy recomendable dejarla en su ruta por defecto en el disco principal, aún así se nos permite cambiar la ubicación de la carpeta raiz.</p>
            <img src="Resources/XAMPINST3.jpg" class="images">

            <h1 class="tl">5. Lenguaje</h1>
            <p>Se selecciona el lenguaje preferido para mostrar en la interfaz.</p>
            <img src="Resources/XAMPINST4.jpg" class="images">

            <h1 class="tl">6. Proceso de instalación</h1>
            <p>&nbsp;&nbsp;Luego de establecer toda la configuración, el setup procederá a instalar todos los archivos en la carpeta raiz con una calida bienvenida a XAMPP.</p>
            <img src="Resources/XAMPINST5.jpg" class="images">

            <h1 class="tl">7. Firewall</h1>
            <p>&nbsp;&nbsp;Al ir terminando la instalación, aparecerá una ventana del firewall de windows donde seleccionaremos los permisos que tendra XAMPP dentro de nuestras conexiones de red, es recomendable aceptar ambas opciones tanto publicas como privadas (aunque basta con solo permitir las privadas). </br></br><i>[nota: Si por algún motivo ocurre un error con los permisos de red, más tarde podra volver a configurarlos dentro del panel de control de firewall.]</i> </p>
            <img src="Resources/XAMPINST6.jpg" class="images">

            <h1 class="tl">8. instalación completa</h1>
            <p>&nbsp;&nbsp;Y listo, así estará instalado XAMPP en nuestro OS, ahora antes de ejecutarlo se debe configurar el xampp dentro de las variables de entorno de nuestro OS.</p>
            <img src="Resources/XAMPINST7.jpg" class="images">
        </div>
    </div>

    
    <div>
        <a href="execute.php" class="btn_log" style="text-decoration: none;text-align:center;">Siguiente</a>
    </div>

    <footer>
        <div class="footer">
            <h3> Made by: Osnel Arriaga</h3>
            <h4>November - 2022 | XAMPP Guide</h4>
        </div>
    </footer>

</body>
</html>