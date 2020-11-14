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


      echo "<h3>Sez: Echo e Concatenazione</h3>";
            $var1 = "Roberto";
            $var2 = "35";
            $var3 = "Roma";
      echo "Ciao il mio nome è $var1. </br> La mia età è: $var2 anni e vivo a $var3 </br></br>";
      echo "<hr>";
                        echo "<p>Metodo echo alternativo</p>";    // crea una linea di separazione
                                /* metodo altenativo */

   echo "Ciao il mio nome è: " . $var1 . "</br>" . "la mia età è: " . $var2 . "anni e vivo a: " . $var3 . "</br>";


      echo "<hr>";    // crea una linea di separazione



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
