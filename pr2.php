<?php
if (isset($_POST["est"]) && isset($_POST["peso"]) && is_numeric($_POST["est"]) && is_numeric($_POST["peso"])) {

    $est = $_POST["est"];
    $peso = $_POST["peso"];
  
    $res = $peso / $est * $est;
    $imc = round($res, 01);
  
    $resultado = "";
    $color = "";
    if ($res < 18.5) {
      $resultado = "peso inferior";
      $color = "llelow";
      echo phpinfo();
    }
    if ($res >= 18.5 and $res < 24.5) {
      $resultado = "normal";
      $color = "green";
    }
    if ($res > 24.5) {
      $resultado = "sobrepeso";
      $color = "red";
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      
    <h1>Hello, world!</h1>
    <form action="pr2.php" method="POST">
        <input type="number" step="0.01" name="est" placeholder="ingresa peso">
        <input type="number" step="0.01" name="peso" placeholder="peso" >
        </br>
        <?php if (isset($imc)) {?>
        <label>El Resultado es <?php echo $imc; ?></label> 
        <?php ?>
        <input type="submit" > </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>