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
      /************************ ARRAY INDICIZZATI **********************************/
      echo "<h3>Sez: Array indicizzati</h3>";

          $mesi = array("gennaio" , "febbraio" , "marzo" , "aprile" ,"maggio" , "giugno" , "luglio",
        "agosto", "settembre" , "ottobre" , "novembre" , "dicembre");

       echo "I mesi dell'anno sono: " . $mesi[0] . " " . $mesi[1] . " " . $mesi[2] . " ecc..";

         echo "<hr>";    // crea una linea di separazione

// come aggiungere valori all'interno dell'ARRAY

        array_push($mesi, "tredicesimo");    // aggiunge il valore "tredicesimo" all'ultima posizione dell'array
        unset($mesi[0]);                     // elimina l'elemento in questa posizione dall'array

        echo count($mesi);    // numero degli elementi presenti nell'array
         echo "<Br>"; 
              echo  "dichiarazione della funzione var_dump dentro il codice php";    // crea una linea di separazione



        echo "<pre>";
        var_dump($mesi);
        echo "</pre>";

?>
<hr>dichiarazione della funzione var_dump dentro il codice html
<pre>
    <?php
        var_dump($mesi);
     ?>

</pre>


<?php
  /************************ ARRAY ASSOCIATIVI **********************************/
  echo "<h3>Sez: Array associativi</h3>";

  $eta = array(
      "Piero" => "35",
      "Roberto" => "36",
      "Simone" => "34",
      "Lucia" => "28",
      "Simona" => "32",
  );
  echo "valore contenuto nell'elemento Piero-> " . $eta['Piero'] . "</br>";
  echo "valore contenuto nell'elemento Roberto-> " . $eta['Roberto'] . "</br>";
  echo "valore contenuto nell'elemento Simone-> " . $eta['Simone'] . "</br>";


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
