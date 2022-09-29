<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página dinámica del lado del servidor</title>
</head>
<body>
    <!-- El nombre del día de la semana se obtiene mediante el código interpretado en el servidor -->
    Hola, hoy es 
    <?php
        $dias_semana = array("domingo","lunes","martes",
                             "miércoles","jueves","viernes","sábado");
        echo $dias_semana[date("w")];
    ?>
</body>
</html>