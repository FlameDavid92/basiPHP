<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>
	<div class="jumbotron site-header">
		<div class="container">
			<h1><span class="glyphicon glyphicon-equalizer"></span> Wordpress</h1>
			<p>Le basi di php per wordpress.</p>
		</div>
	</div>
		<div class="footer-color">
			<div class="container text-center">
              <div class="contenuto-php php-color">
                <a class="btn btn-primary" href="index.php" role="button">Torna alla Home</a>
              </br>

<?php

/************************ Ciclo For WHILE **********************************/

           $num = 1;
            while($num < 10) {

              echo "la viraibile attuale del ciclo è: $num </br>";

              $num++;
            }

            echo "<hr> Ciclo while esempio con operatore Moltiplicazione </br>";

            $x = 1;
            while($x < 5) {

                echo "il risultato di $x * 2 è uguale a: " . $x * 2 . "</br>";

              $x++;
            }


     echo "<hr> Ciclo while esempio con array </br>";

        $cars = array("Mercedes", "Volvo", "Audi", "Opel", "Jaguar");
        array_push($cars, "volkswagen");
    //    echo count($cars) . "</br>";
        // echo $cars[0];

        $car = 0;

        while ($car < count($cars)) {

                echo $cars[$car] . "</br>";

          $car++;
        }

 ?>


              </div>

			 </div>
				<!-- /.row -->
			</div>
        </div>
<footer>
        <div class="small-print">
        	<div class="container">

        	</div>
        </div>
	</footer>

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
