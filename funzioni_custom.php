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


/************************ FUNZIONI CUSTOM **********************************/
echo "<h3>Sez: Funzione senza parametri</h3>";
      function primoTest() {
              $var1 = 10;
              $var2 = 20;
              echo $var1 + $var2;
      }
primoTest();   //chiamo la prima funzione

  echo "<hr>";    // crea una linea di separazione

  echo "<h3>Sez: Funzione con parametri</h3>";
      function moltiplicazione($num1, $num2) {

            echo $num1 * $num2;

      }
      moltiplicazione(20,30);  //chiamo la seconda funzione dando dei parametri

 ?>

              </div>

			 </div>
				<!-- /.row -->
			</div>
        </div>
<footer>
        <div class="small-print">
        	<div class="container">
        		<
        	</div>
        </div>
	</footer>

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
