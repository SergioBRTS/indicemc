<!DOCTYPE html>
<?php
if (isset($_POST['hora']) && isset($_POST['min'])) {
    $hora=$_POST['hora'];
    $min=$_POST['min'];
    
}
 ?>
<html>

<head>
    <title>title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
    <form style="text-align: center;" action="p10.php" method="POST" >
    <input type="number" placeholder="Ingresa hora" name="hora" ></br>
    <input type="number" placeholder="ingresa los minutos " name="min" step="any"></br>
    <input type="submit" name="">
    </form>
    <?php echo $hora.":".$min.' Hora ingresada</br>';

    $horasseg = ($hora * 3600) + ($min * 60);
    $segundos = (24*60)*60 - $horasseg ;
    echo $segundos. ' segundos restantes para  la media noche' ; 
    ?>
    
</body>

</html>