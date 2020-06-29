<!doctype html>
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
            <div class="col text-center">
                <?php
                function crear_piramide($filas)
                {
                    $cadena = null;
                    for ($i = 1; $i <= $filas; $i++) {
                        
                        for ($h = $i; $h <= $i; $h++) {
                            $cadena .= "O";
                        }
                        
                        echo $cadena . "<br />";
                    }
                }

                // Forma de uso
                crear_piramide(9);

                /*$valor=null;
                function corte($valor){
                for ($i=0; $i <$valor ; $i++) { 
                    for ($j=0; $j <$valor ; $j++) { 
                        for ($k=0; $k<$valor ; $k++) {
                            for ($l=0; $l <$valor ; $l++) { 
                                echo (" $i.-.$j.-.$k.-.$l");
                                echo "</br>";   
                            } 
                        }   
                    }
                }
            }
            corte(2);*/

                ?>

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