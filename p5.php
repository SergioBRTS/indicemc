<!doctype html>
<html lang="en">
<?php
if (isset($_POST['num1']) && isset($_POST['num2'])) {
    $r = $_POST['num1'];
    $h = $_POST['num2'];
}

?>

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
                            <form method="POST" action="p5.php">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">ingresa Radio r</label>
                                    <input type="number" name="num1" class="form-control">
                                    <small id="number" class="form-text text-muted">Radio </small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Alto h</label>
                                    <input type="number" name="num2" class="form-control">
                                </div>
                                <?php if (isset($r) && isset($h)) { 
                                  $pi=3.1426; 
                                  $radio = $r * $r;
                                  $v=($pi * $radio * $h)/3;
                                 ?>
                                
                                <div class="form-group">
                                    <label name="respuesta" for="inputPassword"><?php echo $v; ?>-cm Cubicos </br></label>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>