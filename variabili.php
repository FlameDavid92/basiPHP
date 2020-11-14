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


        echo "<h3>Sez: VARIABILI</h3>";

        $txt = "piero";
        $TXT = "Non sono Piero";
        $numero = "15";
          echo $txt . "</br>";
          echo $TXT . "</br>";
          // nomi di variabili accettate
        $variabile1 = "valore variabile";                             // valida
        $viariabile2 = "valore variabile2";                      // valida
        $_viariabile3 = "valore variabile3";                      // valida
    //    $1111323  =                                     // variabile non valida se attivata da errore
    //    $3variabile =                                   // variabile non valide se attivata da errore



?>

        </div>
			 </div>
				<!-- /.row -->
			</div>
        </div>

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
