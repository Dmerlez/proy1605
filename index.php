<?php
/*session_start();
$_SESSION["saludo"]="Hola mundo";*/

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="revision.php"> Revisi&oacute;n sesi&oacute;n </a>
 
        <?php
        echo '<br>';
        echo md5('#holamundo&');
        echo '<br>';
        echo md5('holamundo');
        echo '<br>';
        echo md5('HoLaMundo');
        echo '<br>';
        echo md5('HOLAMundo');
        echo '<br>';
        ?>
        
    </body>
</html>
