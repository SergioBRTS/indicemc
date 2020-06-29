<!doctype html>
<?php
if (isset($_POST['dia'])) {
    $dia=$_POST['dia'];
}
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
<div class="container">
    <div class="row">
        <div class="col">
            <div class="container">
                 <div class="row">
                    <div class="col-sm">
                        <form method="POST" action="p7.php">
                            <div class="form-group">
                                <label for="exampleInputEmail1" min="0" max="24">introduce la dia formato 24 hrs</label>
                                <input type="number" name="dia" class="form-control">
                                <small id="number" class="form-text text-muted">Radio </small>
                            </div>                          
                            <?php
                            if (isset($dia)){
                                $aludo=null;
                                switch ($dia) {
                                    case '1':
                                        $aludo= 'lunes';
                                        break;
                                    case '2':
                                        $aludo='martes';
                                        break;
                                    case '3':
                                        $aludo= 'miercoles';
                                        break;
                                    case '4':
                                        $aludo= 'jueves';
                                        break;
                                    case '5':
                                        $aludo= 'friday';
                                        break;
                                    case '6':
                                        $aludo= 'sabado';
                                        break;
                                    case '7':
                                        $aludo= 'domingo';
                                        break;
                                    default:
                                        $aludo= 'ingresa un dia se la semana valido';
                                        break;
                                }
                               
                            ?>
                                
                            <div class="form-group">
                                <label name="respuesta" for="inputPassword"><?php echo $aludo; ?> </br></label>
                            </div>
                            <?php } ?>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>